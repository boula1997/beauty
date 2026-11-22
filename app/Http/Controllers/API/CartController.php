<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\BannerResource;
use App\Http\Resources\BrandResource;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\PageResource;
use App\Models\Faq;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Color;
use App\Models\Size;
use App\Models\ProductVariation;
use App\Models\Banner;
use Jackiedo\Cart\Facades\Cart;

use Exception;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public $cart, $product, $favourite;
    public function __construct(Cart $cart, Product $product)
    {
        $this->cart = cart();
        $this->product = $product;
        $this->middleware('auth:api', ['except' => []]);

    }

    public function index()
    {
        try {
            $cartData = json_decode(auth('api')->user()->cart, true);

            if(!isset($cartData))
            $cartData=[];
            // Convert associative cart array to indexed array with hash keys
            $cartItems = [];
            foreach ($cartData as $hash => $item) {
                $product = Product::find($item['id']);
                $item = $this->decorateItem($item, $product);
                $cartItems[] = array_merge(['hash' => $hash,
                'image' => $product ? $product->image : null,
                ], $item);
            }
    
            cart()->clearItems();
            loadUserCart(auth()->user()->id);
            
            return response()->json([
                'success' => trans('general.sent_successfully'),
                'count' => count(cart()->getItems()),
                'total' => cart()->getTotal(),
                'cart' => $cartItems,
            ]);
        } catch (Exception $e) {
            return failedResponse($e->getMessage());
        }
    }
    

    public function addToCart(Request $request)
    {
        try {

            $id=$request->id;
            cart()->clearItems();
            loadUserCart(auth()->user()->id);
            updateUserCart();
            
            $product = $this->product->findorfail($id);

            $options = [
                'color' => $request->color_id,
            ];
            $quantity = max(1, (int) ($request->quantity ?? 1));

            // If this color is sold in sizes, the customer must pick one that exists for it.
            $sizedVariations = ProductVariation::where('product_id', $product->id)
                ->where('color_id', $request->color_id)
                ->whereNotNull('size_id');

            if ($sizedVariations->exists()) {
                $variation = $request->filled('size_id')
                    ? (clone $sizedVariations)->where('size_id', $request->size_id)->first()
                    : null;

                if (!$variation) {
                    return response()->json(['error' => __('general.select_size'), 'message' => __('general.select_size')]);
                }

                $options['size'] = $variation->size_id;
            } else {
                $variation = ProductVariation::where('product_id', $product->id)
                    ->where('color_id', $request->color_id)
                    ->first();
            }

            // Never let more into the cart than is in stock for this color / size.
            if ($variation) {
                $alreadyInCart = $this->quantityInCart($product->id, $options);
                if ($variation->quantity <= 0) {
                    return response()->json(['error' => __('general.out_of_stock'), 'message' => __('general.out_of_stock')]);
                }
                if ($alreadyInCart + $quantity > $variation->quantity) {
                    $msg = __('general.only_left_in_stock', ['count' => $variation->quantity]);
                    return response()->json(['error' => $msg, 'message' => $msg]);
                }
            }

            $item = $this->cart->addItem([
                'model' => $product,
                'id' => $product->id,
                'title' => isset($product)?$product->title:'',
                'price' => $product->price,
                'quantity' => $quantity,
                'options' => $options,

            ]);

            updateUserCart();

            return response()->json(['success' => trans('general.sent_successfully'),'count'=>count(cart()->getItems()),
            'hash'=>$item->getHash(),
            'image'=>asset(cartItem($item->getId())->image),
            'inCart'=>isInCart($product->id),
            'total'=>cart()->getTotal(),
            'quantity'=>$item->get('quantity'),
            'cart'=>cart()->getItems(),
            ]);
            
        } catch (Exception $e) {
            return response()->json(['error' => __($e->getMessage())]);
        }
    }

    /** Total quantity already in the cart for a product with the given color / size. */
    private function quantityInCart($productId, array $options): int
    {
        return (int) collect(cart()->getItems())
            ->filter(function ($item) use ($productId, $options) {
                $o = (array) $item->get('options');
                return $item->get('id') == $productId
                    && ($o['color'] ?? null) == ($options['color'] ?? null)
                    && ($o['size'] ?? null) == ($options['size'] ?? null);
            })
            ->sum(fn ($item) => $item->get('quantity'));
    }

    /**
     * Fill in display data in the request's language: product title, color / size names,
     * color hex and remaining stock. Stored cart rows only need the ids.
     */
    private function decorateItem(array $item, ?Product $product): array
    {
        $options = (array) ($item['options'] ?? []);
        $color = !empty($options['color']) ? Color::find($options['color']) : null;
        $size = !empty($options['size']) ? Size::find($options['size']) : null;
        $variation = $product
            ? ProductVariation::forCartOptions($product->id, $options)->first()
            : null;

        $options['colorTitle'] = $color?->title;
        $options['colorHex'] = $color?->hexCode;
        $options['sizeTitle'] = $size?->title;

        if ($product) {
            $item['title'] = $product->title;
        }
        $item['options'] = $options;
        $item['stock'] = $variation?->quantity;

        return $item;
    }

    public function removeItemCart(Request $request)
    {
        try {
            $hash=$request->hash;
            cart()->clearItems();
            loadUserCart(auth()->user()->id);
            $this->cart->removeItem($hash);
            updateUserCart();
            return response()->json(['success' => trans('general.sent_successfully'),'count'=>count(cart()->getItems()),
            'total'=>cart()->getTotal(),
            'cart'=>cart()->getItems(),
            ]);
        } catch (Exception $e) {    
            return response()->json(['error' => __($e->getMessage())]);
        }
    }

    public function updateItemCount(Request $request)
    {
        try {
            cart()->clearItems();
            loadUserCart(auth()->user()->id);
            $hash=$request->hash;

            if(getHashQuantity($hash)==0){
                $this->cart->removeItem($hash);
                return response()->json(['success' => trans('general.sent_successfully'),'count'=>count(cart()->getItems()),'total'=>cart()->getTotal()]);
            }
           
            $price=getHashPrice($hash);
            


            if($request->query('action')=="increment"){
                $cartItem = collect(cart()->getItems())->first(fn ($i) => $i->getHash() == $hash);
                $variation = $cartItem
                    ? ProductVariation::forCartOptions($cartItem->get('id'), $cartItem->get('options'))->first()
                    : null;
                if ($variation && getHashQuantity($hash) + 1 > $variation->quantity) {
                    $msg = __('general.only_left_in_stock', ['count' => $variation->quantity]);
                    return response()->json(['error' => $msg, 'message' => $msg, 'quantity' => getHashQuantity($hash), 'total' => cart()->getTotal()]);
                }
                $updatedItem = $this->cart->updateItem($hash, [
                    'quantity'      =>   getHashQuantity($hash)+1,
                ]);
            }
            else if($request->query('action')=="decrement"){
                $updatedItem = $this->cart->updateItem($hash, [
                    'quantity'      => getHashQuantity($hash)-1,
                ]);
            }


            updateUserCart();
            cart()->clearItems();
            loadUserCart(auth()->user()->id);


            

            return response()->json(['success' => trans('general.sent_successfully'),'count'=>count(cart()->getItems()),'price'=>$price,'quantity'=>getHashQuantity($hash),'total'=>cart()->getTotal()]);
            
        } catch (Exception $e) {
            return response()->json(['error' => __($e->getMessage())]);
        }
    }
    public function checkout(Request $request)
    {
        try {
            cart()->clearItems();
            loadUserCart(auth()->user()->id);
    
            return response()->json([
                'success' => trans('general.sent_successfully'),
                'data' => ['wallet_amount'=>auth()->user()->balance,'total'=>checkoutData()['total'],'summary'=>checkoutData()['data']]
            ]);
    
        } catch (Exception $e) {
            return response()->json([
                'error' => __($e->getMessage())
            ]);
        }
    }   
    



}
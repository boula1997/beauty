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
            // $variation=ProductVariation::where('product_id',$product->id)->where('color_id',$request->color_id)->where('size_id',$request->size_id)->first();
            // $uniqueId = $id . '-' . $request->color_id.'c'.$request->size_id.'s';

        $color = $request->filled('color_id')
            ? Color::find($request->color_id)
            : null;
                    
             
            $item = $this->cart->addItem([
                'model' => $product,
                'id' => $product->id, 
                'title' => $product->title,
                'price' => $product->price,
                'quantity' => $request->quantity??1,
                'options' => [
                    'color' => $request->color_id,
                    'size' => $request->size_id,
                    'colorTitle' => $color ? $color->title : null,
                    // 'offer_id' => $product->productOffer_id,
                    // 'validOffer' => validOffer($product->productOffer),
                ],
              
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
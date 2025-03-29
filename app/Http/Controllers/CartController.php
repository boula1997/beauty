<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductVariation;
use App\Models\SizeTranslation;
use App\Models\Offer;
use App\Models\Store;
use App\Models\Color;
use App\Models\Size;
use Exception;
use Illuminate\Http\Request;
use Jackiedo\Cart\Facades\Cart;

class CartController extends Controller
{
    public $cart, $product, $favourite, $offers, $stores;
    public function __construct(Cart $cart, Product $product,Offer $offers, Store $stores)
    {
        $this->cart = cart();
        $this->favourite = favourite();
        $this->product = $product;
        $this->offers = $offers;
        $this->stores = $stores;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function getCartItems()
    {
        $offers=$this->offers->get();
        $items = $this->cart->getItems();
        $stores = $this->stores->get();
        return view('front.cart', compact('items','offers','stores'));
    }

    public function getFavourites()
    {
        $items = $this->favourite->getItems();
        return view('front.favourite', compact('items'));
    }


    public function addToCart($id,$color,$size,$quantity)
    {
        try {
            
            $product = $this->product->findOrFail($id);
            $offer=isset($product->productOffer)?$product->productOffer->percent:0;
            $variation=ProductVariation::where('product_id',$product->id)->where('color_id',$color)->where('size_id',$size)->first();
            // Generate a unique ID for each cart entry (e.g., using timestamp or UUID)
            $uniqueId = $id . '-' . $color.'c'.$size.'s';

            $item = $this->cart->addItem([
                'model' => $product,
                'id' => $uniqueId, // Ensures each addition has a unique ID
                'title' => $product->title,
                'price' => $variation->offer_price,
                'quantity' => $quantity,
                'options' => [
                    'image' => $variation->image,
                    'color' => $color,
                    'size' => $size,
                    'variation_id' => $variation->id,
                    'colorTitle' => Color::find($color)->title,
                    'sizeTitle' => Size::find($size)->title,
                    'offer_id' => $product->productOffer_id,
                    'validOffer' => validOffer($product->productOffer),
                ],
            ]);
    
            updateUserCart();


            $items = cart()->getItems();
            $itemsArray = array_map(function ($item) {
                return [
                    'id'       => $item->get('id'),
                    'title'    => $item->get('title'),
                    'quantity' => $item->get('quantity'),
                    'price'    => $item->get('price'),
                    'options'  => $item->get('options') ?? [], // Optional
                ];
            }, $items);
              
            return response()->json([
                'success' => trans('general.addCartSuccessfully'),
                'count' => count(cart()->getItems()),
                'cart' => $itemsArray,
                'hash' => $item->getHash(),
                'item' => $item,
                'price' => $item->getPrice(),
                'title' => $item->getTitle(),
                'image' => asset(cartItem($item->getId())->image),
                'inCart' => isInCart($uniqueId),
                'total' => cart()->getTotal(),
                'quantity' => $item->get('quantity'),
                'id' => $uniqueId, 
            ]);
    
        } catch (Exception $e) {
            return response()->json(['error' => __($e->getMessage())]);
        }
    }
    
    
    public function addToFavourite($id)
    {
        try {
            $product = $this->product->findorfail($id);
            $this->favourite->addItem(['model' => $product, 'price' => $product->price]);
            updateUserCart();

            return response()->json(['success' => trans('general.sent_successfully')]);
        } catch (Exception $e) {
            return response()->json(['error' => __($e->getMessage())]);
        }
    }
    public function colorSizes($color_id, $product_id)
    {
        try {
            // Fetch size IDs related to the selected color and product
            $size_ids = ProductVariation::where('color_id', $color_id)
                ->where('product_id', $product_id)
                ->pluck('size_id');
    
            // Fetch size titles in the current locale
            $sizesTitles = SizeTranslation::whereIn('size_id', $size_ids)
                ->where('locale', app()->getLocale())
                ->pluck('title');
    
            // Get the first variation for this color and product to retrieve the price
            $firstVariation = ProductVariation::where('color_id', $color_id)
                ->where('product_id', $product_id)
                ->orderBy('id') // Ensure first variation is selected
                ->first();

                $product = $this->product->findOrFail($product_id);
                $offer=isset($product->productOffer)?$product->productOffer->percent:0;
          
    
            return response()->json([
                'outStock'=>$firstVariation->quantity<=0,
                'sizeTitle' => $sizesTitles,
                'sizeTiIds' => $size_ids,
                'productDetails' => productDetails($firstVariation),

            ]);
        } catch (Exception $e) {
            return response()->json(['error' => __($e->getMessage())]);
        }
    }
    public function product_price($product_id,$color_id, $size_id)
    {
        try {
            // Fetch size IDs related to the selected color and product
            $firstVariation = ProductVariation::where('color_id', $color_id)
                ->where('product_id', $product_id)->where('size_id',$size_id)
                ->first();


                $product = $this->product->findOrFail($product_id);
                $offer=isset($product->productOffer)?$product->productOffer->percent:0;

            return response()->json([
                'outStock'=>$firstVariation->quantity<=0,
                'productDetails' => productDetails($firstVariation),
            ]);
        } catch (Exception $e) {
            return response()->json(['error' => __($e->getMessage())]);
        }
    }
    
    
    
    public function removeItemCart($hash)
    {
        try {
            $this->cart->removeItem($hash);
            updateUserCart();

            return response()->json(['success' => trans('general.removeCartSuccessfully'),'count'=>count(cart()->getItems()),'total'=>cart()->getTotal()]);
        } catch (Exception $e) {
            return response()->json(['error' => __($e->getMessage())]);
        }
    }
    
    public function removeItemFavourite($hash)
    {
        try {
            $this->favourite->removeItem($hash);
            updateUserCart();

            return response()->json(['success' => trans('general.sent_successfully')]);
        } catch (Exception $e) {
            return response()->json(['error' => __($e->getMessage())]);
        }
    }


    public function updateItemCount($hash, $quantity)
    {
        try {
            $updatedItem = $this->cart->updateItem($hash, [
                'quantity'      => $quantity,
            ]);
             
            updateUserCart();

            
            if($quantity==0)
            return response()->json(['success' => trans('general.sent_successfully'),'count'=>count(cart()->getItems()),'total'=>cart()->getTotal()]);
            return response()->json(['success' => trans('general.sent_successfully'),'count'=>count(cart()->getItems()),'price'=>$updatedItem->get('price'),'quantity'=>$updatedItem->get('quantity'),'total'=>cart()->getTotal()]);
            
        } catch (Exception $e) {
            dd($e->getMessage());
            return response()->json(['error' => __($e->getMessage())]);
        }
    }


   public function countCart(){
    $items = cart()->getItems();
    $itemsArray = array_map(function ($item) {
        return [
            'id'       => $item->get('id'),
            'title'    => $item->get('title'),
            'quantity' => $item->get('quantity'),
            'price'    => $item->get('price'),
            'options'  => $item->get('options') ?? [], // Optional
        ];
    }, $items);
      
    return response()->json([
        'success' => trans('general.sent_successfully'),
        'count' => count(cart()->getItems()),
        'cart' => $itemsArray,
        'total' => cart()->getTotal(),
    ]);

}


}
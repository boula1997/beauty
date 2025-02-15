<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Exception;
use Illuminate\Http\Request;
use Jackiedo\Cart\Facades\Cart;

class CartController extends Controller
{
    public $cart, $product, $favourite;
    public function __construct(Cart $cart, Product $product)
    {
        $this->cart = cart();
        $this->favourite = favourite();
        $this->product = $product;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function getCartItems()
    {
        $items = $this->cart->getItems();
        return view('front.cart', compact('items'));
    }

    public function getFavourites()
    {
        $items = $this->favourite->getItems();
        return view('front.favourite', compact('items'));
    }

    public function addToCart($id)
    {
        try {
            $product = $this->product->findorfail($id);
            $this->cart->addItem(['model' => $product, 'price' => $product->price]);
            return redirect()->back();
        } catch (Exception $e) {
            return redirect()->back()->with(['error' => __(dd($e->getMessage()))]);
        }
    }

    public function addToFavourite($id)
    {
        try {
            $product = $this->product->findorfail($id);
            $this->favourite->addItem(['model' => $product, 'price' => $product->price]);
            return redirect()->back();
        } catch (Exception $e) {
            return redirect()->back()->with(['error' => __(dd($e->getMessage()))]);
        }
    }

    public function removeItemCart($hash)
    {
        try {
            $this->cart->removeItem($hash);
            return redirect()->back();
        } catch (Exception $e) {
            return redirect()->back()->with(['error' => __(dd($e->getMessage()))]);
        }
    }

    public function removeItemFavourite($hash)
    {
        try {
            $this->favourite->removeItem($hash);
            return redirect()->back();
        } catch (Exception $e) {
            return redirect()->back()->with(['error' => __(dd($e->getMessage()))]);
        }
    }

}

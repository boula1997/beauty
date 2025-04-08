<?php

use App\Models\Admin;
use App\Models\Banner;
use App\Models\Brand;
use App\Models\Category;
use App\Models\ColorTranslation;
use App\Models\SizeTranslation;
use App\Models\Newsletter;
use App\Models\Contact;
use App\Models\ProductOffer;
use App\Models\Faq;
use App\Models\Merchant;
use App\Models\Offer;
use App\Models\Order;
use App\Models\Page;
use App\Models\ItemRequest;
use App\Models\Orderproduct;
use App\Models\Product;
use App\Models\Setting;
use App\Models\User;
use App\Models\ProductVariation;
use App\Models\Store;
use App\Models\Subcategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Jackiedo\Cart\Facades\Cart;
use Spatie\Permission\Models\Role;
use Illuminate\Http\JsonResponse;


const Message_Mail = "app@gmail.com";

const Newsletter_Mail = "app@gmail.com";
function settings()
{
    return Setting::first();
}

function page($identifier)
{
    return Page::where('identifier', $identifier)->first();
}

function banner($identifier)
{
    return Banner::where('identifier', $identifier)->first();
}

function upload_image($file)
{
    $path =  $file->storeAs('images', $file->getClientOriginalName(), 'public');
    $file->move('images', $path);
    return $path;
}
function updateUserCart()
{
    $user = auth()->user()?auth()->user():auth('api')->user();
    if ($user) {

        // Retrieve and prepare cart items for storage
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

        // Store as JSON
        $user->cart = json_encode($itemsArray, JSON_PRETTY_PRINT);
        $user->save();

        cart()->clearItems();
        loadUserCart(auth()->user()->id);

    } else {
        return redirect()->back()->with(['error' => __('general.something_wrong')]);
    }
}

 function color($color){
    $item=ColorTranslation::where('title',$color)->first();
    return $item->color_id;
}
 function size($size){
    $item=SizeTranslation::where('title',$size)->first();
    return $item->size_id;
}

function validOffer($offer) {
    // If $offer is an ID, fetch the offer from the database
    if (is_numeric($offer)) {
        $offer = Offer::find($offer);
    }

    // Check if $offer is a valid object and has an endDate
    if ($offer && $offer->endDate < now()) {
        return true;
    }
    
    return false;
}


function inStock($variation_id,$quantity,$value=""){
    $variation=ProductVariation::find($variation_id);
    if($value=="status"){
        if($variation->quantity>=$quantity)
         return true;
    
         return false;
    }else{
        return $variation->quantity;
    }
}


function loadUserCart($id)
{

    $user = User::find($id);

    if ($user && $user->cart) {
        // Decode the cart JSON from the database
        $itemsArray = json_decode($user->cart, true);

        if (is_array($itemsArray)) {

            // Remove all items from the cart
            $cart = cart();
            // dd items back into the cart with required attributes
            foreach ($itemsArray as $item) {
                // Access the 'attributes' key of each item
                $attributes = $item ?? null;
                if ($attributes) {
                    $cart->addItem([
                        'id'       => $attributes['id'],       // Required attribute
                        'title'    => $attributes['title'],    // Required attribute
                        'quantity' => $attributes['quantity'], // Required attribute
                        'price'    => $attributes['price'],    // Required attribute
                    ]);
                } else {
                    // Handle cases where attributes are missing or malformed
                    continue;
                }

            }

        }
    }
}

function delete_file($file)
{
    if (file_exists($file))
        File::delete($file);
}

function successResponse($data = [], $message = "success", $status = 200)
{
    return response()->json(
        [
            "status" => $status,
            "message" => $message,
            "data" => $data,
        ],
        $status
        // dd($status)
    );
}

if (!function_exists('validationFailedResponse')) {
    function validationFailedResponse($errors)
    {
        return new JsonResponse([
            'status' => 420,
            'message' => 'error',
            'errors' => $errors
        ], 420);
    }
}

function failedResponse( $message)
{
    return response()->json(
        [
            "status" => 401,
            'errors' => [
                'message' => $message
            ]
        ],
        401
    );
}

function itemsCount($model)
{
    $items = [
        "categories" => count(Category::get()),
        "newsletters" => count(Newsletter::get()),
        "contacts" => count(Contact::get()),
        "pages" => count(Page::get()),
        "products" => count(Product::get()),
        "orders" => count(Order::get()),
        "users" => count(User::get()),
        "roles" => count(Role::get()),
        "admins" => count(Admin::get()),
        "itemRequests" => count(ItemRequest::get()),
        "stores"=>count(Store::get()),
        "faqs"=>count(Faq::get()),
        "offers"=>count(Offer::get()),
        "sizes"=>count(Size::get()),
        "colors"=>count(Color::get()),
        "brands"=>count(Brand::get()),
        "subcategories"=>count(Subcategory::get()),
        "stores"=>count(Store::get()),
    ];

    return $items[$model];
}

function replaceCharsAR($string)
{
    // Create a map of Arabic characters and their replacements
    $replacements = [
        'أ' => 'ا',  // Alef variants
        'إ' => 'ا',
        'آ' => 'ا',
        'ى' => 'ي',  // Arabic letter Yaa
        'ة' => 'ه',  // Arabic letter Teh
        'ؤ' => 'و',  // Arabic letter Waw with Hamza
        'ئ' => 'ي',  // Arabic letter Yaa with Hamza
        'ـ' => '',   // Arabic tatweel (used for stretching text)
        'ِ' => '',   // Diacritical marks - Fatha
        'َ' => '',   // Diacritical marks - Fatha
        'ٌ' => '',   // Diacritical marks - Tanween
        'ٍ' => '',   // Diacritical marks - Tanween
        'ْ' => '',   // Sukun (no vowel mark)
        'ٌ' => '',   // Tanween
    ];

    // Use a single preg_replace_callback to apply all replacements
    $string = preg_replace_callback('/[أإآىةؤئـٌٌٍَِْ]/u', function($matches) use ($replacements) {
        return isset($replacements[$matches[0]]) ? $replacements[$matches[0]] : $matches[0];
    }, $string);

    return $string;
}


if (!function_exists('cart')) {

    function cart()
    {
        $cart=Cart::name('shopping')->useForCommercial();
        $tax = $cart->applyTax([
            'id'         => 123,
            'title'      => 'VAT 10%',
            'rate'       => 0,
            'extra_info' => [
                'description'    => 'The V.A.T tax',
                'reference_link' => 'https://example.com'
            ]
        ]);
        return $cart;
    }
}
if (!function_exists('favourite')) {

    function favourite()
    {
        return cart()->newInstance('favourites')->useForCommercial(false);
    }
}

if (!function_exists('contacts')) {

    function contacts($type)
    {
        return isset($type) ?  Contact::where('type', $type)->get() : Contact::latest()->get();;
    }
}

if (!function_exists('bestSellingProducts')) {

    function bestSellingProducts()
    {
        return OrderProduct::select('product_id')
            ->with('product') 
            ->selectRaw('count(*) as total_sales') 
            ->groupBy('product_id') 
            ->orderByDesc('total_sales')
            ->take(10) 
            ->get() 
            ->pluck('product'); 
    }
}


if (!function_exists('isInCart()')) {

    function isInCart($id)
    {
        foreach(cart()->getItems() as $item)
        if($item->getId() == $id)
        return true;

        return false;
    }
}
if (!function_exists('getHash()')) {

    function getHash($id)
    {


        // Access the `id` of the first cart item
        foreach (cart()->getItems() as $item) {
            if ($item->getId()==$id) {
                $hash = $item->getHash();
                return $hash;
            }
        }
    }
}


if (!function_exists('checkoutData()')) {

    function checkoutData()
    {
        $discount = 0;
        $total = cart()->getTotal();
        $delivery = 8;
        $allTotal=0;
        // Calculate discount
        foreach (cart()->getItems() as $item) {
            $product = Product::find(strtok($item->getId(), '-'));
            $variation = $product->variation; // Ensure correct variation retrieval
            $discount += $variation->price - $variation->offer_price;
            $allTotal+=$variation->price;
        }

        $subTotal = $allTotal;

        // Return as formatted array
        return [
            'total' => $total+8,
            'data' => [
                [
                    'key' => __('general.Subtotal'),
                    'value' => $subTotal>=0?$subTotal:0,
                ],
                [
                    'key' => __('general.Discount'),
                    'value' => $discount,
                ],
                [
                    'key' => __('general.Delivery'),
                    'value' => $delivery,
                ],
                [
                    'key' => __('general.Total'),
                    'value' => $total+8,
                ],
            ]
        ];
    }


}
if (!function_exists('orderCheckoutData()')) {

    function orderCheckoutData($order)
    {
        $discount = 0;
        $total = $order->orderproducts->sum('total');
        $delivery = 8;
        $allTotal=0;

        // Calculate discount
        foreach ($order->orderproducts as $item) {
            $product = Product::find($item->product_id);
            if ($product) {
                $allTotal += $product->price; 
            }

        }

        $subTotal = $allTotal;

        // Return as formatted array
        return [
            'data' => [
                [
                    'key' => __('general.Subtotal'),
                    'value' => $subTotal,
                ],
                [
                    'key' => __('general.Discount'),
                    'value' => $discount,
                ],
                [
                    'key' => __('general.Delivery'),
                    'value' => $delivery,
                ],
                [
                    'key' => __('general.Total'),
                    'value' => $subTotal-$discount+$delivery,
                ],
            ]
        ];
    }


}


if (!function_exists('getHashQuantity()')) {

    function getHashQuantity($hash)
    {


        // Access the `id` of the first cart item
        foreach (cart()->getItems() as $item) {
            if ($item->getHash()==$hash) {
                return $item->get('quantity');
            }
        }

        return 0;

    }
}
if (!function_exists('getHashPrice()')) {

    function getHashPrice($hash)
    {


        // Access the `id` of the first cart item
        foreach (cart()->getItems() as $item) {
            if ($item->getHash()==$hash) {
                return $item->get('price');
            }
        }
    }
}


function productDetails($variation)
{
    $price = $variation->price;
    $offer = $variation->product->productOffer;

    // Check if an offer exists and is within the valid date range
    $isValidOffer = $offer && now()->between($offer->startDate, $offer->endDate);
    $offerPer = $isValidOffer ? $offer->percentage : 0;

    return [
        'price' => $price,
        'priceAfterOffer' => $variation->offer_price, // Ensure offer_price handles validity
        'offerPer' => $offerPer,
        'hasOffer' => $isValidOffer && $offerPer > 0,
    ];
}

if (!function_exists('getQuantity()')) {

    function getQuantity($id)
    {
        foreach(cart()->getItems() as $item)
        if($item->getId() == $id)
        return $item->get('quantity');

        return 1;
    }
}
if (!function_exists('cartItem()')) {

    function cartItem($id)
    {
        return Product::findorfail($id);
    }
}
if (!function_exists('itemBG()')) {

    function itemBG($value1, $value2)
    {
        return $value1!=$value2?'bg-success':'';
    }
}

if (!function_exists('categories()')) {

    function categories()
    {
       return Category::latest()->get();
    }
}
if (!function_exists('storeImages()')) {

    function storeImages()
    {
        $paths = []; // Multiple images
        $variationImages = []; // Variation images
        $path = "";  // Single image
    
    
        // Handle single image upload
        if (request()->hasFile('image')) {
            $file=request()->file('image');
            $data['image'] =  $file->storeAs('images', $file->getClientOriginalName(), 'public');
            // $file->move('images', $data['image']);
            $path =  $data['image'];
        }
    
        // Handle multiple image    s upload
        if (request()->hasFile('images')) {
            $files = request()->file('images');
            foreach ( $files  as $file) {
                $data['image'] =  $file->storeAs('images', $file->getClientOriginalName(), 'public');
                // $file->move('images', $data['image']);
                $paths[] = $data['image'];
            }
        }
    
        // Handle variation images
        foreach (request()->variations as $variation) {
            if (isset($variation['image'])) {
                $file = $variation['image'];
                $data['image'] =  $file->storeAs('images', $file->getClientOriginalName(), 'public');
                // $file->move('images', $data['image']);
                $variationImages[] =  $data['image'];
            }
        }
    
        return [
            'image' => $path,
            'images' => $paths,
            'variationImages' => $variationImages,
        ];
    }
    
    
}

function googleMapServerKey()
{
//    $map_api_key_server = 'AIzaSyB_l2x6zgnLTF4MKxX3S4Df9urLN6vLNP0';
    $map_api_key_server = 'AIzaSyDbPN8yiJrsC79xl4Uw4Ak9UqVHv71rC5o';
    // $map_api_key_server = $map_api_key_server ? $map_api_key_server->value : null;
    return $map_api_key_server;
}


if (!function_exists('topSelling')) {

    function topSelling($limit = 10)
    {
        $topProductIds = DB::select('SELECT count(product_id) as cnt, product_id
                                     FROM orderproducts
                                     GROUP BY product_id
                                     ORDER BY cnt DESC
                                     LIMIT ?', [$limit]);

        $productIds = array_map(fn($item) => $item->product_id, $topProductIds);

        return Product::whereIn('id', $productIds)->get();
    }
}

if (!function_exists('topRated')) {

    function topRated($limit = 10)
    {
        return Product::whereNotNull('rate')
            ->orderByDesc('rate')
            ->limit($limit)
            ->get();
    }
}
if (!function_exists('generateMerchantUsername')) {

    function generateMerchantUsername($email)
    {
        $letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $numbers = '0123456789';
        $allChars = $letters . $numbers;

        $username = '';
        $prefix = substr($email, 0, 3); 

        do {
            $username = $prefix . substr(str_shuffle($letters), 0, 2); 
            $randomChars = substr(str_shuffle($allChars), 0, rand(3, 7)); 
            $username .= $randomChars;

        } while (Merchant::where('username', $username)->exists());

        return $username;
    }
}
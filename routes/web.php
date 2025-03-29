<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\HyperpayController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\ShoppingController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MessageController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Mews\Captcha\Facades\Captcha;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('routes', function () {
    $pattern = '~(?:(\()|(\[)|(\{))(?(1)(?>[^()]++|(?R))*\))(?(2)(?>[^][]++|(?R))*\])(?(3)(?>[^{}]++|(?R))*\})~';
$routeCollection = Route::getRoutes();
echo "<table style='width:100%'>";
    echo "<tr>";
        echo "<td width='10%'>
            <h4>HTTP Method</h4>
        </td>";
        echo "<td width='10%'>
            <h4>Route</h4>
        </td>";
        echo "<td width='10%'>
            <h4>Name</h4>
        </td>";
        echo "<td width='70%'>
            <h4>Corresponding Action</h4>
        </td>";
        echo "</tr>";
    foreach ($routeCollection as $value) {
    if($value->methods()[0]=='GET'){
    echo "<tr>";
        echo "<td>" . $value->methods()[0] . "</td>";
        echo "<td>" ."<a class='d-block' href='" .URL::to(' /').'/'.str_replace('{id}','1',preg_replace($pattern, '1'
                ,$value->uri())) ."' target='__blank'>" .URL::to('/').'/'.str_replace('{id}','1',preg_replace($pattern,
                '1',$value->uri())) ."</a>" . "</td>";
        echo "<td>" . $value->getName() . "</td>";
        echo "<td>" . $value->getActionName() . "</td>";
        echo "</tr>";
    }
    }
    foreach ($routeCollection as $value) {
    if($value->methods()[0]!=='GET'){
    echo "<tr>";
        echo "<td>" . $value->methods()[0] . "</td>";
        echo "<td>" ."<p class='d-block'>" .URL::to('/').'/'.str_replace('{id}','1',preg_replace($pattern,
                '1',$value->uri())) ."</p>" . "</td>";
        echo "<td>" . $value->getName() . "</td>";
        echo "<td>" . $value->getActionName() . "</td>";
        echo "</tr>";
    }
    }
    echo "</table>";
});

Route::get('/captcha-refresh', function () {
    return response()->json(['captcha' => Captcha::src()]);
});

Route::group(
[
'prefix' => LaravelLocalization::setLocale(),
'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
],
function () {
Route::get('/register', [App\Http\Controllers\Auth\RegisteredUserController::class,
'create'])->name('user.register-view');
Route::post('/register', [App\Http\Controllers\Auth\RegisteredUserController::class, 'store'])->name('user.register');
Route::get('/login', [App\Http\Controllers\Auth\AuthenticatedSessionController::class,
'create'])->name('user.login-view');
Route::post('/login', [App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'store'])->name('user.login');
Route::get('/forget', [App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'forget'])->name('user.forget');




Route::get('/', [HomeController::class, 'index'])->name('front.home');
Route::get('/shopping', [ShoppingController::class, 'index'])->name('front.shopping_now');
Route::get('/faq-page', 'App/Http/Controllers/FaqController@index')->name('front.faq');
Route::get('/message', [MessageController::class,'index'])->name('front.message');
Route::get('/newsletter', [NewsletterController::class,'index'])->name('front.newsletter');
Route::get('/service', [ServiceController::class,'index'])->name('front.service');
Route::get('/single-service/{id}', [ServiceController::class,'show'])->name('front.show.service');

Route::get('/single-faq', 'App/Http/Controllers/FaqController@show')->name('front.show.faq');



Route::get('/orderproduct', 'App/Http/Controllers/OrderProductController@index')->name('front.orderproduct');
Route::post('/order', [OrderController::class,'store'])->name('front.order.post');
Route::get('/products', [ProductController::class,'index'])->name('front.products');
Route::get('/products/search', [ProductController::class,'search'])->name('front.search');
Route::get('/products/{id}', [ProductController::class,'show'])->name('front.show.product');
Route::get('/brand/products/{id}', [ProductController::class,'brandProducts'])->name('front.brand.products');
Route::get('/category/products/{id}', [ProductController::class,'categoryProducts'])->name('front.category.products');
Route::get('/about', [AboutController::class,'index'])->name('front.about');
Route::get('/vendor', [VendorController::class,'index'])->name('front.vendor');
Route::post('/message', [MessageController::class,'store'])->name('front.message.post');
Route::get('/banner/products', [ProductController::class,'bannerProducts'])->name('front.banner.products');

Route::get('/single-portfolio/{id}', [ServiceController::class,'showportfolio'])->name('front.show.portfolio');
Route::post('/newsletter', [NewsletterController::class,'store'])->name('front.newsletter.post');

Route::post('reset-password', [App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'updatePassword'])
->name('password.update.user');

Route::get('/password/user/reset',[App\Http\Controllers\Auth\AuthenticatedSessionController::class,'forgetPassword'])->name('forget.password.reset');

Route::get('/password/user/update',[App\Http\Controllers\Auth\AuthenticatedSessionController::class,'resetPassword'])->name('forget.password.update');

Route::group(['middleware' => ['auth:web']], function () {
Route::get('/add_to_cart',[HomeController::class,'showaddtocart'])->name('front.shopping');
Route::get('/checkout',[HomeController::class,'checkout'])->name('front.checkout');

Route::get('/countCart',[CartController::class,'countCart'])->name('check.countCart');

Route::get('/addToCart/{id}/{color}/{size}/{quantity}', [CartController::class,'addToCart'])->name('addTo.cart');
Route::get('/removeFromCart/{hash}', [CartController::class,'removeItemCart'])->name('removeFrom.cart');
Route::get('/updateItemCount/{hash}/{quantity}', [CartController::class,'updateItemCount'])->name('updateItem.count');

Route::get('/profile/{type}',[ProfileController::class,'show'])->name('show_profile');
Route::get('/orderTracking',[OrderController::class,'orderTracking'])->name('orderTracking');
Route::get('/order/{id}',[OrderController::class,'showOneOrder'])->name('showOneOrder');
// Route::get('/cart', [CartController::class,'getCartItems'])->name('front.shopping');
Route::post('/update_profile',[ProfileController::class,'update'])->name('update_profile');

Route::post('/update-password', [ProfileController::class, 'updatePassword'])->name('update-password');


Route::post('/add-address', [AddressController::class, 'addAddress'])->name('add-address');
Route::post('/update-address', [AddressController::class, 'updateAddress'])->name('update-address');
Route::get('/address/{id}', [AddressController::class, 'destroy'])->name('delete-address');
Route::get('/address/current/{id}', [AddressController::class, 'currentAddress'])->name('current-address');

});
Route::get('/team',[HomeController::class,'showteam'])->name('front.team');
Route::get('/testimonial',[HomeController::class,'showtestimonial'])->name('front.testimonial');
Route::get('/wishlit',[HomeController::class,'showwishlist'])->name('front.wishlist');
Route::get('/color/sizes/{color_id}/{product_id}',[CartController::class,'colorSizes'])->name('color.sizes');
Route::get('product/color/size/{product_id}/{color_id}/{size_id}',[CartController::class,'product_price'])->name('product.price');

Route::post('/orders/cancel', [OrderController::class, 'cancel'])->name('cancelOrder');

Route::get('/profile/orders', [ProfileController::class, 'show'])->name('profile.orders');



}
);

//privacy policy
Route::get('privacy-policy', [PrivacyPolicyController::class, 'index'])->name('privacyPolicy');


/**
* hyper pay webview
*/
Route::get('hyperpay/order/checkout', [HyperpayController::class, 'order'])->name('order.checkout');
Route::get('hyperpay/order/{user_id}/{lang}/{platform}/{payment_name}/{address_id}/callback',
[HyperpayController::class, 'order_callback'])->name('order.callback');
Route::get('hyperpay/wallet/{user_id}/{lang}/{platform}/{amount}/callback', [HyperpayController::class,
'wallet_callback'])->name('wallet.callback');
Route::get('hyperpay/payment/callback/{status}/{lang}/{platform}', [HyperpayController::class,
'paymentCallback'])->name('payment.callback');
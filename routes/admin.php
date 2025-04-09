<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\NewsletterController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\OrderProductController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ChooseUsController;
use App\Http\Controllers\Admin\ItemRequestController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\OfferController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\MerchantRequestController;
use App\Http\Controllers\API\ProjectController;
use App\Http\Controllers\Admin\ProductSizeController;
use App\Http\Controllers\Admin\SizeController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\StoreController;
use App\Http\Controllers\Admin\SubcategoryController;
use App\Models\Subcategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
        'name' => 'admin'
    ],
    function () {

        Route::group(['prefix' => 'dashboard'], function () {    
            Auth::routes();
            // cancel login and register for front temporarly

    
            Route::get('/admin/login', [App\Http\Controllers\Auth\LoginController::class, 'showAdminLoginForm'])->name('admin.login-view');
            Route::post('/admin/login', [App\Http\Controllers\Auth\LoginController::class, 'adminLogin'])->name('admin.login')->middleware('guest:admin');
            Route::get('/admin/register', [App\Http\Controllers\Auth\RegisterController::class, 'showAdminRegisterForm'])->name('admin.register-view');
            Route::post('/admin/register', [App\Http\Controllers\Auth\RegisterController::class, 'createAdmin'])->name('admin.register');           
            Route::group(['middleware' => ['auth:admin']], function () {
    
                Route::get('/', function () {
                    return view('dashboard');
                })->name('dashboard');
                
                Route::resource('roles', RoleController::class);
                Route::resource('reviews', ReviewController::class);
                Route::resource('categories', CategoryController::class);
                Route::resource('offers', OfferController::class);                

                Route::resource('pages', PageController::class);
                Route::resource('contacts', ContactController::class);
                Route::resource('faqs', FaqController::class);
                Route::resource('sizes', SizeController::class);
                Route::resource('sizes', SizeController::class);
                Route::resource('colors', ColorController::class);
                Route::resource('subcategories', SubcategoryController::class);
                Route::resource('stores', StoreController::class);
                Route::resource('banners', BannerController::class);
                Route::resource('brands', BrandController::class);
                Route::resource('sliders', SliderController::class);
                Route::resource('chooseUss', ChooseUsController::class);
                Route::post('/storesList/sotrable', [BrandController::class, 'sotrable'])->name('brands.sortable');
                Route::get('/brand/{id}/toggle-is-top', [BrandController::class, 'toggleIsTop'])->name('brands.toggleIsTop');

                
                Route::get('show-map', [AdminController::class,'show_map'])->name('show.map');
                
                Route::resource('orderproducts', OrderProductController::class);
                Route::get('orderproduct/{id}', [OrderProductController::class,'create'])->name('orderproduct.create');
            
                Route::resource('roles', RoleController::class);
                Route::resource('itemRequests', ItemRequestController::class);
                Route::resource('users', UserController::class);
                Route::resource('admins', AdminController::class);
                Route::resource('products', ProductController::class);
                Route::resource('productRequests', ProductController::class);
                Route::resource('orders', OrderController::class);
                Route::resource('messages', MessageController::class);
                Route::resource('merchantRequests', MerchantRequestController::class);
                
                Route::get('/merchantRequest/reject/{id}', [MerchantRequestController::class, 'reject'])->name('merchantRequests.reject');
                Route::get('/merchantRequest/accept/{id}', [MerchantRequestController::class, 'accept'])->name('merchantRequests.accept');
            
                Route::get('/reply-message/{id}', [App\Http\Controllers\Admin\MessageController::class, 'reply'])->name('messages.reply');

                Route::post('/reply-email/{id}/reply', [App\Http\Controllers\Admin\MessageController::class, 'emailReply'])->name('messages.emailReply');

            
                Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
                Route::resource('newsletters', NewsletterController::class);
            
                Route::get('/reply-newsletter', [App\Http\Controllers\Admin\NewsletterController::class, 'reply'])->name('newsletters.reply');
                Route::post('/reply-email/reply', [App\Http\Controllers\Admin\NewsletterController::class, 'emailReply'])->name('newsletters.emailReply');
                Route::get('/dashboard', function () {
                    return view('dashboard');
                });
    
                Route::put('/setting', 'App\Http\Controllers\Admin\SettingController@setting')->name('setting');
                Route::get('/setting/edit', 'App\Http\Controllers\Admin\SettingController@editSetting')->name('edit.setting');
            
                Route::put('/profile', [App\Http\Controllers\Admin\ProfileController::class, 'update'])->name('update.profile');
                Route::get('/profile', [App\Http\Controllers\Admin\ProfileController::class, 'edit'])->name('edit.profile');

                Route::get('/store/categories/{id}', [StoreController::class, 'categories'])->name('store.categories');
                Route::get('/store/brands/{id}', [StoreController::class, 'brands'])->name('store.brands');
                Route::get('/category/subcategories/{id}', [StoreController::class, 'subcategories'])->name('category.subcategories');
                Route::get('/stores/variations/{id}', [StoreController::class, 'getVariations'])->name('store.variations');
                
                Route::post('/order/status/{id}', [OrderController::class, 'updateStatus'])->name('order.update.status');
            });
        });
    }
);
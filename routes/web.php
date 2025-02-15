<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\MessageController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\URL;

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
    echo "<td width='10%'><h4>HTTP Method</h4></td>";
    echo "<td width='10%'><h4>Route</h4></td>";
    echo "<td width='10%'><h4>Name</h4></td>";
    echo "<td width='70%'><h4>Corresponding Action</h4></td>";
    echo "</tr>";
    foreach ($routeCollection as $value) {
        if($value->methods()[0]=='GET'){
            echo "<tr>";
            echo "<td>" . $value->methods()[0] . "</td>";
            echo "<td>" ."<a class='d-block' href='" .URL::to('/').'/'.str_replace('{id}','1',preg_replace($pattern, '1',$value->uri())) ."' target='__blank'>" .URL::to('/').'/'.str_replace('{id}','1',preg_replace($pattern, '1',$value->uri())) ."</a>" . "</td>";
            echo "<td>" . $value->getName() . "</td>";
            echo "<td>" . $value->getActionName() . "</td>";
            echo "</tr>";
        }
    }
    foreach ($routeCollection as $value) {
        if($value->methods()[0]!=='GET'){
            echo "<tr>";
            echo "<td>" . $value->methods()[0] . "</td>";
            echo "<td>" ."<p class='d-block'>" .URL::to('/').'/'.str_replace('{id}','1',preg_replace($pattern, '1',$value->uri())) ."</p>" . "</td>";
            echo "<td>" . $value->getName() . "</td>";
            echo "<td>" . $value->getActionName() . "</td>";
            echo "</tr>";
        }
    }
    echo "</table>";
});


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {


        Route::get('/', [HomeController::class, 'index'])->name('front.home');
        Route::get('/faq-page', 'App/Http/Controllers/FaqController@index')->name('front.faq');
        // Route::get('/message', 'App/Http/Controllers/MessageController@index')->name('front.message');
        Route::get('/message', [MessageController::class,'index'])->name('front.message');
        // Route::get('/service', 'App/Http/Controllers/ServiceController@index')->name('front.service');
        // Route::get('/newsletter', 'App/Http/Controllers/NewsletterController@index')->name('front.newsletter');
        Route::get('/newsletter', [NewsletterController::class,'index'])->name('front.newsletter');

        Route::get('/service', [ServiceController::class,'index'])->name('front.service');
        
        // Route::get('/single-service', 'App/Http/Controllers/ServiceController@show')->name('front.show.service');
       
        Route::get('/single-service/{id}', [ServiceController::class,'show'])->name('front.show.service');
       
       
        Route::get('/testimonial', 'App/Http/Controllers/TestimonialController@index')->name('front.testimonial');
        Route::get('/single-testimonial', 'App/Http/Controllers/TestimonialController@show')->name('front.show.testimonial');
        Route::get('/process', 'App/Http/Controllers/ProcessController@index')->name('front.process');
        Route::get('/single-process', 'App/Http/Controllers/ProcessController@show')->name('front.show.process');
        Route::get('/single-faq', 'App/Http/Controllers/FaqController@show')->name('front.show.faq');

        Route::get('/portfolios', [PortfolioController::class,'index'])->name('front.portfolios');
        Route::get('/portfolio/{id}', [PortfolioController::class,'show'])->name('front.show.portfolio');
        Route::get('/video', 'App/Http/Controllers/VideoController@index')->name('front.video');
        // Route::get('/about', 'App/Http/Controllers/AboutController@index')->name('front.about');
        Route::get('/about', [AboutController::class,'index'])->name('front.about');
        // Route::post('/message', 'App/Http/Controllers/MessageController@store')->name('front.message.post');
        Route::post('/message', [MessageController::class,'store'])->name('front.message.post');

        Route::get('/single-portfolio/{id}', [ServiceController::class,'showportfolio'])->name('front.show.portfolio');
        // Route::post('/newsletter', 'App/Http/Controllers/NewsletterController@store')->name('front.newsletter.post');
        Route::post('/newsletter', [NewsletterController::class,'store'])->name('front.newsletter.post');

        // Route::get('/reply', function () {

        //     return view("mail.replymessage");
        // });

    }
);





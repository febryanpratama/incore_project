<?php

use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\TemplateController;
use App\Http\Controllers\Front\GetTemplateController;
use App\Http\Controllers\InstagramController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\TwitterController;
use App\Http\Controllers\User\AccountSosmedController;
use App\Http\Controllers\User\KontenSosmedController;
use App\Http\Controllers\User\SetTemplateController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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
// Landing Page
Route::get('/', function () {
    // dd(Session::get('twitter_oauth_token'));
    return view('landing.index');
});

Route::group([
    'prefix' => '/', 
], function(){

    Route::get('search-domain', [LandingController::class, 'searchDomain']);

    Route::post('checkout', [LandingController::class, 'checkout']);
});

// End Landing Page

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
    'confirm' => false,
]);

Route::group([
    'prefix' => 'admin',
    'middleware' => ['auth', 'role:admin'],
], function(){
    Route::prefix('template')->group(function(){
        Route::get('/', [TemplateController::class, 'index']);
        Route::post('/', [TemplateController::class, 'store']);

        // Set Navigation
        Route::get('/{template_id}/navigation', [TemplateController::class, 'navigation']);
        Route::post('/navigation', [TemplateController::class, 'storeNavigation']);

        // Set Section
        Route::get('/{template_id}/navigation/{navigation_id}/section', [TemplateController::class, 'section']);
        Route::post('/navigation/section', [TemplateController::class, 'storeSection']);
    });

    Route::prefix('payment')->group(function(){
        Route::get('/', [PaymentController::class, 'index']);
    });
});

Route::group([
    'prefix' => 'user',
    'middleware' => ['auth', 'role:user', 'web'],
],function(){
    Route::prefix('set-template')->group(function(){
        Route::get('/', [SetTemplateController::class, 'setTemplate']);
        Route::get('/{navigation_id}', [SetTemplateController::class, 'indexNavigation']);
        Route::get('/{navigation_id}/card/{section_id}', [SetTemplateController::class, 'indexSection']);

        Route::post('/store', [SetTemplateController::class, 'store']);
        Route::post('/store-file', [SetTemplateController::class, 'storeFile']);
        Route::post('/card', [SetTemplateController::class, 'storeCard']);
    });

    Route::prefix('konten-sosmed')->group(function(){
        Route::get('/', [KontenSosmedController::class, 'index']);
        Route::post('/', [KontenSosmedController::class, 'store']);

    });


    Route::prefix('account-sosmed')->group(function(){
        Route::get('/', [AccountSosmedController::class, 'index']);
        Route::post('/', [AccountSosmedController::class, 'store']);
    });
});

// routes/web.php


Route::get('auth/twitter', [TwitterController::class, 'redirectToProvider']);
Route::get('auth/instagram', [InstagramController::class, 'redirectToProvider']);

Route::middleware(['web'])->group(function(){
    Route::get('auth/instagram/callback', [InstagramController::class, 'handleProviderCallback']);
});

// Route::get('auth/twitter/callback', [TwitterController::class, 'handleProviderCallback']);


Route::group([
    'prefix' => '{slug}'
], function(){
    Route::get('/{navslug}', [GetTemplateController::class, 'navigation']);
});

Route::get('test', function(){
    return view('testing.product');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test', [LandingController::class, 'test']);

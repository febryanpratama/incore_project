<?php

use App\Http\Controllers\InstagramController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\TwitterController;
use App\Http\Controllers\User\WebsiteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::post('transaction/callback', [LandingController::class, 'callback']);

Route::middleware(['web'])->group(function(){
    Route::get('auth/twitter/callback', [TwitterController::class, 'handleProviderCallback']);
    // Route::get('auth/instagram/callback', [InstagramController::class, 'handleProviderCallback']);
});


Route::group([
    'middleware' => ['auth', 'role:user', 'web'],
], function(){

    Route::get("generate-session", [WebsiteController::class, 'createSession']);
});
// Route::middleware(['web'])->group(function(){
//     Route::get('auth/instagram/callback', [InstagramController::class, 'handleProviderCallback']);
// });

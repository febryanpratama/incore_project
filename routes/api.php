<?php

use App\Http\Controllers\InstagramController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\TwitterController;
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
Route::get('auth/twitter/callback', [TwitterController::class, 'handleProviderCallback']);

// Route::middleware(['web'])->group(function(){
//     Route::get('auth/instagram/callback', [InstagramController::class, 'handleProviderCallback']);
// });

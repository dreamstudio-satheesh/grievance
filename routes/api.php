<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\PageController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\ComplaintController;

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

Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('signup', 'signup');
});

Route::controller(PageController::class)->group(function () {
    Route::get('news-events', 'news_events');
    Route::get('galleries', 'galleries');
    Route::get('banners', 'banners');
});

Route::middleware('auth:sanctum')->group( function () {
    //Route::resource('products', ProductController::class);
    Route::get('user', [UserController::class, 'index']);
    Route::post('register-complaint', [ComplaintController::class, 'register']);
    Route::post('logout', [UserController::class, 'logout']);
});



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
    Route::get('news-/{id}', 'single_news');
    Route::get('galleries', 'galleries');
    Route::get('banners', 'banners');
    Route::get('dropdown/grievance', 'grievance');
    Route::get('dropdown/panchayats', 'panchayats');
    Route::get('dropdown/panchayats/{id}', 'wards');
    Route::get('dropdown/panchayatstreets/{id}', 'streets');
    Route::get('dropdown/divisions', 'divisions');
    Route::get('dropdown/divisions/{id}', 'dstreets');
});

Route::middleware('auth:sanctum')->group( function () {
    //Route::resource('products', ProductController::class);
    Route::get('user', [UserController::class, 'index']);
    Route::get('track-complaints', [ComplaintController::class, 'track']);
    Route::get('track-complaints/{id}', [ComplaintController::class, 'tracksingle']);
    Route::post('complaint', [ComplaintController::class, 'register']);
    Route::post('logout', [UserController::class, 'logout']);
});



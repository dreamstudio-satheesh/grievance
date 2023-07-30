<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WardController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StreetController;
use App\Http\Controllers\DstreetController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\NewsEventController;
use App\Http\Controllers\PanchayatController;
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

Auth::routes();

//Language Translation
Route::get('index/{locale}', [HomeController::class, 'lang']);

    
Route::get('/', [PagesController::class, 'home'])->name('homepage');
    
Route::get('/aboutus.php', [PagesController::class, 'aboutus'])->name('aboutus');
Route::get('/trustee.php', [PagesController::class, 'trustee'])->name('trustee');
Route::get('/gallery.php', [PagesController::class, 'gallery'])->name('gallery');
Route::get('/news-events.php', [PagesController::class, 'events'])->name('events');
Route::get('/event-single.php', [PagesController::class, 'single'])->name('single');
Route::get('/complaint.php', [PagesController::class, 'complaint'])->name('complaint');
Route::get('/contact.php', [PagesController::class, 'contact'])->name('contact');

Route::get('/home', [HomeController::class, 'index'])->name('userhome');


Route::group(['prefix' => 'admin','middleware' => ['role:admin']], function () {

    
Route::get('/', [HomeController::class, 'root'])->name('root');

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');

//Update User Details
Route::post('/update-profile/{id}', [HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [HomeController::class, 'updatePassword'])->name('updatePassword');

Route::get('/divisions', [DivisionController::class, 'index'])->name('divisions.index');
Route::get('/divisions/create', [DivisionController::class, 'create'])->name('divisions.create');
Route::post('/divisions', [DivisionController::class, 'store'])->name('divisions.store');
Route::get('/divisions/{id}', [DivisionController::class, 'show'])->name('divisions.show');
Route::get('/divisions/{id}/edit', [DivisionController::class, 'edit'])->name('divisions.edit');
Route::put('/divisions/{id}', [DivisionController::class, 'update'])->name('divisions.update');
Route::delete('/divisions/{id}', [DivisionController::class, 'destroy'])->name('divisions.destroy');


Route::get('/panchayats', [PanchayatController::class, 'index'])->name('panchayats.index');
Route::get('/panchayats/create', [PanchayatController::class, 'create'])->name('panchayats.create');
Route::post('/panchayats', [PanchayatController::class, 'store'])->name('panchayats.store');
Route::get('/panchayats/{id}', [PanchayatController::class, 'show'])->name('panchayats.show');
Route::get('/panchayats/{id}/edit', [PanchayatController::class, 'edit'])->name('panchayats.edit');
Route::put('/panchayats/{id}', [PanchayatController::class, 'update'])->name('panchayats.update');
Route::delete('/panchayats/{id}', [PanchayatController::class, 'destroy'])->name('panchayats.destroy');

Route::get('/streets', [StreetController::class, 'index'])->name('streets.index');
Route::get('/streets/create', [StreetController::class, 'create'])->name('streets.create');
Route::post('/streets', [StreetController::class, 'store'])->name('streets.store');
Route::get('/streets/{id}', [StreetController::class, 'show'])->name('streets.show');
Route::get('/streets/{id}/edit', [StreetController::class, 'edit'])->name('streets.edit');
Route::put('/streets/{id}', [StreetController::class, 'update'])->name('streets.update');
Route::delete('/streets/{id}', [StreetController::class, 'destroy'])->name('streets.destroy');

Route::get('/dstreets', [DstreetController::class, 'index'])->name('dstreets.index');
Route::get('/dstreets/create', [DstreetController::class, 'create'])->name('dstreets.create');
Route::post('/dstreets', [DstreetController::class, 'store'])->name('dstreets.store');
Route::get('/dstreets/{id}', [DstreetController::class, 'show'])->name('dstreets.show');
Route::get('/dstreets/{id}/edit', [DstreetController::class, 'edit'])->name('dstreets.edit');
Route::put('/dstreets/{id}', [DstreetController::class, 'update'])->name('dstreets.update');
Route::delete('/dstreets/{id}', [DstreetController::class, 'destroy'])->name('dstreets.destroy');


Route::get('/wards', [WardController::class, 'index'])->name('wards.index');
Route::get('/wards/create', [WardController::class, 'create'])->name('wards.create');
Route::post('/wards', [WardController::class, 'store'])->name('wards.store');
Route::get('/wards/{id}', [WardController::class, 'show'])->name('wards.show');
Route::get('/wards/{id}/edit', [WardController::class, 'edit'])->name('wards.edit');
Route::put('/wards/{id}', [WardController::class, 'update'])->name('wards.update');
Route::delete('/wards/{id}', [WardController::class, 'destroy'])->name('wards.destroy');



Route::get('/complaints', [ComplaintController::class, 'index'])->name('complaints.index');
Route::get('/complaints/create', [ComplaintController::class, 'create'])->name('complaints.create');
Route::post('/complaints', [ComplaintController::class, 'store'])->name('complaints.store');
Route::get('/complaints/{id}', [ComplaintController::class, 'show'])->name('complaints.show');
Route::get('/complaints/{id}/edit', [ComplaintController::class, 'edit'])->name('complaints.edit');
Route::put('/complaints/{id}', [ComplaintController::class, 'update'])->name('complaints.update');
Route::delete('/complaints/{id}', [ComplaintController::class, 'destroy'])->name('complaints.destroy');


Route::get('/news_events', [NewsEventController::class, 'index'])->name('news_events.index');
Route::get('/news_events/create', [NewsEventController::class, 'create'])->name('news_events.create');
Route::post('/news_events', [NewsEventController::class, 'store'])->name('news_events.store');
Route::get('/news_events/{id}', [NewsEventController::class, 'show'])->name('news_events.show');
Route::get('/news_events/{id}/edit', [NewsEventController::class, 'edit'])->name('news_events.edit');
Route::put('/news_events/{id}', [NewsEventController::class, 'update'])->name('news_events.update');
Route::delete('/news_events/{id}', [NewsEventController::class, 'destroy'])->name('news_events.destroy');


Route::get('/galleries', [GalleryController::class, 'index'])->name('galleries.index');
Route::get('/galleries/create', [GalleryController::class, 'create'])->name('galleries.create');
Route::post('/galleries', [GalleryController::class, 'store'])->name('galleries.store');
Route::get('/galleries/{id}', [GalleryController::class, 'show'])->name('galleries.show');
Route::get('/galleries/{id}/edit', [GalleryController::class, 'edit'])->name('galleries.edit');
Route::put('/galleries/{id}', [GalleryController::class, 'update'])->name('galleries.update');
Route::delete('/galleries/{id}', [GalleryController::class, 'destroy'])->name('galleries.destroy');


});




//Route::get('{any}', [HomeController::class, 'index'])->name('index');

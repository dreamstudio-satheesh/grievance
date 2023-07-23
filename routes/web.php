<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WardController;
use App\Http\Controllers\StreetController;
use App\Http\Controllers\ComplaintController;
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



Route::get('/streets', [StreetController::class, 'index'])->name('streets.index');
Route::get('/streets/create', [StreetController::class, 'create'])->name('streets.create');
Route::post('/streets', [StreetController::class, 'store'])->name('streets.store');
Route::get('/streets/{id}', [StreetController::class, 'show'])->name('streets.show');
Route::get('/streets/{id}/edit', [StreetController::class, 'edit'])->name('streets.edit');
Route::put('/streets/{id}', [StreetController::class, 'update'])->name('streets.update');
Route::delete('/streets/{id}', [StreetController::class, 'destroy'])->name('streets.destroy');


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





Route::get('{any}', [HomeController::class, 'index'])->name('index');

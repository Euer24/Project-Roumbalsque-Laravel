<?php

use Illuminate\Support\Facades\Route;


//CONTROLLERS
use App\http\controllers\HomeController;
use App\http\controllers\ContactController;
use App\http\controllers\MenuController;
use App\http\controllers\ReserverenController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/menu', [MenuController::class, 'index'])->name('menu');


Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/reserveren', [ReserverenController::class, 'index'])->name('reserveren');
Route::get('/reserveren', [ReserverenController::class, 'showReservationForm'])->name('reserveren');
Route::post('/reserveren',[ReserverenController::class, 'storeReservation']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

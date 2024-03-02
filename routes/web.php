<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactsControllers;
use App\Http\Controllers\ReservationsController;


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

Route::get('/',[HomeController::class,'index']);


Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/reservation', [ReservationsController::class, 'store'])->name('QRCode');
Route::get('/reservation', [ReservationsController::class, 'index'])->name('reservation.create');
Route::post('/reservation', [ReservationsController::class, 'store'])->name('reservation.store');
Route::get('/download-qrcode',[ReservationsController::class, 'downloadQrCode'])->name('downloadQrCode');
Route::get('/contactUs', [ContactsControllers::class, 'index'])->name('contactUs.create');
Route::post('/contactUs', [ContactsControllers::class, 'store'])->name('contactUs.store');
Route::get('/download-pdf',[ReservationsController::class, 'downloadPdf'])->name('download.pdf');
Route::get('/get-max-male-value', [ReservationsController::class, 'getMaxMaleValue'])->name('getMaxMaleValue');


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\ServiceController;
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
Route::get('/events', [EventController::class,'index'])->name('events.index');
Route::get('/events/create', [EventController::class,'create'])->name('events.create');
Route::post('/events/create', [EventController::class,'store'])->name('events.store');
Route::get('/courses', [CoursesController::class,'index'])->name('courses.index');
Route::get('/courses/create', [CoursesController::class,'create'])->name('courses.create');
Route::post('/courses/create', [CoursesController::class,'store'])->name('courses.store');
Route::get('/services/create', [ServiceController::class,'create'])->name('services.create');
Route::post('/services/create', [ServiceController::class,'store'])->name('services.store');
Route::get('/courses/searchByPhone',  [CoursesController::class,'searchByPhone'])->name('courses.searchByPhone');

Route::get('/download-pdf',[ReservationsController::class, 'downloadPdf'])->name('download.pdf');
Route::get('/get-max-male-value', [ReservationsController::class, 'getMaxMaleValue'])->name('getMaxMaleValue');


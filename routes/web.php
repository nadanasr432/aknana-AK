<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ContactsControllers;
use App\Http\Controllers\Dashboard\HomeController as DashboardHomeController;
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
Route::get('/projects', [ProjectController::class, 'create'])->name('projects.create');
Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');
Route::get('/download-pdf',[ReservationsController::class, 'downloadPdf'])->name('download.pdf');
Route::get('/get-max-male-value', [ReservationsController::class, 'getMaxMaleValue'])->name('getMaxMaleValue');
Route::post('language/switch', [LanguageController::class,'switch'])->name('language.switch');

Route::get('dashboard', [DashboardHomeController::class, 'index'])->name('dashboard');

Route::get('/courses/show', [App\Http\Controllers\Dashboard\CoursesController::class,'index'])->name('dashboard.courses.index');
Route::get('/courses/Create', [App\Http\Controllers\Dashboard\CoursesController::class,'create'])->name('dashboard.courses.create');
Route::post('/courses/Store', [App\Http\Controllers\Dashboard\CoursesController::class,'store'])->name('dashboard.courses.store');
Route::get('/courses/Edit/{id}', [App\Http\Controllers\Dashboard\CoursesController::class, 'edit'])->name('dashboard.courses.edit');
Route::put('/courses/Update/{id}', [App\Http\Controllers\Dashboard\CoursesController::class, 'update'])->name('dashboard.courses.update');
Route::delete('/courses/Delete/{id}', [App\Http\Controllers\Dashboard\CoursesController::class, 'destroy'])->name('dashboard.courses.delete');
Route::get('/reservation/show', [App\Http\Controllers\Dashboard\ReservationsController::class,'index'])->name('dashboard.reservation.index');
Route::get('/reservation/Create', [App\Http\Controllers\Dashboard\ReservationsController::class,'create'])->name('dashboard.reservation.create');
Route::post('/reservation/Store', [App\Http\Controllers\Dashboard\ReservationsController::class,'store'])->name('dashboard.reservation.store');
Route::get('/reservation/Edit/{id}', [App\Http\Controllers\Dashboard\ReservationsController::class, 'edit'])->name('dashboard.reservation.edit');
Route::put('/reservation/Update/{id}', [App\Http\Controllers\Dashboard\ReservationsController::class, 'update'])->name('dashboard.reservation.update');
Route::delete('/reservation/Delete/{id}', [App\Http\Controllers\Dashboard\ReservationsController::class, 'destroy'])->name('dashboard.reservation.delete');
Route::get('/event/show', [App\Http\Controllers\Dashboard\EventsController::class,'index'])->name('dashboard.event.index');
Route::get('/event/Create', [App\Http\Controllers\Dashboard\EventsController::class,'create'])->name('dashboard.event.create');
Route::post('/event/Store', [App\Http\Controllers\Dashboard\EventsController::class,'store'])->name('dashboard.event.store');
Route::get('/event/Edit/{id}', [App\Http\Controllers\Dashboard\EventsController::class, 'edit'])->name('dashboard.event.edit');
Route::put('/event/Update/{id}', [App\Http\Controllers\Dashboard\EventsController::class, 'update'])->name('dashboard.event.update');
Route::delete('/event/Delete/{id}', [App\Http\Controllers\Dashboard\EventsController::class, 'destroy'])->name('dashboard.event.delete');
Route::get('/project/show', [App\Http\Controllers\Dashboard\ProjectsController::class,'index'])->name('dashboard.project.index');
Route::get('/project/Create', [App\Http\Controllers\Dashboard\ProjectsController::class,'create'])->name('dashboard.project.create');
Route::post('/project/Store', [App\Http\Controllers\Dashboard\ProjectsController::class,'store'])->name('dashboard.project.store');
Route::get('/project/Edit/{id}', [App\Http\Controllers\Dashboard\ProjectsController::class, 'edit'])->name('dashboard.project.edit');
Route::put('/project/Update/{id}', [App\Http\Controllers\Dashboard\ProjectsController::class, 'update'])->name('dashboard.project.update');
Route::delete('/project/Delete/{id}', [App\Http\Controllers\Dashboard\ProjectsController::class, 'destroy'])->name('dashboard.project.delete');
Route::get('/service/show', [App\Http\Controllers\Dashboard\ServicesController::class,'index'])->name('dashboard.service.index');
Route::get('/service/Create', [App\Http\Controllers\Dashboard\ServicesController::class,'create'])->name('dashboard.service.create');
Route::post('/service/Store', [App\Http\Controllers\Dashboard\ServicesController::class,'store'])->name('dashboard.service.store');
Route::get('/service/Edit/{id}', [App\Http\Controllers\Dashboard\ServicesController::class, 'edit'])->name('dashboard.service.edit');
Route::put('/service/Update/{id}', [App\Http\Controllers\Dashboard\ServicesController::class, 'update'])->name('dashboard.service.update');
Route::delete('/service/Delete/{id}', [App\Http\Controllers\Dashboard\ServicesController::class, 'destroy'])->name('dashboard.service.delete');
Route::get('/contacts', [App\Http\Controllers\Dashboard\ContactUsController::class, 'index'])->name('dashboard.contacts.show');
Route::delete('/contacts/Delete/{id}', [App\Http\Controllers\Dashboard\ContactUsController::class, 'destroy'])->name('dashboard.contacts.delete');

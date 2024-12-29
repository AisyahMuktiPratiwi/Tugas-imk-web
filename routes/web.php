<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReservationController;
use App\Models\Area;
use App\Models\Reservation;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
   
    Route::get('/menus', [MenuController::class, 'index'])->name('menu.index');
   
    Route::get('/menus/insert', [MenuController::class, 'insert'])->name('menu.insert');
    Route::post('/menus', [MenuController::class, 'store'])->name('menu.store');
    Route::put('/menus/{id}', [MenuController::class, 'update'])->name('menu.update');
    
    Route::get('/menus/{id}', [MenuController::class, 'edit'])->name('menu.edit');
    Route::delete('/menus/delete/{id}', [MenuController::class, 'destroy'])->name('menu.delete');


Route::post('/areas', [AreaController::class, 'store'])->name('area.store');
Route::get('/areas', [AreaController::class, 'index'])->name('area.index');
Route::get('/areas/insert', [AreaController::class, 'insert']);
Route::put('/areas/{id}', [AreaController::class, 'update'])->name('area.update');
Route::get('/areas/{id}', [AreaController::class, 'edit'])->name('area.edit');
Route::delete('/areas/{id}', [AreaController::class, 'destroy'])->name('area.delete');


Route::post('/comments', [CommentController::class, 'store']);
    Route::get('/comments', [CommentController::class, 'index'])->name('comment.index');
    Route::delete('/comments/delete/{id}', [CommentController::class, 'destroy'])->name('comment.delete');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/payments', [PaymentController::class, 'index'])->name('payment.index'); //
Route::get('/payments{id}', [PaymentController::class, 'show']);
Route::get('/payments/insert', [PaymentController::class, 'insert']);
Route::post('/payments', [PaymentController::class, 'store'])->name('payment.store');
Route::put('{/payments/{id}', [PaymentController::class, 'update']);
Route::delete('/payments/{id}', [PaymentController::class, 'destroy']); 

Route::get('/reservations', [ReservationController::class, 'index'])->name('reservasi.index');
Route::get('/reservations/customer/{id}', [ReservationController::class, 'customer'])->name('reservations.detail');
Route::get('/reservations/{id}', [ReservationController::class, 'show']);
Route::post('/reservations', [ReservationController::class, 'store']);

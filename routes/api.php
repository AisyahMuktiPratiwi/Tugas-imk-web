<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReservationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/areas', [AreaController::class, 'store']);
Route::get('/areas', [AreaController::class, 'index']);
Route::put('/areas/{id}', [AreaController::class, 'update']);
Route::delete('/areas/{id}', [AreaController::class, 'destroy']);

Route::prefix('reservations')->group(function () {
Route::get('/', [ReservationController::class, 'index']);
Route::get('/{id}', [ReservationController::class, 'show']);
Route::post('/', [ReservationController::class, 'store']);
});

  Route::get('/payments', [PaymentController::class, 'index']); //
    Route::get('/payments{id}', [PaymentController::class, 'show']);
    Route::post('/payments', [PaymentController::class, 'store']);
    Route::put('{/payments/{id}', [PaymentController::class, 'update']);
    Route::delete('/payments/{id}', [PaymentController::class, 'destroy']); 
    

    Route::post('/comments', [CommentController::class, 'store']);
    Route::get('/comments', [CommentController::class, 'index']);
    Route::delete('/comments/{id}', [CommentController::class, 'destroy']);



Route::prefix('menus')->group(function () {
   
    Route::get('/', [MenuController::class, 'index']);
    Route::get('{id}', [MenuController::class, 'show']);
    Route::post('/', [MenuController::class, 'store']);
    Route::put('{id}', [MenuController::class, 'update']);
    Route::delete('{id}', [MenuController::class, 'destroy']);
});

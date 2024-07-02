<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create'])->middleware('auth');
Route::get('/events/{id}', [EventController::class, 'show']);
Route::post('/events', [EventController::class, 'store']);

Route::get('/contato', [EventController::class, 'contact']);

Route::get('/dashboard', [EventController::class, 'dashboard'])->middleware(['auth']);


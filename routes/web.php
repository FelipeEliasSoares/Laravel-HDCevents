<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);

Route::get('/contato', [EventController::class, 'contact']);


Route::get('/produtos', [EventController::class, 'produtos']);

Route::get('/produtos_teste/{id?}', [EventController::class, 'produtos_teste']);
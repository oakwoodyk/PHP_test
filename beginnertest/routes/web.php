<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;

Route::get('/building', [HelloController::class, 'building']);
Route::get('/building/{room}', [HelloController::class, 'room']);

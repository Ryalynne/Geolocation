<?php

use App\Http\Controllers\LocationController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/ShowIP', [LocationController::class ,'index']);
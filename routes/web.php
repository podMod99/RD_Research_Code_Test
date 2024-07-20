<?php

use App\Http\Controllers\TableOutputController;
use Illuminate\Support\Facades\Route;

// CHANGE - Controller now handles view and sending data to the view, and is renamed to describe it's function more closely 
// Route::get('/', function () {
//     return view('tables');
// });
// Route::get('/', [DataController::class, 'index']);

Route::get('/table', [TableOutputController::class, 'index']);

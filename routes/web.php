<?php

use App\Http\Controllers\CalendarController;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('zadanie1', [CalendarController::class, 'index']);
Route::get('zadanie2', [ExcelController::class, 'index']);
Route::get('zadanie3', [RegisterController::class, 'index']);

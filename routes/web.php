<?php

use App\Http\Controllers\AlertController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\TableController;
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

// DashboardController
Route::get('/', [DashboardController::class, 'index']);

Route::get('/Home/heading', [DashboardController::class, 'heading']);

Route::get('/Home/colors', [DashboardController::class, 'colors']);
// end DashboardController

// AuthController
Route::get('Auth/login', [AuthController::class, 'login']);

Route::get('/Auth/register', [AuthController::class, 'register']);
// end AuthController

// TableController
Route::get('/Table', [TableController::class, 'index']);
// end TableController

// FormController
Route::get('/Form', [FormController::class, 'index']);
// end FormController

// AlertController
Route::get('/Alert', [AlertController::class, 'index']);
// end AlertController

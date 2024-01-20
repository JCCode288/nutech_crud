<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
use App\Utils\ViewRoute;
use App\Utils\ApiRoute;
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

Route::get(ViewRoute::$HOME, [Controller::class, 'index']);

// Route::get(ViewRoute::$ADD_PRODUCT,  [ViewController::class, 'addProductPage']);

// Route::get(ViewRoute::$ADD_CATEGORY,  [ViewController::class, 'addCategoryPage']);

// Route::get(ViewRoute::$PROFILE,  [ViewController::class, 'profilePage']);

Route::get(ViewRoute::$LOGIN,  [LoginController::class, 'index']);

Route::post(ApiRoute::$LOGIN, [LoginController::class, 'login']);

Route::post(ApiRoute::$LOGOUT, [LoginController::class, 'logout']);

Route::get(ViewRoute::$REGISTER,  [LoginController::class, 'register']);

Route::post(ApiRoute::$REGISTER, [LoginController::class, 'registerAction']);

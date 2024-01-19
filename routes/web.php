<?php

use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;
use App\Utils\ViewRoute;

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

Route::get(ViewRoute::$HOME, [ViewController::class, 'mainPage']);

Route::get(ViewRoute::$ADD_PRODUCT,  [ViewController::class, 'addProductPage']);

Route::get(ViewRoute::$ADD_CATEGORY,  [ViewController::class, 'addCategoryPage']);

Route::get(ViewRoute::$PROFILE,  [ViewController::class, 'profilePage']);

Route::get(ViewRoute::$LOGIN,  [ViewController::class, 'loginPage']);

Route::get(ViewRoute::$REGISTER,  [ViewController::class, 'registerPage']);

<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\AuthChecker;
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

Route::group(['middleware' => AuthChecker::class], function () {
    Route::get(ViewRoute::$HOME, [Controller::class, 'index']);

    Route::get(ViewRoute::$ADD_PRODUCT,  [ProductController::class, 'index']);

    Route::post(ViewRoute::$ADD_PRODUCT, [ProductController::class, 'create']);

    Route::get(ViewRoute::$EDIT_PRODUCT, [ProductController::class, 'editPage']);

    Route::post(ViewRoute::$EDIT_PRODUCT, [ProductController::class, 'edit']);

    Route::delete(ViewRoute::$DELETE_PRODUCT, [ProductController::class, 'delete']);
});

Route::group(['middleware' => AuthChecker::class], function () {
    Route::get(ViewRoute::$CATEGORIES,  [CategoryController::class, 'index']);

    Route::get(ViewRoute::$ADD_CATEGORY,  [CategoryController::class, 'addCategory']);

    Route::post(ViewRoute::$ADD_CATEGORY,  [CategoryController::class, 'create']);

    Route::delete(ViewRoute::$DELETE_CATEGORY,  [CategoryController::class, 'delete']);
});

Route::group(['login'], function () {
    Route::get(ViewRoute::$PROFILE,  [Controller::class, 'profilePage']);

    Route::get(ViewRoute::$LOGIN,  [LoginController::class, 'index']);

    Route::post(ApiRoute::$LOGIN, [LoginController::class, 'login']);

    Route::get(ApiRoute::$LOGOUT, [LoginController::class, 'logout']);

    Route::get(ViewRoute::$REGISTER,  [LoginController::class, 'register']);

    Route::post(ApiRoute::$REGISTER, [LoginController::class, 'registerAction']);
});

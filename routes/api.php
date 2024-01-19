<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Utils\ApiRoute;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post(ApiRoute::$ADD_PRODUCT, [ApiController::class, 'addProduct']);

Route::post(ApiRoute::$ADD_CATEGORY, [ApiController::class, 'addCategory']);

Route::post(ApiRoute::$LOGIN, [ApiController::class, 'login']);

Route::post(ApiRoute::$LOGOUT, [ApiController::class, 'logout']);

Route::post(ApiRoute::$REGISTER, [ApiController::class, 'register']);

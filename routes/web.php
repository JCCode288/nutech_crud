<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
use App\Utils\ViewRoute;
use App\Http\Middleware\AuthChecker;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(AuthChecker::class)->group(function () {
    Route::get('/', function() {
        return redirect(ViewRoute::$LOGIN);
    });

    Route::get(ViewRoute::$LOGIN, [LoginController::class, 'index']);
    Route::get(ViewRoute::$REGISTER, [LoginController::class, 'register']);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [Controller::class, "main"])->name('dashboard');
});

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LocationController;
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


Route::group(['prefix' => 'auth'], function () {
    Route::post("/login", [AuthController::class, "login"])->name('api.login');
});

Route::group(['prefix' => 'search', 'middleware' => 'auth:sanctum'], function () {
    Route::get("/provinces", [LocationController::class, "getProvinces"]);
    Route::get("/cities", [LocationController::class, "getCities"]);
});
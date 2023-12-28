<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\LandingPageController::class, "index"])->name("landing");

Route::get("/order", [\App\Http\Controllers\OrderController::class, "index"])->name("order")->middleware(["auth", "employee"]);

Route::prefix("superadmin")->namespace("superadmin")->middleware(["auth", "superadmin"])
    ->group(function () {
        Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        Route::resource("unitPln", \App\Http\Controllers\UnitPLNController::class);
        Route::resource("meetingRoom", \App\Http\Controllers\MeetingRoomController::class);
    });

Auth::routes();


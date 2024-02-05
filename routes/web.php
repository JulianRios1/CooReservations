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


Route::redirect('/', '/home', 301);
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resources([
    '/roles'=> App\Http\Controllers\RolesController::class,
    '/permissions'=> App\Http\Controllers\PermissionsController::class,
    '/user'=> App\Http\Controllers\UserController::class,
    '/booking'=>App\Http\Controllers\BookingsController::Class,
    '/equipmen-type'=>App\Http\Controllers\EquipmentTypeController::Class,
    '/equipment'=> App\Http\Controllers\EquipmentController::Class,
    ]);
Route::get('/booking/history',[App\Http\Controllers\BookingsController::Class,'history'])->name('booking.history');

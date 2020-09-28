<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|-------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth','admin']], function () {
    
    Route::get('/dashboard', function () {
        return view('admin.dash');
    });

    Route::get('/role-register', [App\Http\Controllers\Admin\DashController::class, 'registered']);
    Route::get('/role-edit/{id}', [App\Http\Controllers\Admin\DashController::class, 'edit']);
    Route::put('/role-update/{id}', [App\Http\Controllers\Admin\DashController::class, 'update']);
});

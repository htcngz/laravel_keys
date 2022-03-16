<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\HomeController;
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

Route::get('/admin',[LoginController::class,'login'])->name('admin.login');
Route::post('/login',[LoginController::class,'loginPost'])->name('admin.loginPost');

Route::prefix('/admin')->name('admin.')->middleware('isAdmin')->group(function () {
    Route::get('/home',[HomeController::class,'home'])->name('home');
    Route::get('/login',[LoginController::class,'logout'])->name('logout');
    Route::get('/test',[HomeController::class,'test'])->name('test');
    Route::post('/test',[HomeController::class,'testPost'])->name('testPost');
    Route::get('/test-status-update/{id}/{status}',[HomeController::class,'testStatusUpdate'])->name('testStatusUpdate');
    Route::get('/test-update/{id}',[HomeController::class,'testUpdate'])->name('testUpdate');
    Route::post('/test-update/{id}',[HomeController::class,'testUpdatePost'])->name('testUpdatePost');

});

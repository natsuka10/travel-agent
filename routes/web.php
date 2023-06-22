<?php

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

Route::get('/', [\App\Http\Controllers\HomeController::class,'index'])->name('home');
Route::get('/about', function () {
    return view('frontend.about');
});
Route::get('/destinasi', function () {
    return view('frontend.destinasi.index');
});
Route::get('destinasi/{destination:kota}', [\App\Http\Controllers\DetailController::class,'show'])->name('destination.show');
Route::get('/destinasi/detail', function () {
    return view('frontend.destinasi.detail');
});
Route::get('/contact', function () {
    return view('frontend.contact');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'isAdmin','prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::get('dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard.index');
    Route::resource('permissions', \App\Http\Controllers\Admin\PermissionController::class);
    Route::resource('roles', \App\Http\Controllers\Admin\RoleController::class);
    Route::resource('users', \App\Http\Controllers\Admin\UserController::class);
    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::resource('sliders', \App\Http\Controllers\Admin\SliderController::class);
    Route::resource('destinations', \App\Http\Controllers\Admin\DestinationController::class);
});

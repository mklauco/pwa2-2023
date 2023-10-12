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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/start', function () {
    return view('layouts.app');
});

Route::get('/asdf/qwer/zc', function () {
    return view('home');
})->name('home');

Route::get('second', [App\Http\Controllers\SimpleController::class, 'view25']);

// Route::get('departments', [App\Http\Controllers\DepartmentController::class,
// 'index']);

Route::resource('departments', App\Http\Controllers\DepartmentController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

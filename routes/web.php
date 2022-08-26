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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/students', App\Http\Controllers\StudentController::class);

Route::get('/students','App\Http\Controllers\StudentController@index' );

// Route::get('/students/create', 'App\Http\Controllers\StudentController@create');

// Route::get('/students/edit', 'App\Http\Controllers\StudentController@edit');

// Route::get('/students/delete', 'App\Http\Controllers\StudentController@destroy');

// Route::post('/students','App\Http\Controllers\StudentController@store');

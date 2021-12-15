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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum','auth'])->group(function(){
    Route::resource('users', UserController::class);
});

Route::get('planes', function () {
    $planes = App\Models\Plan::orderBy('id', 'desc')->cursorPaginate(6);
    return view('planes', compact('planes'));
});
Route::get('contacto', function () {
    $contacto = App\Models\Contacto::find(1);
    return view('contacto',compact('contacto'));
})->name('contacto');
Route::get('nosotros', function () {
    return view('nosotros');
})->name('nosotros');
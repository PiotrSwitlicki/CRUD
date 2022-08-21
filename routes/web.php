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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//Route::get('/', [App\Http\Controllers\TodoController::class, 'index'])->name('main');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);


//Route::post('/message/create', [App\Http\Controllers\TodoController::class, 'store'])->name('todostore');
//Route::delete('/message/{message}', [App\Http\Controllers\TodoController::class, 'destroy'])->name('destroy');
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/create', [App\Http\Controllers\HomeController::class, 'create'])->name('products.add');
Route::post('/store', [App\Http\Controllers\HomeController::class, 'store'])->name('products.store');
Route::get('/edit/{id}/', [App\Http\Controllers\HomeController::class, 'edit'])->name('products.edit');
Route::delete('/destroy/{id}/', [App\Http\Controllers\HomeController::class, 'destroy'])->name('products.destroy');
Route::patch('/update/{id}', [App\Http\Controllers\HomeController::class, 'update'])->name('products.update');



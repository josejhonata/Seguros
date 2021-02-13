<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarroController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\Auth\RegisteredUserController;

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

Route::get('/cadastro', function () {
    return view('cadastro');
})->middleware(['auth'])->name('cadastro');


Route::get('/dashboard/delete/{carro}',[CarroController::class, 'destroy'])->name('rm-carro');


Route::get('/delete/{registro}',[RegistroController::class, 'destroy'])->name('rm-registro');


Route::post('/carro',[CarroController::class, 'store'])->name('add-carro');
Route::post('/registro',[RegistroController::class, 'store'])->name('add-registro');
require __DIR__.'/auth.php';

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
    return view('home');
})->name('home');

use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ProductoController;

Route::resource('estudiantes', EstudianteController::class);
Route::resource('clientes', ClienteController::class);
Route::resource('empleados', EmpleadoController::class);
Route::resource('productos', ProductoController::class);

?>
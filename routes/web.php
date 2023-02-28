<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;


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

Route::controller(LoginController::class)->group(function(){   //asi se define un grupo de rutas para login para el controlador login
    Route::get('/', 'show')->name('login'); // la ruta get es para mostrar la vista de login
    Route::post('/', 'login')->name('login');// la ruta post es para acceder al metodo del controlador para autenticarse
});
<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LogoutController;


use Illuminate\Support\Facades\Route;

Route::controller(LoginController::class)->group(function(){   //asi se define un grupo de rutas para login para el controlador login
    Route::get('/', 'show')->name('login'); // la ruta get es para mostrar la vista de login
    Route::post('/', 'login')->name('login');// la ruta post es para acceder al metodo del controlador para autenticarse
});

Route::controller(LogoutController::class)->group(function(){  // creación de RUTA logout //
    Route::get('logout', 'logout');
}); 

Route::controller(RegisterController::class)->group(function(){
    Route::get('register/show', 'show');
    Route::post('register/show', 'register');
}); 

Route::get('home', HomeController::class);

<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ResultadosController;



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

Route::controller(OrdersController::class)->group(function(){
    Route::get('orders/show', 'show')->name('orders.show');
    Route::get('orders/create', 'create')->name('orders.create');
    Route::post('orders/create', 'store')->name('orders.create');
    
}); 

Route::controller(HomeController::class)->group(function(){
    Route::get('home/show', 'show')->name('home.show');;
    
    
}); 

Route::controller(ResultadosController::class)->group(function(){
    Route::get('resultados/show', 'show');
    Route::get('resultados/create', 'create')->name('resultados.create');
    Route::post('resultados/create', 'store')->name('resultados.create');
    
}); 

Route::controller(LogoutController::class)->group(function(){  // creación de RUTA logout //
    Route::get('logout', 'logout');
}); 



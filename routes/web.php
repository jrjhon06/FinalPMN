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
use App\Http\Controllers\AcercadeController;

Route::get('/acerca-de', [AcercadeController::class, 'mostrarInformacion']);

Route::get('/', function () {
    return '<h1>Página de Inicio</h1>';
});
https://github.com/jrjhon06/FinalPMN.git
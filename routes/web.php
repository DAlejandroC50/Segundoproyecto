<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

Route::get('/hello',[HomeController::class]);
Route::get('post/mensaje',[PostController::class,'Mensaje']);
Route::get('post/about/{param}/{name?}',[PostController::class,'About']);
Route::get('post/contacto',[PostController::class,'Contacto']);

 //-- Al momento de cargar la vista, estos cargaran ciertos plantillas(layouts) y componentes-->
Route::get('/Principal',[PostController::class,'index']);
Route::get('/Llamado',[PostController::class,'llamado_componente']);
Route::get('/principalpagina',[PostController::class,'principal']);

Route::get('/', function () {
    return view('welcome');
});

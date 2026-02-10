<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

Route::get('/hello',HomeController::class);
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

Route::get('/hello/{d}', function ($d=null) {
    return "Hello World! {$d}";
})->where('d','[0-9]+');

Route::get('/hello/{x}', function ($x=null) {
    return "Hello World! {$x}";    
})->where('x','\w+');

Route::get('/principal', function () {
   return "Bienvenido a la página principal"; 
});

Route::get('/about/{param?}', function ($p=null) {
    if (($p=null)||(empty($p))){
        return "No se registró ningun parámetro";
    }
    return "El parametro ingresado es {$p}";
});
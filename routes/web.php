<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

Route::get('/hello',[HomeController::class]);
Route::get('post/mensaje',[PostController::class,'Mensaje']);
Route::get('post/about/{param}/{name?}',[PostController::class,'About']);
Route::get('post/contacto',[PostController::class,'Contacto']);

Route::get('/', function () {
    return view('welcome');
});

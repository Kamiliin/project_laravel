<?php

use App\Http\Controllers\FootballController;
use App\Http\Controllers\ImagenController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;



Route::get('/encuentros', [FootballController::class, 'getUpcomingMatches'])->name('encuentros');
Route::get('/principal', [FootballController::class, 'getChileanClubs'])->name('principal');
Route::get('/actualizar', [FootballController::class, 'updateDataFromAPI']);
Route::get('/estadios', [FootballController::class, 'getStadium'])->name('estadios');

Route::get('/register',[RegisterController::class,'index']) ->name('register');
Route::post('/register',[RegisterController::class,'store']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout',[LogoutController::class, 'store'])->name('logout');

Route::get('/{user:username}',[PostController::class,'index']) ->name('posts.index');
Route::get('/posts/create',[PostController::class,'create']) ->name('posts.create');


Route::post('/imagenes', [ImagenController::class, 'store']) ->name('imagenes.store');

Route::post('/posts',[PostController::class, 'store']) ->name('posts.store') ;

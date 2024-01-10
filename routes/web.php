<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
Route::get('/dashbord',[FormController::class, 'dashbord']);

Route::get('/',[UserController::class,'signup']);
Route::post('/insert', [UserController::class, 'insert']);
Route::get('/signin', [UserController::class, 'signin']);
Route::post('/login', [UserController::class, 'login']);
Route::get('/logout', [UserController::class, 'logout']);
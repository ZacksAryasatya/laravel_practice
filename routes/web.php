<?php

use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\GuardianController;

Route::get('/   ', [ProfilController::class, 'index']);
Route::get('/profil', [ProfilController::class, 'profil']);
Route::get('/kontak', [ContactController::class, 'index']);
Route::get('/home', [HomeController::class,'index']);
Route::get('/datasiswa', [StudentController::class, 'index']);
Route::get('/guardianroute', [GuardianController::class, 'index']);
Route::get('/classroom', [ClassroomController::class, 'index']);

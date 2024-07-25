<?php

use App\Http\Controllers\MatriController;
use App\Http\Controllers\Patient\FicheController;
use App\Http\Controllers\SpecialiteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [FicheController::class, 'index']);
Route::get('/test', [FicheController::class, 'index']);
Route::post('/test', [FicheController::class, 'nouveau']);

Route::get('/fiche', [FicheController::class, 'index']);
Route::post('/fiche/create', [FicheController::class, 'create']);
Route::post('/fiche/delete', [FicheController::class, 'delete']);

Route::get('/matri', [MatriController::class], 'index');
Route::post("/matri/create", [MatriController::class, 'create']);

Route::post('/specialite/add', [SpecialiteController::class, 'ajouter']);
Route::get('/specialite', [SpecialiteController::class, 'index']);
Route::post('/specialite/delete', [SpecialiteController::class, 'delete']);

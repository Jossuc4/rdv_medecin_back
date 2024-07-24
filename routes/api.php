<?php

use App\Http\Controllers\Patient\FicheController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [FicheController::class, 'index']);
Route::get('/test', [FicheController::class, 'index']);
Route::post('/test', [FicheController::class, 'nouveau']);
Route::post('/create/fiche', [FicheController::class, 'nouveau']);

<?php

use App\Http\Controllers\MatriController;
use App\Http\Controllers\medecin\MedecinController;
use App\Http\Controllers\Patient\FicheController;
use App\Http\Controllers\Medecin\SpecialiteController;
use App\Http\Controllers\RDVController;
use App\Http\Controllers\RDVTypeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [FicheController::class, 'index']);
Route::get('/test', [FicheController::class, 'index']);
Route::post('/test', [FicheController::class, 'nouveau']);

// !finished
Route::prefix('/fiche')->group(function () {
    Route::get('/', [FicheController::class, 'index']);
    Route::post('/create', [FicheController::class, 'create']);
    Route::put('/modif', [FicheController::class, 'modif']);
    Route::post('/delete', [FicheController::class, 'delete']);
});

// !finished
Route::prefix('/medecin')->group(function () {
    Route::get('/', [MedecinController::class, 'index']);
    Route::post('/new', [MedecinController::class, 'create']);
    Route::post('/modif', [MedecinController::class, 'modif']);
    Route::post('/delete', [MedecinController::class, 'delete']);
    Route::post('/login');
});

// !finished
Route::prefix('/rdvtype')->group(function () {
    Route::get('/', [RDVTypeController::class, 'index']);
    Route::post('/new', [RDVTypeController::class, 'create']);
    Route::post('/delete', [RDVTypeController::class, 'delete']);
});

// !finished
Route::prefix('/rdv')->group(function () {
    Route::get('/', [RDVController::class, 'index']);
    Route::post('/new', [RDVController::class, 'create']);
    Route::put('/report', [RDVController::class, 'report']);
    Route::post('/cancel', [RDVController::class, 'cancel']);
});

Route::get('/matri', [MatriController::class], 'index');
Route::post("/matri/create", [MatriController::class, 'create']);

Route::prefix('/specialite')->group(function () {
    Route::get('/', [SpecialiteController::class, 'index']);
    Route::post('/add', [SpecialiteController::class, 'ajouter']);
    Route::post('/delete', [SpecialiteController::class, 'delete']);
});

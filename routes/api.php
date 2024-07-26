<?php

use App\Http\Controllers\MatriController;
use App\Http\Controllers\medecin\MedecinController;
use App\Http\Controllers\Patient\FicheController;
use App\Http\Controllers\Medecin\SpecialiteController;
use App\Http\Controllers\RDVController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [FicheController::class, 'index']);
Route::get('/test', [FicheController::class, 'index']);
Route::post('/test', [FicheController::class, 'nouveau']);

Route::prefix('/fiche')->group(
    function () {
        Route::get('/', [FicheController::class, 'index']);
        Route::post('/create', [FicheController::class, 'create']);
        Route::post('/delete', [FicheController::class, 'delete']);
    }
);

Route::prefix('/medecin')->group(
    function () {
        Route::get('/', [MedecinController::class, 'index']);
        Route::post('/create', [MedecinController::class, 'create']);
        Route::post('/modif', [MedecinController::class, 'modif']);
        Route::post('/delete', [MedecinController::class, 'delete']);
        Route::post('/login');
    }
);

Route::prefix('/rdv')->group(
    function () {
        Route::get('/', [RDVController::class, 'index']);
        Route::post('/new', [RDVController::class, 'create']);
        Route::post('/report', [RDVController::class, 'report']);
        Route::post('/cancel', [RDVController::class, 'cancel']);
    }
);

Route::get('/matri', [MatriController::class], 'index');
Route::post("/matri/create", [MatriController::class, 'create']);

Route::post('/specialite/add', [SpecialiteController::class, 'ajouter']);
Route::get('/specialite', [SpecialiteController::class, 'index']);
Route::post('/specialite/delete', [SpecialiteController::class, 'delete']);

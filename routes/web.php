<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\CommandesController;
use App\Http\Controllers\ProduitsController;
use App\Http\Controllers\CommandeProduitController;

Route::get('/', function () {
    return view('master');
});

Route::resource('/clients',ClientsController::class);
Route::resource('/commandes',CommandesController::class);
Route::resource('/produits',ProduitsController::class);
Route::resource('/commandeProduits',CommandeProduitController::class);

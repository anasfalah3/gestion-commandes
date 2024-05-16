<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\CommandesController;
use App\Http\Controllers\ProduitsController;
use App\Http\Controllers\CommandeProduitController;
use App\Http\Controllers\RechercheController;

Route::view('/', 'master')->name('home');

Route::resource('/clients', ClientsController::class);
Route::resource('/commandes', CommandesController::class);
Route::resource('/produits', ProduitsController::class);
// Route::resource('/commandeProduits',CommandeProduitController::class);

Route::get('/commandeProduits', [CommandeProduitController::class, 'index'])->name('commandeProduits.index');
Route::get('/commandeProduits/{commande_id}/{produit_id}', [CommandeProduitController::class, 'show'])->name('commandeProduits.show');
Route::get('/commandeProduits/create', [CommandeProduitController::class, 'create'])->name('commandeProduits.create');
Route::post('/commandeProduits', [CommandeProduitController::class, 'store'])->name('commandeProduits.store');
Route::delete('/commandeProduits/{commande_id}/{produit_id}', [CommandeProduitController::class, 'destroy'])->name('commandeProduits.destroy');
Route::get('/commandeProduits/{commande_id}/{produit_id}/edit', [CommandeProduitController::class, 'edit'])->name('commandeProduits.edit');
Route::put('/commandeProduits/{commande_id}/{produit_id}', [CommandeProduitController::class, 'update'])->name('commandeProduits.update');

Route::get('/recherche/commandes_par_client', [RechercheController::class, 'commandes_par_client'])->name('recherche.commandes_par_client');
Route::get('/recherche/nombre_commandes_par_client', [RechercheController::class, 'nombre_commandes_par_client'])->name('recherche.nombre_commandes_par_client');
Route::get('/recherche/total_commandes_valides', [RechercheController::class, 'total_commandes_valides'])->name('recherche.total_commandes_valides');
Route::get('/recherche/produits_par_categorie', [RechercheController::class, 'produits_par_categorie'])->name('recherche.produits_par_categorie');
Route::get('/recherche/commandes_produits_par_client', [RechercheController::class, 'commandes_produits_par_client_View'])->name('recherche.commandes_produits_par_client_View');
Route::post('/recherche/commandes_produits_par_client', [RechercheController::class, 'commandes_produits_par_client'])->name('recherche.commandes_produits_par_client');
Route::get('/recherche/commandes_produits_par_annee', [RechercheController::class, 'commandes_produits_par_annee_View'])->name('recherche.commandes_produits_par_annee_View');
Route::post('/recherche/commandes_produits_par_annee', [RechercheController::class, 'commandes_produits_par_annee'])->name('recherche.commandes_produits_par_annee');

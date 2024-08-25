<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommuneController;
use App\Http\Controllers\ContribuableController;
use App\Http\Controllers\CategorieRecetteController;
use App\Http\Controllers\NatureRecetteCommunaleController;
use App\Http\Controllers\SousCategorieRecetteController;
use App\Http\Controllers\PieceJustificativeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\Actions\ActionController;
use App\Http\Controllers\PaiementController;
use App\Http\Controllers\ContribuableNatureRecetteCommunaleController;

Route::get('/pro', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', function (){
    return view('auth.login');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth','role:Liste des recettes non fiscales']],
    function () {
    Route::get('recette-non-fiscale', [ActionController::class, 'recette_non_fiscale'])->name('recette-non-fiscale');
});
Route::group(['middleware' => ['auth','role:Liste des recettes non fiscales,taux/tarif/montant de chaque nature de recettes non fiscales']],
    function () {
        Route::resource('nature-recette-communale', NatureRecetteCommunaleController::class);
        Route::get('recette-non-fiscale', [ActionController::class, 'recette_non_fiscale'])->name('recette-non-fiscale');
});

Route::group(['middleware' => ['auth','role:Liste des recettes fiscales']], function () {
    Route::get('recette-fiscale', [ActionController::class, 'recette_fiscale'])->name('recette-fiscale');
});
Route::group(['middleware' => ['auth','role:Liste des recettes fiscales,taux/tarif/montant de chaque nature de recettes fiscales']], function () {
    Route::resource('nature-recette-communale', NatureRecetteCommunaleController::class);
    Route::get('recette-fiscale', [ActionController::class, 'recette_fiscale'])->name('recette-fiscale');
});

Route::group(['middleware' => ['auth','role:Liste des contribuables des recettes non fiscales']], function () {
    Route::resource('contribuable', ContribuableController::class);
    Route::get('contribuable-recette-non-fiscale', [ActionController::class, 'contribuableNonFiscale'])->name('contribuable-recette-non-fiscale');
});

Route::group(['middleware' => ['auth','role:Liste des contribuables des recettes fiscales']], function () {
    Route::resource('contribuable', ContribuableController::class);
    Route::get('contribuable-recette-fiscale', [ActionController::class, 'contribuableFiscale'])->name('contribuable-recette-fiscale');
});
;
Route::group(['middleware' => ['auth','role:taux/tarif/montant du par chaque contribuable']], function () {
    Route::resource('contribuable', ContribuableController::class);
    Route::resource('nature-recette-communale', NatureRecetteCommunaleController::class);
    Route::get('contribuable-montant', [ActionController::class, 'contribuableDu'])->name('contribuable-montant');
});

Route::group(['middleware' => ['auth','role:Liste des recettes non fiscales,taux/tarif/montant de chaque nature de recettes non fiscales,Liste des recettes fiscales,taux/tarif/montant de chaque nature de recettes fiscales,Liste des contribuables des recettes non fiscales,Liste des contribuables des recettes fiscales,taux/tarif/montant du par chaque contribuable']],
    function () {
    Route::resource('contribuable_nature_recette', ContribuableNatureRecetteCommunaleController::class);
    Route::resource('paiement', PaiementController::class);
    Route::resource('commune', CommuneController::class);
    Route::resource('categorie-recette', CategorieRecetteController::class);
    Route::resource('sous-categorie-recette', SousCategorieRecetteController::class);
    Route::resource('piece-justificative', PieceJustificativeController::class);
    Route::resource('user', UserController::class);
    Route::resource('role', RoleController::class);
});

//Route::resource('contribuable', ContribuableController::class);
//Route::resource('nature-recette-communale', NatureRecetteCommunaleController::class);








<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommuneController;
use App\Http\Controllers\ContribuableController;
use App\Http\Controllers\CategorieRecetteController;
use App\Http\Controllers\RecouvrirController;
use App\Http\Controllers\NatureRecetteCommunaleController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SecretariatExecutifController;
use App\Http\Controllers\SousCategorieRecetteController;
use App\Http\Controllers\PieceJustificativeController;
use App\Http\Controllers\TransmettreController;
use App\Http\Controllers\AgentCollecteurController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\Actions\ActionController;

Route::get('/pro', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', function (){
    return view('dashboard.index');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth','role:Liste des recettes non fiscales,taux/tarif/montant de chaque nature de recettes non fiscales']],
    function () {
    Route::get('recette-non-fiscale', [ActionController::class, 'recette_non_fiscale'])->name('recette-non-fiscale');
});
Route::group(['middleware' => ['auth','role:Liste des recettes fiscales,taux/tarif/montant de chaque nature de recettes fiscales']], function () {
    Route::get('recette-fiscale', [ActionController::class, 'recette_fiscale'])->name('recette-fiscale');
});

Route::group(['middleware' => ['auth','role:Liste des contribuables des recettes non fiscales']], function () {
    Route::get('contribuable-recette-non-fiscale', [ActionController::class, 'contribuableNonFiscale'])->name('contribuable-recette-non-fiscale');
});
Route::group(['middleware' => ['auth','role:Liste des contribuables des recettes fiscales']], function () {
    Route::get('contribuable-recette-fiscale', [ActionController::class, 'contribuableFiscale'])->name('contribuable-recette-fiscale');
});
;
Route::group(['middleware' => ['auth','role:taux/tarif/montant du par chaque contribuable']], function () {
    Route::get('contribuable-montant', [ActionController::class, 'contribuableDu'])->name('contribuable-montant');
});


Route::resource('commune', CommuneController::class);
Route::resource('contribuable', ContribuableController::class);
Route::resource('transmettre', TransmettreController::class);
Route::resource('recouvrir', RecouvrirController::class);
Route::resource('categorie-recette', CategorieRecetteController::class);
Route::resource('agent-collecteur', AgentCollecteurController::class);
Route::resource('service', ServiceController::class);
Route::resource('secretariat-executif', SecretariatExecutifController::class);
Route::resource('sous-categorie-recette', SousCategorieRecetteController::class);
Route::resource('piece-justificative', PieceJustificativeController::class);
Route::resource('nature-recette-communale', NatureRecetteCommunaleController::class);



Route::resource('user', UserController::class);
Route::resource('role', RoleController::class);




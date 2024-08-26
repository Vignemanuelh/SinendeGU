<?php

namespace App\Http\Controllers\Actions;

use App\Http\Controllers\Controller;
use App\Models\CategorieRecette;
use App\Models\Contribuable;
use App\Models\NatureRecetteCommunale;
use App\Models\SousCategorieRecette;
use Illuminate\Http\Request;
use Exception;

class   ActionController extends Controller
{
    //
    public function recette_non_fiscale(){
        try {
            $categorie = CategorieRecette::find(2);
            $recettes_non_fiscales = $categorie->natureRecetteCommunales()->paginate();
            return view('recettes.non_fiscales', ['recettes_non_fiscales' => $recettes_non_fiscales]);
        }catch(Exception $e){
            return $e->getMessage();
        }
    }
    public function recette_fiscale(){
            try {
                $categorie = CategorieRecette::find(1);
                $recettes_fiscales = $categorie->natureRecetteCommunales()->paginate();
                return view('recettes.fiscales', ['recettes_fiscales' => $recettes_fiscales]);
            }catch(Exception $e){
                return $e->getMessage();
            }
        }
     public function contribuableFiscale(){
            try {
                $contribuables = CategorieRecette::find(1)->contribuables()->paginate();
                dd($contribuables);
                return view('contribuables.recettes-fiscales', ['contribuables' => $contribuables]);
            }catch(Exception $e){
                return $e->getMessage();
            }
        }
    public function contribuableNonFiscale(){
            try {
                $contribuables = CategorieRecette::find(2)->contribuables()->paginate();
                return view('contribuables.recettes-non-fiscales', ['contribuables' => $contribuables]);
            }catch(Exception $e){
                return $e->getMessage();
            }
        }
        public function contribuableDu(){
            try {
                $contribuables = Contribuable::with('natureRecettes', 'paiements', 'montantContribuable')->paginate();
                return view('contribuables.montant', ['contribuables' => $contribuables]);
            }catch(Exception $e){
                return $e->getMessage();
            }
        }



}

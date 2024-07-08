<?php

namespace App\Http\Controllers;

use App\Models\CategorieRecette;
use App\Models\SousCategorieRecette;
use Illuminate\Http\Request;
use Exception;

class SousCategorieRecetteController extends Controller
{
    public function index()
    {
        try {
            $sousCategorieRecettes = SousCategorieRecette::with('categorieRecette')->paginate();
            return view('sous-categorie-recette.index', ['sousCategorieRecettes' => $sousCategorieRecettes]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function create()
    {
        try {
            $categorieRecettes = CategorieRecette::all();
            return view('sous-categorie-recette.create', ['categorieRecettes' => $categorieRecettes]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|string',
            'nom' => 'required|string',
            'montant_estime' => 'required|decimal:2',
            'montant_recouvre' => 'required|decimal:2',
            'taux_recouvrement' => 'required|decimal:2',
//            'service_id' => 'required|exists:services,id',
            'categorie_recette_id' => 'required|exists:categorie_recettes,id',
        ]);

        $sousCategorieRecette = new SousCategorieRecette();
        $sousCategorieRecette->code = $request->code;
        $sousCategorieRecette->nom = $request->nom;
        $sousCategorieRecette->montant_estime = $request->montant_estime;
        $sousCategorieRecette->montant_recouvre = $request->montant_recouvre;
        $sousCategorieRecette->taux_recouvrement = $request->taux_recouvrement;
//        $sousCategorieRecette->service_id = $request->service_id;
        $sousCategorieRecette->categorie_recette_id = $request->categorie_recette_id;
        $sousCategorieRecette->save();

        return redirect()->route('sous-categorie-recette.index')->with('status', 'La sous-catégorie de recette a été ajoutée');
    }

    public function show(SousCategorieRecette $sousCategorieRecette)
    {
        try {
            $sousCategorieRecette = SousCategorieRecette::with('categorieRecette')->find($sousCategorieRecette->id);
            return view('sous-categorie-recette.show', ['sousCategorieRecette' => $sousCategorieRecette]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function edit(SousCategorieRecette $sousCategorieRecette)
    {
        try {
            $sousCategorieRecette = SousCategorieRecette::with('categorieRecette')->find($sousCategorieRecette->id);
            $categorieRecettes = CategorieRecette::all();
//            dd($sousCategorieRecette->categorieRecette->nom);
            return view('sous-categorie-recette.edit', ['sousCategorieRecette' => $sousCategorieRecette, 'categorieRecettes' => $categorieRecettes]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function update(Request $request, SousCategorieRecette $sousCategorieRecette)
    {
        $request->validate([
            'code' => 'required|string',
            'nom' => 'required|string',
            'montant_estime' => 'required|decimal:2',
            'montant_recouvre' => 'required|decimal:2',
            'taux_recouvrement' => 'required|decimal:2',
            'categorie_recette_id' => 'required|exists:categorie_recettes,id',
        ]);

        $sousCategorieRecette->code = $request->code;
        $sousCategorieRecette->nom = $request->nom;
        $sousCategorieRecette->montant_estime = $request->montant_estime;
        $sousCategorieRecette->montant_recouvre = $request->montant_recouvre;
        $sousCategorieRecette->taux_recouvrement = $request->taux_recouvrement;
        $sousCategorieRecette->categorie_recette_id = $request->categorie_recette_id;
        $sousCategorieRecette->save();

        return redirect()->route('sous-categorie-recette.index')->with('status', 'La sous-catégorie de recette a été modifiée');
    }

    public function destroy(SousCategorieRecette $sousCategorieRecette)
    {
        try {
            $sousCategorieRecette->delete();
            return redirect()->route('sous-categorie-recette.index')->with('status', 'La sous-catégorie de recette a été supprimée');
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}

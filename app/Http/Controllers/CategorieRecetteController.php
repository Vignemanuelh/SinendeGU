<?php
namespace App\Http\Controllers;

use App\Models\CategorieRecette;
use App\Models\Commune;
use Illuminate\Http\Request;
use Exception;

class CategorieRecetteController extends Controller
{
    public function index()
    {
        try {
            $categorieRecettes = CategorieRecette::with('commune')->paginate();
            return view('categorie-recette.index', ['categorieRecettes' => $categorieRecettes]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function create()
    {
        try {
            $communes = Commune::all();
            return view('categorie-recette.create', ['communes' => $communes]);
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
            'commune_id' => 'required|exists:communes,id',
            'col1' => 'required|string',
        ]);

        $categorieRecette = new CategorieRecette();
        $categorieRecette->code = $request->code;
        $categorieRecette->nom = $request->nom;
        $categorieRecette->montant_estime = $request->montant_estime;
        $categorieRecette->montant_recouvre = $request->montant_recouvre;
        $categorieRecette->taux_recouvrement = $request->taux_recouvrement;
        $categorieRecette->commune_id = $request->commune_id;
        $categorieRecette->col1 = $request->col1;
        $categorieRecette->save();

        return redirect()->route('categorie-recette.index')->with('status', 'La catégorie de recette a été ajoutée');
    }

    public function show(CategorieRecette $categorieRecette)
    {
        try {
            $categorieRecette = CategorieRecette::with('commune')->find($categorieRecette->id);
            return view('categorie-recette.show', ['categorieRecette' => $categorieRecette]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function edit(CategorieRecette $categorieRecette)
    {
        try {
            $categorieRecette = CategorieRecette::with('commune')->find($categorieRecette->id);
            $communes = Commune::all();
            return view('categorie-recette.edit', ['categorieRecette' => $categorieRecette, 'communes' => $communes]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function update(Request $request, CategorieRecette $categorieRecette)
    {
        $request->validate([
            'code' => 'required|string',
            'nom' => 'required|string',
            'montant_estime' => 'required|decimal:2',
            'montant_recouvre' => 'required|decimal:2',
            'taux_recouvrement' => 'required|decimal:2',
            'commune_id' => 'required|exists:communes,id',
            'col1' => 'required|string',
        ]);

        $categorieRecette->code = $request->code;
        $categorieRecette->nom = $request->nom;
        $categorieRecette->montant_estime = $request->montant_estime;
        $categorieRecette->montant_recouvre = $request->montant_recouvre;
        $categorieRecette->taux_recouvrement = $request->taux_recouvrement;
        $categorieRecette->commune_id = $request->commune_id;
        $categorieRecette->col1 = $request->col1;
        $categorieRecette->save();

        return redirect()->route('categorie-recette.index')->with('status', 'La catégorie de recette a été modifiée');
    }

    public function destroy(CategorieRecette $categorieRecette)
    {
        try {
            $categorieRecette->delete();
            return redirect()->route('categorie-recette.index')->with('status', 'La catégorie de recette a été supprimée');
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Contribuable;
use App\Models\ContribuableNatureRecette;
use App\Models\NatureRecetteCommunale;
use Illuminate\Http\Request;
use Exception;

class ContribuableNatureRecetteCommunaleController extends Controller
{
    public function index()
    {
        try {
            $contribuables = Contribuable::all();
            $nature_recette_communales = NatureRecetteCommunale::all();
            $contribuableNatureRecettes = ContribuableNatureRecette::paginate();
            return view('contribuable_nature_recette.index', ['contribuableNatureRecettes' => $contribuableNatureRecettes, 'contribuables' => $contribuables, 'nature_recette_communales' => $nature_recette_communales]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function create()
    {
        try {
            $contribuables = Contribuable::all();
            $nature_recette_communales = NatureRecetteCommunale::all();
            return view('contribuable_nature_recette.create', ['contribuables' => $contribuables, 'nature_recette_communales' => $nature_recette_communales]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'contribuable_id' => 'required|exists:contribuables,id',
            'nature_recette_communale_id' => 'required|exists:nature_recette_communales,id',
            'montant_du' => 'required|numeric',
        ]);

        $contribuableNatureRecette = new ContribuableNatureRecette();
        $contribuableNatureRecette->contribuable_id = $request->contribuable_id;
        $contribuableNatureRecette->nature_recette_communale_id = $request->nature_recette_communale_id;
        $contribuableNatureRecette->montant_du = $request->montant_du;
        $contribuableNatureRecette->save();

        return redirect()->route('contribuable_nature_recette.index')->with('status', 'L\'enregistrement a été ajouté avec succès');
    }

    public function show(ContribuableNatureRecette $contribuableNatureRecette)
    {
        try {
            $contribuables = Contribuable::all();
            $nature_recette_communales = NatureRecetteCommunale::all();
            return view('contribuable_nature_recette.show', ['contribuableNatureRecette' => $contribuableNatureRecette, 'contribuables' => $contribuables, 'nature_recette_communales' => $nature_recette_communales]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function edit(ContribuableNatureRecette $contribuableNatureRecette)
    {
        try {
            $contribuables = Contribuable::all();
            $nature_recette_communales = NatureRecetteCommunale::all();
            return view('contribuable_nature_recette.edit', ['contribuableNatureRecette' => $contribuableNatureRecette, 'contribuables' => $contribuables, 'nature_recette_communales' => $nature_recette_communales]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function update(Request $request, ContribuableNatureRecette $contribuableNatureRecette)
    {
        $request->validate([
            'contribuable_id' => 'required|exists:contribuables,id',
            'nature_recette_communale_id' => 'required|exists:nature_recette_communales,id',
            'montant_du' => 'required|numeric',
        ]);

        $contribuableNatureRecette->contribuable_id = $request->contribuable_id;
        $contribuableNatureRecette->nature_recette_communale_id = $request->nature_recette_communale_id;
        $contribuableNatureRecette->montant_du = $request->montant_du;
        $contribuableNatureRecette->save();

        return redirect()->route('contribuable_nature_recette.index')->with('status', 'L\'enregistrement a été modifié avec succès');
    }

    public function destroy(ContribuableNatureRecette $contribuableNatureRecette)
    {
        try {
            $contribuableNatureRecette->delete();
            return redirect()->route('contribuable_nature_recette.index')->with('status', 'L\'enregistrement a été supprimé avec succès');
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}

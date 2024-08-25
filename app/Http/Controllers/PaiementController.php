<?php

namespace App\Http\Controllers;

use App\Models\Contribuable;
use App\Models\NatureRecetteCommunale;
use App\Models\Paiement;
use Illuminate\Http\Request;
use Exception;

class PaiementController extends Controller
{
    public function index()
    {
        try {
            $contribuables = Contribuable::all();
            $nature_recette_communales = NatureRecetteCommunale::all();
            $paiements = Paiement::paginate();
            return view('paiement.index', ['paiements' => $paiements, 'contribuables' => $contribuables, 'nature_recette_communales' => $nature_recette_communales]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function create()
    {
        try {
            $contribuables = Contribuable::all();
            $nature_recette_communales = NatureRecetteCommunale::all();
            return view('paiement.create', ['contribuables' => $contribuables, 'nature_recette_communales' => $nature_recette_communales]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'contribuable_id' => 'required|exists:contribuables,id',
            'nature_recette_communale_id' => 'required|exists:nature_recette_communales,id',
            'date_paiement' => 'required|date',
            'montant' => 'required|numeric',
        ]);

        try {
            $paiement = new Paiement();
            $paiement->contribuable_id = $request->contribuable_id;
            $paiement->nature_recette_communale_id = $request->nature_recette_communale_id;
            $paiement->date_paiement = $request->date_paiement;
            $paiement->montant = $request->montant;
            $paiement->save();

            return redirect()->route('paiement.index')->with('status', 'Le paiement a été ajouté avec succès');
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function show(Paiement $paiement)
    {
        try {
            $contribuables = Contribuable::all();
            $nature_recette_communales = NatureRecetteCommunale::all();
            return view('paiement.show', ['paiement' => $paiement, 'contribuables' => $contribuables, 'nature_recette_communales' => $nature_recette_communales]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function edit(Paiement $paiement)
    {
        try {
            $contribuables = Contribuable::all();
            $nature_recette_communales = NatureRecetteCommunale::all();
            return view('paiement.edit', ['paiement' => $paiement, 'contribuables' => $contribuables, 'nature_recette_communales' => $nature_recette_communales]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function update(Request $request, Paiement $paiement)
    {
        $request->validate([
            'contribuable_id' => 'required|exists:contribuables,id',
            'nature_recette_communale_id' => 'required|exists:nature_recette_communales,id',
            'date_paiement' => 'required|date',
            'montant' => 'required|numeric',
        ]);

        try {
            $paiement->contribuable_id = $request->contribuable_id;
            $paiement->nature_recette_communale_id = $request->nature_recette_communale_id;
            $paiement->date_paiement = $request->date_paiement;
            $paiement->montant = $request->montant;
            $paiement->save();

            return redirect()->route('paiement.index')->with('status', 'Le paiement a été mis à jour avec succès');
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function destroy(Paiement $paiement)
    {
        try {
            $paiement->delete();
            return redirect()->route('paiement.index')->with('status', 'Le paiement a été supprimé avec succès');
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Recouvrir;
use Illuminate\Http\Request;
use Exception;

class RecouvrirController extends Controller
{
    public function index()
    {
        try {
            $recouvrirs = Recouvrir::paginate();
            return view('recouvrir.index', ['recouvrirs' => $recouvrirs]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function create()
    {
        try {
            return view('recouvrir.create');
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'nature_recette_id' => 'required|exists:nature_recette_communales,id',
            'agent_collecteur_id' => 'required|exists:agent_collecteurs,id',
            'date_recouvrement' => 'required|date',
        ]);

        $recouvrir = new Recouvrir();
        $recouvrir->nature_recette_id = $request->nature_recette_id;
        $recouvrir->agent_collecteur_id = $request->agent_collecteur_id;
        $recouvrir->date_recouvrement = $request->date_recouvrement;
        $recouvrir->save();

        return redirect()->route('recouvrir.index')->with('status', 'Recouvrement ajouté');
    }

    public function show(Recouvrir $recouvrir)
    {
        try {
            return view('recouvrir.show', ['recouvrir' => $recouvrir]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function edit(Recouvrir $recouvrir)
    {
        try {
            return view('recouvrir.edit', ['recouvrir' => $recouvrir]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function update(Request $request, Recouvrir $recouvrir)
    {
        $request->validate([
            'nature_recette_id' => 'required|exists:nature_recette_communales,id',
            'agent_collecteur_id' => 'required|exists:agent_collecteurs,id',
            'date_recouvrement' => 'required|date',
        ]);

        $recouvrir->nature_recette_id = $request->nature_recette_id;
        $recouvrir->agent_collecteur_id = $request->agent_collecteur_id;
        $recouvrir->date_recouvrement = $request->date_recouvrement;
        $recouvrir->save();

        return redirect()->route('recouvrir.index')->with('status', 'Recouvrement modifié');
    }

    public function destroy(Recouvrir $recouvrir)
    {
        try {
            $recouvrir->delete();
            return redirect()->route('recouvrir.index')->with('status', 'Recouvrement supprimé');
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}

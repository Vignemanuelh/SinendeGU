<?php
namespace App\Http\Controllers;

use App\Models\Commune;
use Illuminate\Http\Request;
use Exception;

class CommuneController extends Controller
{
    public function index()
    {
        try {
            $communes = Commune::paginate();
            return view('commune.index', ['communes' => $communes]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function create()
    {
        try {
            return view('commune.create');
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'num_compte' => 'nullable|string',
            'departement' => 'required|string',
            'nom' => 'required|string',
            'statut' => 'required|string',
            'superficie' => 'required|numeric',
            'population' => 'required|numeric',
        ]);

        $commune = new Commune();
        $commune->num_compte = $request->num_compte;
        $commune->departement = $request->departement;
        $commune->nom = $request->nom;
        $commune->statut = $request->statut;
        $commune->superficie = $request->superficie;
        $commune->population = $request->population;
        $commune->save();

        return redirect()->route('commune.index')->with('status', 'La commune a été ajoutée');
    }

    public function show(Commune $commune)
    {
        try {
            return view('commune.show', ['commune' => $commune]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function edit(Commune $commune)
    {
        try {
            return view('commune.edit', ['commune' => $commune]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function update(Request $request, Commune $commune)
    {
        $request->validate([
            'num_compte' => 'nullable|string',
            'departement' => 'required|string',
            'nom' => 'required|string',
            'statut' => 'required|string',
            'superficie' => 'required|numeric',
            'population' => 'required|numeric',
        ]);

        $commune->num_compte = $request->num_compte;
        $commune->departement = $request->departement;
        $commune->nom = $request->nom;
        $commune->statut = $request->statut;
        $commune->superficie = $request->superficie;
        $commune->population = $request->population;
        $commune->save();

        return redirect()->route('commune.index')->with('status', 'La commune a été modifiée');
    }

    public function destroy(Commune $commune)
    {
        try {
            $commune->delete();
            return redirect()->route('commune.index')->with('status', 'La commune a été supprimée');
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }


}

<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Exception;

class ServiceController extends Controller
{
    public function index()
    {
        try {
            $services = Service::paginate();
            return view('service.index', ['services' => $services]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function create()
    {
        try {
            return view('service.create');
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|string',
            'nom' => 'required|string',
            'categorie_recette_id' => 'required|exists:categorie_recettes,id',
            'sous_categorie_recette_id' => 'required|exists:sous_categorie_recettes,id',
            'nature_recette_id' => 'required|exists:nature_recette_communales,id',
            'contribuable_id' => 'required|exists:contribuables,id',
            'agent_collecteur_id' => 'required|exists:agent_collecteurs,id',
            'secretariat_executif_id' => 'required|exists:secretariat_executifs,id',
        ]);

        $service = new Service();
        $service->code = $request->code;
        $service->nom = $request->nom;
        $service->categorie_recette_id = $request->categorie_recette_id;
        $service->sous_categorie_recette_id = $request->sous_categorie_recette_id;
        $service->nature_recette_id = $request->nature_recette_id;
        $service->contribuable_id = $request->contribuable_id;
        $service->agent_collecteur_id = $request->agent_collecteur_id;
        $service->secretariat_executif_id = $request->secretariat_executif_id;
        $service->save();

        return redirect()->route('service.index')->with('status', 'Le service a été ajouté');
    }

    public function show(Service $service)
    {
        try {
            return view('service.show', ['service' => $service]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function edit(Service $service)
    {
        try {
            return view('service.edit', ['service' => $service]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function update(Request $request, Service $service)
    {
        $request->validate([
            'code' => 'required|string',
            'nom' => 'required|string',
            'categorie_recette_id' => 'required|exists:categorie_recettes,id',
            'sous_categorie_recette_id' => 'required|exists:sous_categorie_recettes,id',
            'nature_recette_id' => 'required|exists:nature_recette_communales,id',
            'contribuable_id' => 'required|exists:contribuables,id',
            'agent_collecteur_id' => 'required|exists:agent_collecteurs,id',
            'secretariat_executif_id' => 'required|exists:secretariat_executifs,id',
        ]);

        $service->code = $request->code;
        $service->nom = $request->nom;
        $service->categorie_recette_id = $request->categorie_recette_id;
        $service->sous_categorie_recette_id = $request->sous_categorie_recette_id;
        $service->nature_recette_id = $request->nature_recette_id;
        $service->contribuable_id = $request->contribuable_id;
        $service->agent_collecteur_id = $request->agent_collecteur_id;
        $service->secretariat_executif_id = $request->secretariat_executif_id;
        $service->save();

        return redirect()->route('service.index')->with('status', 'Le service a été modifié');
    }

    public function destroy(Service $service)
    {
        try {
            $service->delete();
            return redirect()->route('service.index')->with('status', 'Le service a été supprimé');
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}

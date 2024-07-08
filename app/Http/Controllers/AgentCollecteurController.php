<?php

namespace App\Http\Controllers;

use App\Models\AgentCollecteur;
use Illuminate\Http\Request;
use Exception;

class AgentCollecteurController extends Controller
{
    public function index()
    {
        try {
            $agentCollecteurs = AgentCollecteur::paginate();
            return view('agent-collecteur.index', ['agentCollecteurs' => $agentCollecteurs]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function create()
    {
        try {
            return view('agent-collecteur.create');
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'identifiant' => 'required|string',
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'date_naissance' => 'required|date',
            'npi' => 'required|unique:agent_collecteurs,npi',
            'email' => 'required|email|unique:agent_collecteurs,email',
            'telephone' => 'required|string',
            'type' => 'required|string',
            'arrondissement' => 'required|string',
            'quartier' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'secretariat_executif_id' => 'required|exists:secretariat_executifs,id',
        ]);
        if($request->has('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'uploads/agent/';
            $file->move($path, $filename);
        }

        $agentCollecteur = new AgentCollecteur();
        $agentCollecteur->identifiant = $request->identifiant;
        $agentCollecteur->nom = $request->nom;
        $agentCollecteur->prenom = $request->prenom;
        $agentCollecteur->date_naissance = $request->date_naissance;
        $agentCollecteur->npi = $request->npi;
        $agentCollecteur->email = $request->email;
        $agentCollecteur->telephone = $request->telephone;
        $agentCollecteur->type = $request->type;
        $agentCollecteur->arrondissement = $request->arrondissement;
        $agentCollecteur->quartier = $request->quartier;
        $agentCollecteur->image = $path.$filename;
        $agentCollecteur->secretariat_executif_id = $request->secretariat_executif_id;
        $agentCollecteur->save();

        return redirect()->route('agent-collecteur.index')->with('status', 'L\'agent collecteur a été ajouté');
    }

    public function show(AgentCollecteur $agentCollecteur)
    {
        try {
            return view('agent-collecteur.show', ['agentCollecteur' => $agentCollecteur]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function edit(AgentCollecteur $agentCollecteur)
    {
        try {
            return view('agent-collecteur.edit', ['agentCollecteur' => $agentCollecteur]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function update(Request $request, AgentCollecteur $agentCollecteur)
    {
        $request->validate([
            'identifiant' => 'required|string',
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'date_naissance' => 'required|date',
            'npi' => 'required|unique:agent_collecteurs,npi,' . $agentCollecteur->id,
            'email' => 'required|email|unique:agent_collecteurs,email,' . $agentCollecteur->id,
            'telephone' => 'required|string',
            'type' => 'required|string',
            'arrondissement' => 'required|string',
            'quartier' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'secretariat_executif_id' => 'required|exists:secretariat_executifs,id',
        ]);
        if($request->has('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'uploads/agent/';
            $file->move($path, $filename);
            $agentCollecteur->image = $path.$filename;
        }

        $agentCollecteur->nom = $request->nom;
        $agentCollecteur->identifiant = $request->identifiant;
        $agentCollecteur->prenom = $request->prenom;
        $agentCollecteur->date_naissance = $request->date_naissance;
        $agentCollecteur->npi = $request->npi;
        $agentCollecteur->email = $request->email;
        $agentCollecteur->telephone = $request->telephone;
        $agentCollecteur->type = $request->type;
        $agentCollecteur->arrondissement = $request->arrondissement;
        $agentCollecteur->quartier = $request->quartier;
        $agentCollecteur->secretariat_executif_id = $request->secretariat_executif_id;
        $agentCollecteur->save();

        return redirect()->route('agent-collecteur.index')->with('status', 'L\'agent collecteur a été modifié');
    }

    public function destroy(AgentCollecteur $agentCollecteur)
    {
        try {
            $agentCollecteur->delete();
            return redirect()->route('agent-collecteur.index')->with('status', 'L\'agent collecteur a été supprimé');
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}

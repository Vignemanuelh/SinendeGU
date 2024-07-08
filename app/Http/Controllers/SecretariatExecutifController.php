<?php

namespace App\Http\Controllers;

use App\Models\SecretariatExecutif;
use Illuminate\Http\Request;
use Exception;

class SecretariatExecutifController extends Controller
{
    public function index()
    {
        try {
            $secretariatExecutifs = SecretariatExecutif::paginate();
            return view('secretariat-executif.index', ['secretariatExecutifs' => $secretariatExecutifs]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function create()
    {
        try {
            return view('secretariat-executif.create');
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'titre' => 'required|string',
            'email' => 'required|email|unique:secretariat_executifs,email',
            'telephone' => 'required|string',
            'npi' => 'required|unique:secretariat_executifs,npi',
        ]);

        $secretariatExecutif = new SecretariatExecutif();
        $secretariatExecutif->nom = $request->nom;
        $secretariatExecutif->prenom = $request->prenom;
        $secretariatExecutif->titre = $request->titre;
        $secretariatExecutif->email = $request->email;
        $secretariatExecutif->telephone = $request->telephone;
        $secretariatExecutif->npi = $request->npi;
        $secretariatExecutif->save();

        return redirect()->route('secretariat-executif.index')->with('status', 'Le secrétariat exécutif a été ajouté');
    }

    public function show(SecretariatExecutif $secretariatExecutif)
    {
        try {
            return view('secretariat-executif.show', ['secretariatExecutif' => $secretariatExecutif]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function edit(SecretariatExecutif $secretariatExecutif)
    {
        try {
            return view('secretariat-executif.edit', ['secretariatExecutif' => $secretariatExecutif]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function update(Request $request, SecretariatExecutif $secretariatExecutif)
    {
        $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'titre' => 'required|string',
            'email' => 'required|email|unique:secretariat_executifs,email,' . $secretariatExecutif->id,
            'telephone' => 'required|string',
            'npi' => 'required|unique:secretariat_executifs,npi,' . $secretariatExecutif->id,
        ]);

        $secretariatExecutif->nom = $request->nom;
        $secretariatExecutif->prenom = $request->prenom;
        $secretariatExecutif->titre = $request->titre;
        $secretariatExecutif->email = $request->email;
        $secretariatExecutif->telephone = $request->telephone;
        $secretariatExecutif->npi = $request->npi;
        $secretariatExecutif->save();

        return redirect()->route('secretariat-executif.index')->with('status', 'Le secrétariat exécutif a été modifié');
    }

    public function destroy(SecretariatExecutif $secretariatExecutif)
    {
        try {
            $secretariatExecutif->delete();
            return redirect()->route('secretariat-executif.index')->with('status', 'Le secrétariat exécutif a été supprimé');
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}

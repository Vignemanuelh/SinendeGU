<?php
namespace App\Http\Controllers;

use App\Models\CategorieRecette;
use App\Models\Commune;
use App\Models\Contribuable;
use App\Models\NatureRecetteCommunale;
use Illuminate\Http\Request;
use Exception;

class ContribuableController extends Controller
{
    public function index()
    {
        try {
            $contribuables = Contribuable::with('communes')->paginate();
            return view('contribuable.index', ['contribuables' => $contribuables]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function create()
    {
        try {
            $communes = Commune::all();
            $categorieRecettes = CategorieRecette::all();
            $naturesRecettesCommunales = NatureRecetteCommunale::all();
            return view('contribuable.create', ['categorieRecettes' => $categorieRecettes, 'naturesRecettesCommunales' => $naturesRecettesCommunales, 'communes' => $communes]);
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
            'npi' => 'required|string',
            'email' => 'required|email',
            'telephone' => 'required|string',
            'activite' => 'required|string',
            'arrondissement' => 'required|string',
            'quartier' => 'required|string',
            'maison' => 'required|string',
            'commune_id'=>'required|exists:communes,id',
            'recettes' => 'required|array',
            'natures' => 'required|array',
        ]);

        $contribuable = new Contribuable();
        $contribuable->identifiant = $request->identifiant;
        $contribuable->nom = $request->nom;
        $contribuable->prenom = $request->prenom;
        $contribuable->date_naissance = $request->date_naissance;
        $contribuable->npi = $request->npi;
        $contribuable->email = $request->email;
        $contribuable->telephone = $request->telephone;
        $contribuable->activite = $request->activite;
        $contribuable->arrondissement = $request->arrondissement;
        $contribuable->quartier = $request->quartier;
        $contribuable->maison = $request->maison;
        $contribuable->commune_id = $request->commune_id;
        $contribuable->save();
        $contribuable->categorieRecettes()->attach($request->recettes);
        $contribuable->natureRecettes()->attach($request->natures);
        return redirect()->route('contribuable.index')->with('status', 'Le contribuable a été ajouté');
    }

    public function show(Contribuable $contribuable)
    {
        try {
            $contribuable = Contribuable::with('communes')->find($contribuable->id);
            return view('contribuable.show', ['contribuable' => $contribuable]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function edit(Contribuable $contribuable)
    {
        try {
            $communes = Commune::all();
            $contribuable = Contribuable::with('categorieRecettes')->find($contribuable->id);
            $categorieRecettes = CategorieRecette::all();
            $naturesRecettesCommunales = NatureRecetteCommunale::all();
            return view('contribuable.edit', ['contribuable' => $contribuable, 'categorieRecettes' => $categorieRecettes, 'naturesRecettesCommunales' => $naturesRecettesCommunales, 'communes' => $communes]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function update(Request $request, Contribuable $contribuable)
    {
        $request->validate([
            'identifiant' => 'required|string',
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'date_naissance' => 'required|date',
            'npi' => 'required|string',
            'email' => 'required|email',
            'telephone' => 'required|string',
            'activite' => 'required|string',
            'arrondissement' => 'required|string',
            'quartier' => 'required|string',
            'maison' => 'required|string',
            'commune_id'=>'required|exists:communes,id',
            'recettes' => 'required|array',
            'natures' => 'required|array',
        ]);

        $contribuable->identifiant = $request->identifiant;
        $contribuable->nom = $request->nom;
        $contribuable->prenom = $request->prenom;
        $contribuable->date_naissance = $request->date_naissance;
        $contribuable->npi = $request->npi;
        $contribuable->email = $request->email;
        $contribuable->telephone = $request->telephone;
        $contribuable->activite = $request->activite;
        $contribuable->arrondissement = $request->arrondissement;
        $contribuable->quartier = $request->quartier;
        $contribuable->maison = $request->maison;
        $contribuable->commune_id = $request->commune_id;
        $contribuable->save();
        $contribuable->categorieRecettes()->syncWithoutDetaching($request->recettes);
        $contribuable->natureRecettes()->syncWithoutDetaching($request->natures);
        return redirect()->route('contribuable.index')->with('status', 'Le contribuable a été modifié');
    }

    public function destroy(Contribuable $contribuable)
    {
        try {
            $contribuable->delete();
            return redirect()->route('contribuable.index')->with('status', 'Le contribuable a été supprimé');
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}

<?php
namespace App\Http\Controllers;

use App\Models\NatureRecetteCommunale;
use Illuminate\Http\Request;
use Exception;

class NatureRecetteCommunaleController extends Controller
{
    public function index()
    {
        try {
            $natureRecetteCommunales = NatureRecetteCommunale::paginate();
            return view('nature-recette-communale.index', ['natureRecetteCommunales' => $natureRecetteCommunales]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function create()
    {
        try {
            return view('nature-recette-communale.create');
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'code' => 'required|string',
                'nom' => 'required|string',
                'tarif' => 'required|decimal:2',
                'montant_estime' => 'required|decimal:2',
                'montant_recouvre' => 'required|decimal:2',
                'taux_recouvrement' => 'required|decimal:2',
                'preuve' => 'required|string',
                'fichiers' => 'required|string',
//                'service_id' => 'required|exists:services,id',
//                'contribuable_id' => 'required|exists:contribuables,id',
                'categorie_recette_id' => 'required|exists:categorie_recettes,id',
                'sous_categorie_recette_id' => 'required|exists:sous_categorie_recettes,id',
            ]);

            $natureRecetteCommunale = new NatureRecetteCommunale();
            $natureRecetteCommunale->code = $request->code;
            $natureRecetteCommunale->nom = $request->nom;
            $natureRecetteCommunale->tarif = $request->tarif;
            $natureRecetteCommunale->montant_estime = $request->montant_estime;
            $natureRecetteCommunale->montant_recouvre = $request->montant_recouvre;
            $natureRecetteCommunale->taux_recouvrement = $request->taux_recouvrement;
            $natureRecetteCommunale->preuve = $request->preuve;
            $natureRecetteCommunale->fichiers = $request->fichiers;
//            $natureRecetteCommunale->service_id = $request->service_id;
//            $natureRecetteCommunale->contribuable_id = $request->contribuable_id;
            $natureRecetteCommunale->categorie_recette_id = $request->categorie_recette_id;
            $natureRecetteCommunale->sous_categorie_recette_id = $request->sous_categorie_recette_id;
            $natureRecetteCommunale->save();

            return redirect()->route('nature-recette-communale.index')->with('status', 'La nature de recette communale a été ajoutée');
        }catch (Exception $e){
            return $e->getMessage();
        }

    }

    public function show(NatureRecetteCommunale $natureRecetteCommunale)
    {
        try {
            return view('nature-recette-communale.show', ['natureRecetteCommunale' => $natureRecetteCommunale]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function edit(NatureRecetteCommunale $natureRecetteCommunale)
    {
        try {
            return view('nature-recette-communale.edit', ['natureRecetteCommunale' => $natureRecetteCommunale]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function update(Request $request, NatureRecetteCommunale $natureRecetteCommunale)
    {
        try {
            $request->validate([
                'code' => 'required|string',
                'nom' => 'required|string',
                'tarif' => 'required|decimal:2',
                'montant_estime' => 'required|decimal:2',
                'montant_recouvre' => 'required|decimal:2',
                'taux_recouvrement' => 'required|decimal:2',
                'preuve' => 'required|string',
                'fichiers' => 'required|string',
//            'service_id' => 'required|exists:services,id',
//                'contribuable_id' => 'required|exists:contribuables,id',
                'categorie_recette_id' => 'required|exists:categorie_recettes,id',
                'sous_categorie_recette_id' => 'required|exists:sous_categorie_recettes,id',
            ]);

            $natureRecetteCommunale->code = $request->code;
            $natureRecetteCommunale->nom = $request->nom;
            $natureRecetteCommunale->tarif = $request->tarif;
            $natureRecetteCommunale->montant_estime = $request->montant_estime;
            $natureRecetteCommunale->montant_recouvre = $request->montant_recouvre;
            $natureRecetteCommunale->taux_recouvrement = $request->taux_recouvrement;
            $natureRecetteCommunale->preuve = $request->preuve;
            $natureRecetteCommunale->fichiers = $request->fichiers;
//        $natureRecetteCommunale->service_id = $request->service_id;
//            $natureRecetteCommunale->contribuable_id = $request->contribuable_id;
            $natureRecetteCommunale->categorie_recette_id = $request->categorie_recette_id;
            $natureRecetteCommunale->sous_categorie_recette_id = $request->sous_categorie_recette_id;
            $natureRecetteCommunale->save();

            return redirect()->route('nature-recette-communale.index')->with('status', 'La nature de recette communale a été modifiée');
        }catch(Exception $e) {
            return $e->getMessage();
        }
    }

    public function destroy(NatureRecetteCommunale $natureRecetteCommunale)
    {
        try {
            $natureRecetteCommunale->delete();
            return redirect()->route('nature-recette-communale.index')->with('status', 'La nature de recette communale a été supprimée');
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}

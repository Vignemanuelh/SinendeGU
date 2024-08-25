<?php
namespace App\Http\Controllers;

use App\Models\NatureRecetteCommunale;
use App\Models\PieceJustificative;
use Illuminate\Http\Request;
use Exception;

class PieceJustificativeController extends Controller
{
    public function index()
    {
        try {
            $pieceJustificatives = PieceJustificative::with('natureRecetteCommunale')-> paginate();
            return view('piece-justificative.index', ['pieceJustificatives' => $pieceJustificatives]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function create()
    {
        try {
            $natureRecetteCommunales = NatureRecetteCommunale::all();
            return view('piece-justificative.create', ['natureRecetteCommunales' => $natureRecetteCommunales]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|string',
            'nom' => 'required|string',
            'nature_recette_communale_id' => 'required|exists:nature_recette_communales,id',
        ]);

        $pieceJustificative = new PieceJustificative();
        $pieceJustificative->code = $request->code;
        $pieceJustificative->nom = $request->nom;
        $pieceJustificative->nature_recette_communale_id = $request->nature_recette_communale_id;
        $pieceJustificative->save();

        return redirect()->route('piece-justificative.index')->with('status', 'La pièce justificative a été ajoutée');
    }

    public function show(PieceJustificative $pieceJustificative)
    {
        try {
            $pieceJustificative = PieceJustificative::with('natureRecetteCommunale')->find($pieceJustificative->id);
            return view('piece-justificative.show', ['pieceJustificative' => $pieceJustificative]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function edit(PieceJustificative $pieceJustificative)
    {
        try {
            $natureRecetteCommunales = NatureRecetteCommunale::all();
            return view('piece-justificative.edit', ['pieceJustificative' => $pieceJustificative, 'natureRecetteCommunales' => $natureRecetteCommunales]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function update(Request $request, PieceJustificative $pieceJustificative)
    {
        $request->validate([
            'code' => 'required|string',
            'nom' => 'required|string',
            'nature_recette_communale_id' => 'required|exists:nature_recette_communales,id',
        ]);

        $pieceJustificative->code = $request->code;
        $pieceJustificative->nom = $request->nom;
        $pieceJustificative->nature_recette_communale_id = $request->nature_recette_communale_id;
        $pieceJustificative->save();

        return redirect()->route('piece-justificative.index')->with('status', 'La pièce justificative a été modifiée');
    }

    public function destroy(PieceJustificative $pieceJustificative)
    {
        try {
            $pieceJustificative->delete();
            return redirect()->route('piece-justificative.index')->with('status', 'La pièce justificative a été supprimée');
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}

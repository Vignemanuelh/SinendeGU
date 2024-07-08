<?php
namespace App\Http\Controllers;

use App\Models\PieceJustificative;
use Illuminate\Http\Request;
use Exception;

class PieceJustificativeController extends Controller
{
    public function index()
    {
        try {
            $pieceJustificatives = PieceJustificative::paginate();
            return view('piece-justificative.index', ['pieceJustificatives' => $pieceJustificatives]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function create()
    {
        try {
            return view('piece-justificative.create');
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|string',
            'nom' => 'required|string',
        ]);

        $pieceJustificative = new PieceJustificative();
        $pieceJustificative->code = $request->code;
        $pieceJustificative->nom = $request->nom;
        $pieceJustificative->save();

        return redirect()->route('piece-justificative.index')->with('status', 'La pièce justificative a été ajoutée');
    }

    public function show(PieceJustificative $pieceJustificative)
    {
        try {
            return view('piece-justificative.show', ['pieceJustificative' => $pieceJustificative]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function edit(PieceJustificative $pieceJustificative)
    {
        try {
            return view('piece-justificative.edit', ['pieceJustificative' => $pieceJustificative]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function update(Request $request, PieceJustificative $pieceJustificative)
    {
        $request->validate([
            'code' => 'required|string',
            'nom' => 'required|string',
        ]);

        $pieceJustificative->code = $request->code;
        $pieceJustificative->nom = $request->nom;
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

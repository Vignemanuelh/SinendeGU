<?php

namespace App\Http\Controllers;

use App\Models\Transmettre;
use Illuminate\Http\Request;
use Exception;

class TransmettreController extends Controller
{
    public function index()
    {
        try {
            $transmettres = Transmettre::paginate();
            return view('transmettre.index', ['transmettres' => $transmettres]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function create()
    {
        try {
            return view('transmettre.create');
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'secretariat_executif_id' => 'required|exists:secretariat_executifs,id',
            'piece_justificative_id' => 'required|exists:pieces_justificatives,id',
            'date_transmission' => 'required|date',
        ]);

        $transmettre = new Transmettre();
        $transmettre->secretariat_executif_id = $request->secretariat_executif_id;
        $transmettre->piece_justificative_id = $request->piece_justificative_id;
        $transmettre->date_transmission = $request->date_transmission;
        $transmettre->save();

        return redirect()->route('transmettre.index')->with('status', 'Transmission ajoutée');
    }

    public function show(Transmettre $transmettre)
    {
        try {
            return view('transmettre.show', ['transmettre' => $transmettre]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function edit(Transmettre $transmettre)
    {
        try {
            return view('transmettre.edit', ['transmettre' => $transmettre]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function update(Request $request, Transmettre $transmettre)
    {
        $request->validate([
            'secretariat_executif_id' => 'required|exists:secretariat_executifs,id',
            'piece_justificative_id' => 'required|exists:pieces_justificatives,id',
            'date_transmission' => 'required|date',
        ]);

        $transmettre->secretariat_executif_id = $request->secretariat_executif_id;
        $transmettre->piece_justificative_id = $request->piece_justificative_id;
        $transmettre->date_transmission = $request->date_transmission;
        $transmettre->save();

        return redirect()->route('transmettre.index')->with('status', 'Transmission modifiée');
    }

    public function destroy(Transmettre $transmettre)
    {
        try {
            $transmettre->delete();
            return redirect()->route('transmettre.index')->with('status', 'Transmission supprimée');
        } catch (Exception $e) {

            return $e->getMessage();
        }
    }
}

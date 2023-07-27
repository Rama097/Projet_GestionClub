<?php

namespace App\Http\Controllers;

use App\Models\Membre;
use App\Models\Club;
use Illuminate\Http\Request;

class MembreController extends Controller
{
    public function index()
    {
        $membres = Membre::all();
        $clubs=Club::all();
        return view('membre.index', compact('membres', 'clubs'));
    }

    public function create()
    {
        $membres = Membre::all();
        $clubs = Club::all();  

        return view('membre.create'  , compact('clubs', 'membres'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'email' => 'required|email',
            'club_id' => 'required'
        ]);

        Membre::create([
            'nom' => $request->nom,
            'email' => $request->email,
            'club_id' => $request->club_id
        ]);

        return redirect()->route('membres.index')->with('success', 'Membre créé avec succès');
    }

    public function edit($id)
    {
        $membre=Membre::find($id);
        // $clubs = Club::all();

        return view('membre.edit', compact('membre', 'club'));
    }

    public function update(Request $request, Membre $membre)
    {
        $request->validate([
            'nom' => 'required',
            'email' => 'required|email',
            'club_id' => 'required'
        ]);

        $membre->update([
            'nom' => $request->nom,
            'email' => $request->email,
            'club_id' => $request->club_id
        ]);

        return redirect()->route('membres.index')->with('success', 'Membre mis à jour avec succès');
    }

    public function destroy($id)
    {
        $membre=Membre::find($id);
        $membre->delete();
        

        return redirect()->route('membres.index')->with('success', 'Membre supprimé avec succès');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use App\Models\Club;
use Illuminate\Http\Request;

class ActiviteController extends Controller

{
    public function index()
    {
        $activites = Activite::all();
        $clubs=Club::all();
        return view('activite.index', compact('activites', 'clubs'));
    }

    public function create()
    {
        $activites = Activite::all();
        $clubs = Club::all();
        return view('activite.create', compact('clubs','activites'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required',
            'description' => 'required',
            'club_id' => 'required',
        ]);

        Activite::create([
            'titre' => $request->titre,
            'description' => $request->description,
            'club_id' => $request->club_id
        ]);

        return redirect()->route('activites.index')
            ->with('success', 'Activité créée avec succès.');
    }

    public function edit($id)
    {
        $activite=Activite::find($id);
        $clubs = Club::all();
        return view('activite.edit', compact('activite', 'clubs'));
    }

    public function update(Request $request, Activite $activite)
    {
        $validatedData=$request->validate([
            'titre' => 'required',
            'description' => 'required',
            'club_id' => 'required',
        ]);
        $activite->update($validatedData);
        // Activite::update([
        //     'titre' => $request->titre,
        //     'description' => $request->description,
        //     'club_id' => $request->club_id
        // ]);
        

        return redirect()->route('activites.index')
            ->with('success', 'Activité mise à jour avec succès.');
    }

    public function destroy($id)
    {
        $activite=Activite::find($id);
        $activite->delete();

        return redirect()->route('activites.index')
            ->with('success', 'Activité supprimée avec succès.');
    }
}

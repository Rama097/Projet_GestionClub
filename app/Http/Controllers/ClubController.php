<?php
namespace App\Http\Controllers;

use App\Models\Club;
use Illuminate\Http\Request;
//Illuminate\Support\Facades\Session

class ClubController extends Controller
{
    public function create()
    {
        return view('club.create');
    }

    public function index() 
    {
        $clubs=Club::all();
        return view('club.index', compact('clubs')); 
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Club::create($validatedData);

        return redirect()->route('clubs.index')
            ->with('success', 'Club créé avec succès.');
    }

    public function edit($id)
    {

        $club=Club::find($id);
        return view('club.edit', compact('club'));
    }

    public function update(Request $request, Club $club)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $club->update($validatedData);

        return redirect()->route('clubs.index')
            ->with('success', 'Club mis à jour avec succès.');
    }

    public function destroy($id)
    {
        $club=Club::find($id);
        $club->delete();
    
        return redirect()->route('clubs.index')
            ->with('success', 'Club supprimé avec succès.');
    }
}
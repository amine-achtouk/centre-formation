<?php

namespace App\Http\Controllers;

use App\Models\filieres;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class FilieresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filieres = filieres::orderBy('nom')->paginate(10);
        return view('filieres.index', compact('filieres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('filieres.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'code' => ['required', 'string', 'max:20', 'unique:filieres,code'],
            'nom' => ['required', 'string', 'max:150'],
            'description' => ['nullable', 'string']
        ]);
        filieres::create($validateData);

        return redirect()
            ->route('filieres.index')
            ->with('success', "Filiere Create avec Succes");
    }

    /**
     * Display the specified resource.
     */
    public function show(filieres $filieres)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(filieres $filieres)
    {
        return view('filieres.edit', compact('filieres'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, filieres $filieres)
    {
        $validated = $request->validate([
            'code' => ['required', 'string', 'max:20', Rule::unique('filieres', 'code')->ignore($filieres->id)],
            'nom' => ['required', 'string', 'max:150'],
            'description' => ['nullable', 'string']
        ]);

        $filieres->update($validated);

        return redirect()
            ->route('filieres.index')
            ->with('Success', 'Filiere Modifiee');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(filieres $filieres)
    {
        $filieres->delete();
        return redirect()
            ->route('filieres.index')
            ->with('Success', 'Filiere Supprime');
    }
}

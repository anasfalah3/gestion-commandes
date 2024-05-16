<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produits = Produit::all();
        return view("produits.index",compact("produits"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("produits.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'ref' => 'required|alpha_num',
                'nom' => 'required|string',
                'prix' => 'required|numeric',
                'categorie' => 'required|in:PC Portable,PC Poste,Smartphone,Tablette',
                
            ]
        );
        Produit::create($request->all());

        return redirect()->route('produits.index')->with('success', 'Produit bien ajoute');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $produit = Produit::find($id);
        return view("produits.show",compact("produit"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produit = Produit::find($id);
        return view("produits.edit", compact("produit"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $produit = Produit::find($id);
        $request->validate(
            [
                'ref' => 'required|alpha_num|unique:produits,ref,'.$produit->id,
                'nom' => 'required|string',
                'prix' => 'required|numeric',
                'categorie' => 'required|in:PC Portable,PC Poste,Smartphone,Tablette',

            ]
        );
        $produit->update($request->all());

        return redirect()->route('produits.index')->with('success', 'Produit bien modifié');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produit = Produit::find($id);
        $produit->delete();
        return redirect()->route('produits.index')->with('success', 'Produit bien supprimée');

    }
}

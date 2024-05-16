<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Models\CommandeProduit;
use App\Models\Produit;
use Illuminate\Http\Request;

class CommandeProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $commandeProduits = Commande::join("commande_produit", "commandes.id", "=", "commande_produit.commande_id")
                                    ->join("produits", "commande_produit.produit_id", "=", "produits.id")
                                    ->get();
        return view("commandeProduits.index", compact("commandeProduits"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $commandes = Commande::all();
        $produits = Produit::all();
        return view("commandeProduits.create", compact("commandes", "produits"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                "commande_id" => "required|exists:commandes,id",
                "produit_id" => "required|exists:produits,id",
                "QteCmd" => "required|numeric|min:1",
            ]
        );

        $commande = Commande::find($request->commande_id);
        $produit = Produit::find($request->produit_id);
        $commande->produits()->attach(
            $produit,
            [
                'QteCmd' => $request->QteCmd,
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        return redirect()->route("commandeProduits.index")->with("success", "affectation bien ajoutée");
    }

    /**
     * Display the specified resource.
     */
    public function show($commande_id, $produit_id)
    {

        $commandeProduit = Commande::join("commande_produit", "commandes.id", "=", "commande_produit.commande_id")
                                    ->join("produits", "commande_produit.produit_id", "=", "produits.id")
                                    ->join("clients", "commandes.client_id", "=", "clients.id")
                                    ->selectRaw("concat(clients.nom,' ',clients.prenom ) as buyer,
                                                 commandes.dateCmd,
                                                 commandes.etatCmd,
                                                 produits.nom as nomProduit,
                                                 produits.prix,
                                                 commande_produit.QteCmd
                                                 ")
                                    ->where("commandes.id", $commande_id)
                                    ->where("produits.id", $produit_id)
                                    ->first();
        // return response()->json($commandeProduit);
        return view("commandeProduits.show", compact("commandeProduit"));
        
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($commande_id, $produit_id)
    {
        $commandeProduit = Commande::find($commande_id)
                            ->produits()
                            ->where('produit_id', $produit_id)
                            ->first();
        // return response()->json($commandeProduit);
        $commandes = Commande::all();
        $produits = Produit::all();
        return view("commandeProduits.edit", compact("commandes", "produits", "commandeProduit"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $commande_id, $produit_id)
    {
        $request->validate(
            [
                "commande_id" => "required|exists:commandes,id",
                "produit_id" => "required|exists:produits,id",
                "QteCmd" => "required|numeric|min:1",
            ]
        );

        $oldCommande = Commande::find($commande_id);
        $oldProduit = Produit::find($produit_id);

        $newCommande = Commande::find($request->commande_id);
        $newProduit = Produit::find($request->produit_id);

        $oldCommande->produits()->detach($oldProduit);
        $newCommande->produits()->attach(
            $newProduit,
            [
                'QteCmd' => $request->QteCmd,
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        return redirect()->route("commandeProduits.index")->with("success", "affectation bien modifieé");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($commande_id, $produit_id)
    {
        $commande = Commande::find($commande_id);
        $produit = produit::find($produit_id);
        $commande->produits()->detach($produit);
        return redirect()->route("commandeProduits.index")->with("success", "affectation bien supprimée");
    }
}

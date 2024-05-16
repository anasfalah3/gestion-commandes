<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Commande;
use Illuminate\Http\Request;

class CommandesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $commandes = Commande::all();
        return view("commandes.index", compact("commandes"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clients = Client::all();
        return view("commandes.create", compact("clients"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                "dateCmd" => "required|date",
                "client_id" => "required|exists:clients,id",
            ]
        );
        Commande::create(
            [
                "dateCmd" =>  $request->dateCmd,
                "etatCmd" => "En Cours",
                "client_id" =>  $request->client_id,
            ]
        );

        return redirect()->route("commandes.index")->with("success", "commande bien ajoutée");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $commande = Commande::find($id);
        return view("commandes.show", compact("commande"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $commande = Commande::find($id);
        $clients = Client::all();
        return view("commandes.edit", compact("commande","clients"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $commande = Commande::find($id);
        $request->validate(
            [
                "dateCmd" => "required|date",
                "etatCmd" => "required|in:En Cours,Refusé,Validé",
                "client_id" => "required|exists:clients,id",
            ]
        );
        $commande->update($request->all());

        return redirect()->route("commandes.index")->with("success", "commande bien modifié");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $commande = Commande::find($id);
        $commande->delete();
        return redirect()->route("commandes.index")->with("success", "commande bien supprimée");
    }
}

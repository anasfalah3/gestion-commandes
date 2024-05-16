<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Commande;
use App\Models\CommandeProduit;
use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RechercheController extends Controller
{
    public function commandes_par_client()
    {
        $clients = Client::all();
        return view("recherche.commandes_par_client", compact("clients"));
    }
    public function nombre_commandes_par_client()
    {
        $clients = Client::all();
        return view("recherche.nombre_commandes_par_client", compact("clients"));
    }
    public function total_commandes_valides()
    {
        $commandesValide = Commande::where('etatCmd', 'Validé')->with('produits')->get();
        return view("recherche.total_commandes_valides", compact("commandesValide"));
    }
    public function produits_par_categorie()
    {
        $produits = Produit::all();
        $produitsParCategorie = $produits->groupBy('categorie');
        // return response()->json($produitsParCategorie);
        return view("recherche.produits_par_categorie", compact("produitsParCategorie"));
    }
    public function commandes_produits_par_client_View()
    {
        $clients = Client::all();
        return view("recherche.commandes_produits_par_client", compact("clients"));
    }
    public function commandes_produits_par_client(Request $request)
    {
        $clients = Client::all();
        $client = Client::find($request->client_id);
        $commandesClient = $client->commandes;

        return view("recherche.commandes_produits_par_client", compact("clients", "commandesClient"));
    }

    public function commandes_produits_par_annee_View()
    {
        $annees = Commande::select('dateCmd')->orderby('dateCmd','ASC')->distinct()->get();
        return view("recherche.commandes_produits_par_annee", compact("annees"));
    }
    public function commandes_produits_par_annee(Request $request)
    {
        $annees = Commande::select('dateCmd')->orderby('dateCmd', 'ASC')->distinct()->get();
        $commandesParAnnees = Commande::whereYear('dateCmd', $request->annee)->with('client','produits')->get();
        return view("recherche.commandes_produits_par_annee", compact("annees", "commandesParAnnees"));
    }
}

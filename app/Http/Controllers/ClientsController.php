<?php

namespace App\Http\Controllers;
use App\Models\Client;

use Illuminate\Http\Request;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::all() ;
        return view('clients.index',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clients.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'nom' =>'required|alpha',
                'prenom' =>'required|alpha',
                'sexe' =>'required|in:M,F',
                'tel' =>'required',
                'email' =>'required|email',
                'fonction' =>'required',
            ]
        );
        Client::create($request->all());

        return redirect()->route('clients.index')->with('success', 'Client bien ajoute');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $client = Client::find($id);
        return view('clients.show',compact('client'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $client = Client::find($id);
        return view('clients.edit',compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $client = Client::find($id);
        $request->validate(
            [
                'nom' => 'required|alpha',
                'prenom' => 'required|alpha',
                'sexe' => 'required|in:M,F',
                'tel' => 'required',
                'email' => 'required|email',
                'fonction' => 'required',
            ]
        );
        $client->update($request->all());

        return redirect()->route('clients.index')->with('success', 'Client bien modifié');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $client = Client::find($id);
        $client->delete();
        return redirect()->route('clients.index')->with('success', 'Client bien supprimee');

    }
}

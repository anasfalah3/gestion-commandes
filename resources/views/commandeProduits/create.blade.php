@extends('master')
@section('title','affectation')
@section('content')

<a href="{{route('commandeProduits.index')}}" class="mb-3" style="font-size: xx-large; cursor:pointer;">
    <span>
        <i class="ti ti-arrow-left"></i>
        Back
    </span>
</a>
<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">New Affectation</h5>
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('commandeProduits.store')}}" method="post">
                            @csrf
                            @method('POST')
                            <div class="row mb-3">
                                <div class="col-6">
                                    <label for="commande_id" class="form-label">Client<span class="text-danger">*</span></label>
                                    <select name="commande_id" id="commande_id" class="form-control">
                                        @foreach ($commandes as $commande)
                                        <option value="{{$commande->id}}" @if( old('commande_id')==$commande->id) selected @endif >{{$commande->id }} de {{$commande->client->nom ." ". $commande->client->prenom}}</option>
                                        @endforeach
                                    </select>
                                    @error('commande_id')
                                    <span class="text-danger d-block">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label for="produit_id" class="form-label">Client<span class="text-danger">*</span></label>
                                    <select name="produit_id" id="produit_id" class="form-control">
                                        @foreach ($produits as $produit)
                                        <option value="{{$produit->id}}" @if( old('produit_id')==$produit->id) selected @endif >{{$produit->nom }} - {{$produit->ref}}</option>
                                        @endforeach
                                    </select>
                                    @error('produit_id')
                                    <span class="text-danger d-block">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <label for="QteCmd" class="form-label">Quantite de Commande</label>
                                <input type="text" class="form-control" id="QteCmd" placeholder="20" name="QteCmd" value="{{old('QteCmd')}}">
                                @error('QteCmd')
                                <div class="form-text text-danger d-block">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="reset" class="btn btn-danger">Annuler</button>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
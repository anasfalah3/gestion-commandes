@extends('master')
@section('title','Produit')
@section('content')

<a href="{{route('produits.index')}}" class="mb-3" style="font-size: xx-large; cursor:pointer;">
    <span>
        <i class="ti ti-arrow-left"></i>
        Back
    </span>
</a>
<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">New Produit</h5>
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('produits.store')}}" method="post">
                            @csrf
                            @method('POST')
                            <div class="row mb-3">
                                <div class="col-6">
                                    <label for="ref" class="form-label">Ref</label>
                                    <input type="text" class="form-control" id="ref" name="ref" placeholder="mx123" value="{{old('ref')}}">
                                    @error('ref')
                                    <div class="form-text text-danger d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label for="nom" class="form-label">Nom de produit</label>
                                    <input type="text" class="form-control" id="nom" name="nom" value="{{old('nom')}}" placeholder="Samsung S23">
                                    @error('nom')
                                    <div class="form-text text-danger d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-6">
                                    <label for="prix" class="form-label">Prix</label>
                                    <input type="prix" class="form-control" id="prix" name="prix" value="{{old('prix')}}" placeholder="399.99">
                                    @error('prix')
                                    <div class="form-text text-danger d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label for="categorie" class="form-label">Categorie<span class="text-danger">*</span></label>
                                    <select name="categorie" id="categorie" class="form-control">
                                        <option value="PC Portable">PC Portable</option>
                                        <option value="PC Poste">PC Poste</option>
                                        <option value="Smartphone">Smartphone</option>
                                        <option value="Tablette">Tablette</option>
                                    </select>
                                    @error('categorie')
                                    <span class="text-danger d-block">{{ $message }}</span>
                                    @enderror
                                </div>
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
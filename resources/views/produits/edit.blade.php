@extends('master')
@section('title','produit')
@section('content')


<div class="container-fluid">
      <div class="container-fluid">
            <div class="card">
                  <div class="card-body">
                        <h5 class="card-title fw-semibold mb-4">edite Produit : {{$produit->nom}}</h5>
                        <div class="card">
                              <div class="card-body">
                                    <form action="{{route('produits.update',$produit->id)}}" method="post">
                                          @csrf
                                          @method('PUT')
                                          <div class="row mb-3">
                                                <div class="col-6">
                                                      <label for="ref" class="form-label">Ref</label>
                                                      <input type="text" class="form-control" id="ref" name="ref" placeholder="mx123" value="{{$produit->ref}}">
                                                      @error('ref')
                                                      <div class="form-text text-danger d-block">{{ $message }}</div>
                                                      @enderror
                                                </div>
                                                <div class="col-6">
                                                      <label for="nom" class="form-label">Nom de produit</label>
                                                      <input type="text" class="form-control" id="nom" name="nom" value="{{$produit->nom}}" placeholder="Samsung S23">
                                                      @error('nom')
                                                      <div class="form-text text-danger d-block">{{ $message }}</div>
                                                      @enderror
                                                </div>
                                          </div>
                                          <div class="row mb-3">
                                                <div class="col-6">
                                                      <label for="prix" class="form-label">Prix</label>
                                                      <input type="prix" class="form-control" id="prix" name="prix" value="{{$produit->prix}}" placeholder="399.99">
                                                      @error('prix')
                                                      <div class="form-text text-danger d-block">{{ $message }}</div>
                                                      @enderror
                                                </div>
                                                <div class="col-6">
                                                      <label for="categorie" class="form-label">Categorie<span class="text-danger">*</span></label>
                                                      <select name="categorie" id="categorie" class="form-control">
                                                            <option value="PC Portable" @if ($produit->fonction == "PC Portable") selected @endif>PC Portable</option>
                                                            <option value="PC Poste" @if ($produit->fonction == "PC Poste") selected @endif>PC Poste</option>
                                                            <option value="Smartphone" @if ($produit->fonction == "Smartphone") selected @endif>Smartphone</option>
                                                            <option value="Tablette" @if ($produit->fonction == "Tablette") selected @endif>Tablette</option>
                                                      </select>
                                                      @error('categorie')
                                                      <span class="text-danger d-block">{{ $message }}</span>
                                                      @enderror
                                                </div>
                                          </div>
                                          <button type="reset" class="btn btn-danger">Annuler</button>
                                          <button type="submit" class="btn btn-primary">Enregitrer</button>
                                    </form>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</div>

@endsection
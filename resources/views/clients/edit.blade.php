@extends('master')
@section('title','client')
@section('content')

<a href="{{route('clients.index')}}" class="mb-3" style="font-size: xx-large; cursor:pointer;">
      <span>
            <i class="ti ti-arrow-left"></i>
            Back
      </span>
</a>
<div class="container-fluid">
      <div class="container-fluid">
            <div class="card">
                  <div class="card-body">
                        <h5 class="card-title fw-semibold mb-4">edite Client : {{$client->nom . ' '. $client->prenom}}</h5>
                        <div class="card">
                              <div class="card-body">
                                    <form action="{{route('clients.update' , $client->id)}}" method="post">
                                          @csrf
                                          @method('PUT')
                                          <div class="row mb-3">
                                                <div class="col-6">
                                                      <label for="nom" class="form-label">Nom</label>
                                                      <input type="text" class="form-control" id="nom" name="nom" value="{{$client->nom}}" placeholder="Falah">
                                                      @error('nom')
                                                      <div class="form-text text-danger d-block">{{ $message }}</div>
                                                      @enderror
                                                </div>
                                                <div class="col-6">
                                                      <label for="prenom" class="form-label">Prenom</label>
                                                      <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Anas" value="{{$client->prenom}}">
                                                      @error('prenom')
                                                      <div class="form-text text-danger d-block">{{ $message }}</div>
                                                      @enderror
                                                </div>
                                          </div>

                                          <div class="col-6">
                                                <label for="sexe" class="form-label">Sexe <span class="text-danger">*</span></label><br>
                                                <div class="form-check form-check-inline">
                                                      <input class="form-check-input" type="radio" name="sexe" id="sexe" value="M" @if($client->sexe =='M' ) checked @endif>
                                                      <label class="form-check-label" for="sexe">Homme</label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                      <input class="form-check-input" type="radio" name="sexe" id="sexe" value="F" @if($client->sexe =='F' ) checked @endif>
                                                      <label class="form-check-label" for="genre">Femme</label>
                                                </div>
                                                @error('sexe')
                                                <span class="text-danger d-block">{{ $message }}</span>
                                                @enderror
                                          </div>
                                          <div class="mb-3">
                                                <label for="tel" class="form-label">Telephone</label>
                                                <input type="tel" class="form-control" id="tel" name="tel" value="{{$client->tel}}" placeholder="+212 123 456 789">
                                                @error('tel')
                                                <div class="form-text text-danger d-block">{{ $message }}</div>
                                                @enderror
                                          </div>
                                          <div class="mb-3">
                                                <label for="email" class="form-label">Email address</label>
                                                <input type="email" class="form-control" id="email" name="email" value="{{$client->email}}" placeholder="email@exemple.com">
                                                @error('email')
                                                <div class="form-text text-danger d-block">{{ $message }}</div>
                                                @enderror
                                          </div>
                                          <div class="mb-3">
                                                <label for="fonction" class="form-label">Fonction<span class="text-danger">*</span></label>
                                                <select name="fonction" id="fonction" class="form-control">
                                                      <option value="T" @if ($client->fonction == "T") selected @endif >T</option>
                                                      <option value="TS" @if ($client->fonction == "TS") selected @endif >TS</option>
                                                      <option value="Ingenieur" @if ($client->fonction == "Ingenieur") selected @endif >Ingenieur</option>
                                                      <option value="Médecin" @if ($client->fonction == "Médecin") selected @endif >Médecin</option>
                                                      <option value="Pilot" @if ($client->fonction == "Pilot") selected @endif >Pilot</option>
                                                </select>
                                                @error('fonction')
                                                <span class="text-danger d-block">{{ $message }}</span>
                                                @enderror
                                          </div>
                                          <button type="reset" class="btn btn-danger">Annuler</button>
                                          <button type="submit" class="btn btn-primary">Enregistrer</button>
                                    </form>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</div>

@endsection
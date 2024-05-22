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
                <h5 class="card-title fw-semibold mb-4">New Client</h5>
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('clients.store')}}" method="post">
                            @csrf
                            @method('POST')
                            <div class="row mb-3">
                                <div class="col-6">
                                    <label for="nom" class="form-label">Nom</label>
                                    <input type="text" class="form-control" id="nom" name="nom" value="{{old('nom')}}" placeholder="Falah">
                                    @error('nom')
                                    <div class="form-text text-danger d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label for="prenom" class="form-label">Prenom</label>
                                    <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Anas" value="{{old('prenom')}}">
                                    @error('prenom')
                                    <div class="form-text text-danger d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-6">
                                <label for="sexe" class="form-label">Sexe <span class="text-danger">*</span></label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="sexe" id="sexe" value="M" @if(old('sexe')=='M' ) checked @endif>
                                    <label class="form-check-label" for="sexe">Homme</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="sexe" id="sexe" value="F" @if(old('sexe')=='F' ) checked @endif>
                                    <label class="form-check-label" for="genre">Femme</label>
                                </div>
                                @error('sexe')
                                <span class="text-danger d-block">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="tel" class="form-label">Telephone</label>
                                <input type="tel" class="form-control" id="tel" name="tel" value="{{old('tel')}}" placeholder="+212 123 456 789">
                                @error('tel')
                                <div class="form-text text-danger d-block">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" placeholder="email@exemple.com">
                                @error('email')
                                <div class="form-text text-danger d-block">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="fonction" class="form-label">Fonction<span class="text-danger">*</span></label>
                                <select name="fonction" id="fonction" class="form-control">
                                    <option value="T">T</option>
                                    <option value="TS">TS</option>
                                    <option value="Ingenieur">Ingenieur</option>
                                    <option value="Médecin">Médecin</option>
                                    <option value="Pilot">Pilot</option>
                                </select>
                                @error('fonction')
                                <span class="text-danger d-block">{{ $message }}</span>
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
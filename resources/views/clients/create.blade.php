@extends('master')
@section('title','clients')
@section('heading', ' New clients')
@section('content')
<div class="bg-light py-3 py-md-5">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-12 col-md-11 col-lg-8 col-xl-7 col-xxl-6">
                <div class="bg-white p-4 p-md-5 rounded shadow-sm">
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-5">
                                <h2 class="h3">New Clients</h2>
                            </div>
                        </div>
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <p>{{ $error }}</p>
                                @endforeach
                        </div>
                    @endif
                    <form action="{{route('clients.store')}}" method="post">
                        @csrf
                        @method('POST')
                        <div class="row gy-3 gy-md-4 overflow-hidden">
                            <div class="col-12">
                                <label for="nom" class="form-label">Nom <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom" value="{{old('nom')}}">
                                @error('nom')
                                    <span class="text-danger d-block">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="prenom" class="form-label">Prenom <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Prenom" value="{{old('prenom')}}">
                                @error('prenom')
                                    <span class="text-danger d-block">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="sexe" class="form-label">Sexe <span class="text-danger">*</span></label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="sexe" id="sexe" value="M" @if(old('sexe') == 'M') checked @endif>
                                    <label class="form-check-label" for="sexe">Homme</label>
                                </div>
                                
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="sexe" id="sexe" value="F" @if(old('sexe') == 'F') checked @endif>
                                    <label class="form-check-label" for="genre" >Femme</label>
                                </div>
                                @error('sexe')
                                    <span class="text-danger d-block">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="email" id="email" placeholder="Date de naissance" value="{{old('email')}}">
                                @error('email')
                                    <span class="text-danger d-block">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="tel" class="form-label">Telephone <span class="text-danger">*</span></label>
                                <input type="tel" class="form-control" name="tel" id="tel" placeholder="tel" value="{{old('tel')}}">
                                @error('tel')
                                    <span class="text-danger d-block">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12">
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
                            <div class="col-12">
                                <div class="d-grid">
                                    <button class="btn btn-lg btn-primary" type="submit">Add</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('back')
<h3>
    <a class="details" href="{{route('clients.index')}}" title="details" data-toggle="tooltip">
        <i class="material-icons">&#xE5C4;</i>
        Back
    </a>
</h3>
@endsection
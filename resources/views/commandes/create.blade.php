@extends('master')
@section('title','commande')
@section('content')

<a href="{{route('commandes.index')}}" class="mb-3" style="font-size: xx-large; cursor:pointer;">
    <span>
        <i class="ti ti-arrow-left"></i>
        Back
    </span>
</a>
<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">New Commande</h5>
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('commandes.store')}}" method="post">
                            @csrf
                            @method('POST')
                            <div class="row mb-3">
                                <div class="col-6">
                                    <label for=" dateCmd" class="form-label">date de commande</label>
                                    <input type="date" class="form-control" id="dateCmd" name="dateCmd" value="{{old('dateCmd')}}">
                                    @error('dateCmd')
                                    <div class="form-text text-danger d-block">{{ $message }}</div>
                                    @enderror
                                </div>


                                <!-- <div class="col-6">
                                <label for=" etatCmd" class="form-label">Etat de Commande<span class="text-danger">*</span></label>
                                    <select name="etatCmd" id="etatCmd" class="form-control">
                                        <option value="En Cours">En Cours</option>
                                        <option value="Refusé">Refusé</option>
                                        <option value="Validé">Validé</option>
                                    </select>
                                    @error('fonction')
                                    <span class="text-danger d-block">{{ $message }}</span>
                                    @enderror
                                </div> -->

                                <div class="col-6 mb-3">
                                    <label for="client_id" class="form-label">Client<span class="text-danger">*</span></label>
                                    <select name="client_id" id="client_id" class="form-control">
                                        @foreach ($clients as $client)
                                        <option value="{{$client->id}}" @if( old('client_id')==$client->id) selected @endif >{{$client->nom }} {{$client->prenom}}</option>
                                        @endforeach
                                    </select>
                                    @error('client_id')
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
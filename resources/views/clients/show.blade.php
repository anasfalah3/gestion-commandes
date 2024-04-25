@extends('master')
@section('title','clients')
@section('heading', 'Client : ' . $client->nom . ' ' .$client->prenom . ' Details')
@section('content')
<div class="column">
      <h2><span>Informations : </span></h2>

      <table class="table table-bordered">
            <thead>
                  <tr>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Sexe</th>
                        <th>Telephone</th>
                        <th>Email</th>
                        <th>Fonction</th>
                        <th>created at</th>
                        <th>updated at</th>
                  </tr>
            </thead>
            <tbody>
                  <tr>
                        <td>{{$client->nom}}</td>
                        <td>{{$client->prenom}}</td>
                        <td>{{$client->sexe}}</td>
                        <td>{{$client->tel}}</td>
                        <td>{{$client->email}}</td>
                        <td>{{$client->fonction}}</td>
                        <td>{{$client->created_at}}</td>
                        <td>{{$client->updated_at}}</td>
                        
                  </tr>
            </tbody>
      </table>
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
@extends('master')
@section('title','client')
@section('heading','IT Store')
@section('content')
<div class="container-lg">
      <div class="table-responsive">
            <div class="table-wrapper">
                  <div class="table-title">
                        <div class="row">
                              <div class="col-sm-8">
                                    <h2>Liste de <b>Client</b></h2>
                              </div>
                              <div class="col-sm-4">
                                    <a href="{{route('clients.create')}}" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</a>
                              </div>
                        </div>
                  </div>
                  @if (session('success'))
                        <div class="alert alert-success">
                              <span>{{ session('success') }}</span>
                        </div>
                  @endif
                  <table class="table table-bordered">
                        <thead>
                              <tr>
                                    <th>nom</th>
                                    <th>prenom</th>
                                    <th>Actions</th>
                              </tr>
                        </thead>
                        <tbody>
                              @if (count($clients)>0)
                              @foreach ( $clients as $client )
                              <tr>
                                    <td>{{$client->nom}}</td>
                                    <td>{{$client->prenom}}</td>
                                    <td style="width: 130px;">
                                          <a class="details" href="{{route('clients.show', $client->id)}}" title="details" data-toggle="tooltip"><i class="material-icons">&#xE88E;</i></a>
                                          <a class="edit" href="{{route('clients.edit', $client->id)}}" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                          <form action="{{route('clients.destroy',$client->id)}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" onclick="return confirm('voulez vous supprimer ce client')" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></button>
                                          </form>
                                    </td>
                              </tr>
                              @endforeach
                              @else
                                  <tr style="text-align: center">
                                    <td colspan="3">
                                          Aucune Client Trouve
                                    </td>
                                  </tr>
                              @endif


                        </tbody>
                  </table>
            </div>
      </div>
</div>
@endsection
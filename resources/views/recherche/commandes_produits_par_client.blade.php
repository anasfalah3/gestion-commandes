@extends('master')
@section('title','recherch')
@section('content')


<div class="container-fluid">
      <div class="container-fluid">
            <div class="card">
                  <div class="card-body">
                        <form action="{{route('recherche.commandes_produits_par_client')}}" method="post">
                              @csrf
                              @method('POST')
                              <div class="row mb-3">
                                    <div class="col-12 mb-3">
                                          <label for="client_id" class="form-label">Recherch by Client</label>
                                          <select name="client_id" id="client_id" class="form-control">
                                                @foreach ($clients as $client)
                                                <option value="{{$client->id}}" @if( old('client_id')==$client->id) selected @endif >{{$client->tel }} ({{$client->nom }} {{$client->prenom}}) </option>
                                                @endforeach
                                          </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Rechercher</button>
                              </div>
                        </form>
                  </div>
            </div>
            @isset($commandesClient)
            <div class="card">
                  <div class="card-body">
                        <div class="table-responsive">
                              <table class="table text-nowrap mb-0 align-middle">
                                    <thead class="text-dark fs-4">
                                          <tr>
                                                <th class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-0">Date Commande</h6>
                                                </th>
                                                <th class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-0">Produits</h6>
                                                </th>
                                                <th class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-0">Etat Commande</h6>
                                                </th>

                                          </tr>
                                    </thead>
                                    <tbody>
                                          @if (count($commandesClient)>0)
                                          @foreach ( $commandesClient as $commande )
                                          <tr class="border-top">
                                                <td class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-1">{{$commande->dateCmd}}</h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                      <p class="fw-semibold mb-0">
                                                            @foreach ( $commande->produits as $produit )
                                                            {{$produit->nom}},
                                                            @endforeach
                                                      </p>
                                                </td>
                                                <td class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-1">{{$commande->etatCmd}}</h6>
                                                </td>
                                          </tr>
                                          @endforeach
                                          @endif
                                    </tbody>
                              </table>
                        </div>
                  </div>
            </div>

            @endisset
      </div>
</div>

@endsection
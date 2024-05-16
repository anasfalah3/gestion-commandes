@extends('master')
@section('title','recherch')
@section('content')

<div class="row">
      @if (session('success'))
      <div class="alert alert-success" role="alert">
            <span>{{ session('success') }}</span>
      </div>
      @endif
      <div class="col-lg-12 ">
            @if (count($clients)>0)
            @foreach ( $clients as $client )
            <div class="card w-100">
                  <div class="card-body p-4">
                        <div class="row">
                              <h5 class="col-10 card-title fw-semibold mb-4">Commandes de {{$client->nom ." ". $client->prenom}} : </h5>
                        </div>
                        <div class="table-responsive">
                              <table class="table table-hover text-nowrap mb-0 align-middle">
                                    <thead class="text-dark fs-4">
                                          <tr>
                                                <th class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-0">Date</h6>
                                                </th>
                                                <th class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-0">Etat</h6>
                                                </th>
                                                <th class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-0">Produits</h6>
                                                </th>
                                          </tr>
                                    </thead>
                                    <tbody>
                                          @if (count($client->commandes)>0)
                                          @foreach ( $client->commandes as $commande )
                                          <tr class="border-top">
                                                <td class="border-bottom-0">
                                                      <p class="fw-semibold mb-0">{{$commande->dateCmd}}</p>
                                                </td>
                                                <td class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-1">{{$commande->etatCmd}}</h6>
                                                </td>
                                                @if (count($commande->produits)>0)
                                                <td class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-1">
                                                            @foreach ( $commande->produits as $produit )
                                                            {{$produit->nom}},
                                                            @endforeach
                                                      </h6>
                                                </td>
                                                @endif
                                          </tr>
                                          @endforeach
                                          @else
                                          <tr class="text-center">
                                                <td class="border-bottom-0" colspan="5">
                                                      Aucune Commande Trouve
                                                </td>
                                          </tr>
                                          @endif
                                    </tbody>
                              </table>
                        </div>
                  </div>
            </div>
            @endforeach
            @endif
      </div>
</div>

@endsection
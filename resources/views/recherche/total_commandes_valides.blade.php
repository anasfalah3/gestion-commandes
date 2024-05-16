@extends('master')
@section('title','recherch')
@section('content')

<div class="row">
      @if (session('success'))
      <div class="alert alert-success" role="alert">
            <span>{{ session('success') }}</span>
      </div>
      @endif
      <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
                  <div class="card-body p-4">
                        <div class="row">
                              <h5 class="col-10 card-title fw-semibold mb-4">Liste des Commandes validé</h5>
                        </div>
                        <div class="table-responsive">
                              <table class="table table-hover text-nowrap mb-0 align-middle">
                                    <thead class="text-dark fs-4">
                                          <tr>
                                                <th class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-0">ID</h6>
                                                </th>
                                                <th class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-0">Date de commande</h6>
                                                </th>
                                                <th class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-0">Etat de commande</h6>
                                                </th>
                                                <th class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-0">Prix Total</h6>
                                                </th>
                                          </tr>
                                    </thead>
                                    <tbody>
                                          @if (count($commandesValide)>0)
                                          @foreach ( $commandesValide as $commande )
                                          <tr class="border-top">
                                                <td class="border-bottom-0">
                                                      <p class="fw-semibold mb-0">{{$commande->id}}</p>
                                                </td>
                                                <td class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-1">{{$commande->dateCmd}}</h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-1">{{$commande->etatCmd}}</>
                                                </td>
                                                <td class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-1">{{$commande->produits->sum('prix')}} DH</>
                                                </td>
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
      </div>
</div>

@endsection
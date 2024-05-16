@extends('master')
@section('title','commande')
@section('content')
<div class="row">
      <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
                  <div class="card-body p-4">
                        <div class="row">
                              <h5 class="card-title fw-semibold mb-4">Informations du commande N°{{$commande->id}}</h5>
                        </div>
                        <div class="table-responsive">
                              <table class="table text-nowrap mb-0 align-middle">
                                    <thead class="text-dark fs-4">
                                          <tr>
                                                <th class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-0">ID</h6>
                                                </th>
                                                <th class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-0">date de commande</h6>
                                                </th>
                                                <th class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-0">etat de commande</h6>
                                                </th>
                                                <th class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-0">Nom Complete</h6>
                                                </th>
                                                <th class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-0">Telephone</h6>
                                                </th>
                                                <th class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-0">Email</h6>
                                                </th>
                                          </tr>
                                    </thead>
                                    <tbody>
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
                                                      <h6 class="fw-semibold mb-1">{{$commande->client->nom}} {{$commande->client->prenom}}</h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-1">{{$commande->client->tel}}</h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-1">{{$commande->client->email}}</h6>
                                                </td>
                                          </tr>
                                    </tbody>
                              </table>
                        </div>
                  </div>
            </div>
      </div>
</div>

@endsection
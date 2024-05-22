@extends('master')
@section('title','client')
@section('content')
<a href="{{route('clients.index')}}" class="mb-3" style="font-size: xx-large; cursor:pointer;">
      <span>
            <i class="ti ti-arrow-left"></i>
            Back
      </span>
</a>
<div class="row">
      <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
                  <div class="card-body p-4">
                        <div class="row">
                              <h5 class="card-title fw-semibold mb-4">Informations : {{$client->nom . " ". $client->prenom}}</h5>
                        </div>
                        <div class="table-responsive">
                              <table class="table text-nowrap mb-0 align-middle">
                                    <thead class="text-dark fs-4">
                                          <tr>
                                                <th class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-0">ID</h6>
                                                </th>
                                                <th class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-0">nom</h6>
                                                </th>
                                                <th class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-0">Prenom</h6>
                                                </th>
                                                <th class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-0">Sexe</h6>
                                                </th>
                                                <th class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-0">Telephone</h6>
                                                </th>
                                                <th class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-0">Email</h6>
                                                </th>
                                                <th class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-0">Fonction</h6>
                                                </th>
                                                <th class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-0">Created at</h6>
                                                </th>
                                          </tr>
                                    </thead>
                                    <tbody>
                                          <tr class="border-top">
                                                <td class="border-bottom-0">
                                                      <p class="fw-semibold mb-0">{{$client->id}}</p>
                                                </td>
                                                <td class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-1">{{$client->nom}}</h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-1">{{$client->prenom}}</>
                                                </td>
                                                <td class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-1">{{$client->sexe}}</h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-1">{{$client->tel}}</h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-1">{{$client->email}}</h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-1">{{$client->fonction}}</h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-1">{{$client->created_at}}</h6>
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
@extends('master')
@section('title','produit')
@section('content')
<div class="row">
      <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
                  <div class="card-body p-4">
                        <div class="row">
                              <h5 class="card-title fw-semibold mb-4">Informations : {{$produit->nom}}</h5>
                        </div>
                        <div class="table-responsive">
                              <table class="table text-nowrap mb-0 align-middle">
                                    <thead class="text-dark fs-4">
                                          <tr>
                                                <th class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-0">ID</h6>
                                                </th>
                                                <th class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-0">Ref</h6>
                                                </th>
                                                <th class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-0">Nom</h6>
                                                </th>
                                                <th class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-0">Prix</h6>
                                                </th>
                                                <th class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-0">Categorie</h6>
                                                </th>
                                                <th class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-0">Created at</h6>
                                                </th>
                                          </tr>
                                    </thead>
                                    <tbody>
                                          <tr class="border-top">
                                                <td class="border-bottom-0">
                                                      <p class="fw-semibold mb-0">{{$produit->id}}</p>
                                                </td>
                                                <td class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-1">{{$produit->ref}}</h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-1">{{$produit->nom}}</>
                                                </td>
                                                <td class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-1">{{$produit->prix}}</h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-1">{{$produit->categorie}}</h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-1">{{$produit->created_at}}</h6>
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
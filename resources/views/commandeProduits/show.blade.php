@extends('master')
@section('title','client')
@section('content')
<div class="row">
      <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
                  <div class="card-body p-4">
                        <div class="row">
                              <h5 class="card-title fw-semibold mb-4">Informations d'affectation </h5>
                        </div>
                        <div class="table-responsive">
                              <table class="table text-nowrap mb-0 align-middle">
                                    <thead class="text-dark fs-4">
                                          <tr>
                                                <th class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-0">produit</h6>
                                                </th>
                                                <th class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-0">Buyer</h6>
                                                </th>
                                                <th class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-0">date</h6>
                                                </th>
                                                <th class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-0">Qte</h6>
                                                </th>
                                                <th class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-0">Prix</h6>
                                                </th>
                                                <th class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-0">Etat </h6>
                                                </th>

                                          </tr>
                                    </thead>
                                    <tbody>
                                          <tr class="border-top">
                                                <td class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-1">{{$commandeProduit->nomProduit}}</h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-1">{{$commandeProduit->buyer}}</h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                      <p class="fw-semibold mb-0">{{$commandeProduit->dateCmd}}</p>
                                                </td>
                                                <td class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-1">{{$commandeProduit->QteCmd}}</>
                                                </td>
                                                <td class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-1">{{$commandeProduit->prix}}</>
                                                </td>
                                                <td class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-1">{{$commandeProduit->etatCmd}}</>
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
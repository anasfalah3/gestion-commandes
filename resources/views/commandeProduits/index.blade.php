@extends('master')
@section('title','affectation')
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
                              <h5 class="col-10 card-title fw-semibold mb-4">Liste des affectations</h5>
                              <div class="col">
                                    <a href="{{route('commandeProduits.create')}}" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</a>
                              </div>
                        </div>
                        <div class="table-responsive">
                              <table class="table table-hover text-nowrap mb-0 align-middle">
                                    <thead class="text-dark fs-4">
                                          <tr>
                                                <th class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-0">produit</h6>
                                                </th>
                                                <th class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-0">date de commande</h6>
                                                </th>
                                                <th class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-0">Qte de Commande</h6>
                                                </th>
                                                <th class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-0">Actions</h6>
                                                </th>
                                          </tr>
                                    </thead>
                                    <tbody>
                                          @if (count($commandeProduits)>0)
                                          @foreach ( $commandeProduits as $commandeProduit )
                                          <tr class="border-top">
                                                <td class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-1">{{$commandeProduit->nom}}</h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                      <p class="fw-semibold mb-0">{{$commandeProduit->dateCmd}}</p>
                                                </td>
                                                <td class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-1">{{$commandeProduit->QteCmd}}</>
                                                </td>
                                                <td class="border-bottom-0">
                                                      <div class="d-flex align-items-center gap-2">
                                                            <a href="{{route('commandeProduits.show', [
                                                                                                            'commande_id'=> $commandeProduit->commande_id,
                                                                                                            'produit_id'=> $commandeProduit->produit_id  
                                                                                                      ]
                                                                        )}}" class="badge bg-primary rounded-3 fw-semibold">
                                                                  <span>
                                                                        <i class="ti ti-eye"></i>
                                                                  </span>
                                                            </a>
                                                            <a href="{{route('commandeProduits.edit', [
                                                                                                            'commande_id'=> $commandeProduit->commande_id,
                                                                                                            'produit_id'=> $commandeProduit->produit_id  
                                                                                                      ]
                                                                        )}}" class="badge bg-warning rounded-3 fw-semibold">
                                                                  <span>
                                                                        <i class="ti ti-edit"></i>
                                                                  </span>
                                                            </a>
                                                            <form action="{{route('commandeProduits.destroy',[
                                                                                                                  'commande_id'=> $commandeProduit->commande_id,
                                                                                                                  'produit_id'=> $commandeProduit->produit_id  
                                                                                                            ]
                                                                        )}}" method="post">
                                                                  @csrf
                                                                  @method('delete')
                                                                  <button type="submit" onclick="return confirm('voulez vous supprimer ce client')" class="badge bg-danger rounded-3 fw-semibold" style="border: none;">
                                                                        <span>
                                                                              <i class="ti ti-trash"></i>
                                                                        </span>
                                                                  </button>
                                                            </form>
                                                      </div>
                                                </td>
                                          </tr>
                                          @endforeach
                                          @else
                                          <tr class="text-center">
                                                <td class="border-bottom-0" colspan="5">
                                                      Aucune Client Trouve
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
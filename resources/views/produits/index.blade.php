@extends('master')
@section('title','Produits')
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
                              <h5 class="col-10 card-title fw-semibold mb-4">Liste des Produits</h5>
                              <div class="col">
                                    <a href="{{route('produits.create')}}" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</a>
                              </div>
                        </div>
                        <div class="table-responsive">
                              <table class="table table-hover text-nowrap mb-0 align-middle">
                                    <thead class="text-dark fs-4">
                                          <tr>
                                                <th class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-0">ID</h6>
                                                </th>
                                                <th class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-0">Nom</h6>
                                                </th>
                                                <th class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-0">Prix</h6>
                                                </th>
                                                <th class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-0">Actions</h6>
                                                </th>
                                          </tr>
                                    </thead>
                                    <tbody>
                                          @if (count($produits)>0)
                                          @foreach ( $produits as $produit )
                                          <tr class="border-top">
                                                <td class="border-bottom-0">
                                                      <p class="fw-semibold mb-0">{{$produit->id}}</p>
                                                </td>
                                                <td class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-1">{{$produit->nom}}</h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-1">{{$produit->prix}} DH</>
                                                </td>
                                                <td class="border-bottom-0">
                                                      <div class="d-flex align-items-center gap-2">
                                                            <a href="{{route('produits.show', $produit->id)}}" class="badge bg-primary rounded-3 fw-semibold">
                                                                  <span>
                                                                        <i class="ti ti-eye"></i>
                                                                  </span>
                                                            </a>
                                                            <a href="{{route('produits.edit', $produit->id)}}" class="badge bg-warning rounded-3 fw-semibold">
                                                                  <span>
                                                                        <i class="ti ti-edit"></i>
                                                                  </span>
                                                            </a>
                                                            <form action="{{route('produits.destroy',$produit->id)}}" method="post">
                                                                  @csrf
                                                                  @method('delete')
                                                                  <button type="submit" onclick="return confirm('voulez vous supprimer ce produit')" class="badge bg-danger rounded-3 fw-semibold" style="border: none;">
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
                                                      Aucune Produit Trouve
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
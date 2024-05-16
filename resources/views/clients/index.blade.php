@extends('master')
@section('title','client')
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
                              <h5 class="col-10 card-title fw-semibold mb-4">Liste des Client</h5>
                              <div class="col">
                                    <a href="{{route('clients.create')}}" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</a>
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
                                                      <h6 class="fw-semibold mb-0">nom</h6>
                                                </th>
                                                <th class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-0">Prenom</h6>
                                                </th>
                                                <th class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-0">Email</h6>
                                                </th>
                                                <th class="border-bottom-0">
                                                      <h6 class="fw-semibold mb-0">Actions</h6>
                                                </th>
                                          </tr>
                                    </thead>
                                    <tbody>
                                          @if (count($clients)>0)
                                          @foreach ( $clients as $client )
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
                                                      <h6 class="fw-semibold mb-1">{{$client->email}}</h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                      <div class="d-flex align-items-center gap-2">
                                                            <a href="{{route('clients.show', $client->id)}}" class="badge bg-primary rounded-3 fw-semibold">
                                                                  <span>
                                                                        <i class="ti ti-eye"></i>
                                                                  </span>
                                                            </a>
                                                            <a href="{{route('clients.edit', $client->id)}}" class="badge bg-warning rounded-3 fw-semibold">
                                                                  <span>
                                                                        <i class="ti ti-edit"></i>
                                                                  </span>
                                                            </a>
                                                            <form action="{{route('clients.destroy',$client->id)}}" method="post">
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
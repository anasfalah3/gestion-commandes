@extends('master')
@section('title','recherch')
@section('content')
<h5 class="col-10 card-title fw-semibold mb-4">Nombre des Commandes par Client</h5>

<div class="row">
      @if (session('success'))
      <div class="alert alert-success" role="alert">
            <span>{{ session('success') }}</span>
      </div>
      @endif
      <div class="col-lg-12 ">
            <div class="row">
                  @if (count($clients)>0)
                  @foreach ( $clients as $client )
                  <div class="col-3 item">
                        <div class="card border-0 zoom-in bg-primary-subtle shadow-none">
                              <div class="card-body">
                                    <div class="text-center">
                                          <img src="{{asset('assets/images/pictures/male.png')}}" width="50" height="50" class="mb-3" alt="modernize-img">
                                          <p class="fw-semibold fs-3 text-primary mb-1">
                                                {{$client->nom}} {{$client->prenom}}
                                          </p>
                                          <h5 class="fw-semibold text-primary mb-0">
                                                {{count($client->commandes)}}
                                                <span>
                                                      <i class="ti ti-shopping-cart"></i>
                                                </span>
                                          </h5>
                                    </div>
                              </div>
                        </div>
                  </div>
                  @endforeach
                  @endif
            </div>
      </div>
</div>

@endsection
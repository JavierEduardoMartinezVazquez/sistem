@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">

                <div class="card group">
                    <div class="card-header">
                        Equipos
                    </div>
                <div class="card-body">
                    <div class="row">
                        @forelse ($equipos as $equipo)
                        <div class="col-md-4" style="margin-bottom: 15px">
                            <div class="card" style="height: 100%">
                                <div class="card-body">
                                  <h5 class="card-title">Cliente: {{$equipo->cliente->nombre}}</h5>
                                  <p class="card-text">{{$equipo->descripcion}}</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                  <li class="list-group-item">Estado: {{$equipo->estatus}}</li>
                                </ul>
                                <div class="card-footer">
                                  <a href="#" class="btn btn-secondary">Ver más</a>
                                  <a href="#" class="btn btn-secondary">Editar</a>
                                  <a href="#" class="btn btn-dark">Eliminar</a>
                                </div>
                              </div>
                        </div>
                        @empty
                        <div class="alert alert-secondary" role="alert">
                            No existen datos que se puedan mostar
                          </div>
                        @endforelse


                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection

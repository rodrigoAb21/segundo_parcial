@extends('layouts.index')

@section('contenido')
    <div class="row">
        <div class="col-12 m-t-30">
            <div class="card-columns">

                <div class="card text-center p-3" >
                    <div class="card-body">
                        <h4 class="card-title">Usuarios</h4>
                        <p class="card-text"><i class="fa fa-user-tie fa-3x"></i></p>
                        <a class="btn btn-info btn-block" href="{{url('usuarios')}}"> Ver </a>
                    </div>
                </div>

                <div class="card text-center p-3" >
                    <div class="card-body">
                        <h4 class="card-title">Juzgados</h4>
                        <p class="card-text"><i class="fa fa-gavel fa-3x"></i></p>
                        <a class="btn btn-info btn-block" href="{{url('juzgados')}}"> Ver </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

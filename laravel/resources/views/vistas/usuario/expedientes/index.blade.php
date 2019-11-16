@extends('layouts.usuario')

@section('contenido')
    <div class="row pt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="pb-2">Expedientes
                        <div class="float-right">
                            <a class="btn btn-success" href="{{url('usuario/expedientes/create')}}">
                                <i class="fa fa-plus"></i> Nuevo
                            </a>
                        </div>
                    </h3>
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered color-table info-table">
                            <thead>
                            <tr>

                                <th>NUREJ</th>
                                <th>WEB_ID</th>
                                <th>RECEPCION</th>
                                <th>TIPO PROCESO</th>
                                <th>MATERIA</th>
                                <th>FOJAS</th>
                                <th class="text-right">OPCIONES</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($expedientes as $expediente)
                                <tr>

                                    <td>{{$expediente -> nurej}}</td>
                                    <td>{{$expediente -> web_id}}</td>
                                    <td>{{Carbon\Carbon::parse($expediente -> fecha_recepcion)->format('d/M/Y')}}</td>
                                    <td>{{$expediente -> tipoProceso->nombre}}</td>
                                    <td>{{$expediente -> materia}}</td>
                                    <td>{{$expediente -> nro_fojas}}</td>
                                    <td class="text-right ">
                                        <a href="{{url('usuario/expedientes/'.$expediente->id.'/fojas')}}">
                                            <button class="btn btn-info">
                                                <i class="fa fa-copy"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$expedientes->links('pagination.default')}}
                    </div>
                    <a href="{{url('usuario')}}" class="btn btn-warning">Atras</a>
                </div>
            </div>
        </div>
    </div>
    @include('vistas.modal')
@endsection
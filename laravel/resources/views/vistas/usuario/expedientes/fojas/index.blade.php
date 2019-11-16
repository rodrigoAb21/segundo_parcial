@extends('layouts.usuario')

@section('contenido')
    <div class="row pt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="pb-2">Fojas del expediente: {{$expediente->nurej}}</h3>
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered color-table info-table">
                            <thead>
                            <tr>
                                <th>FECHA</th>
                                <th>DESCRIPCION</th>
                                <th>TIPO</th>
                                <th class="text-right">OPCIONES</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($fojas as $foja)
                                <tr>

                                    <td>{{Carbon\Carbon::parse($foja -> fecha)->format('d/M/Y')}}</td>
                                    <td>{{$foja -> descripcion}}</td>
                                    <td>{{$foja -> tipo}}</td>
                                    <td class="text-right ">
                                        <a href="{{url('usuario/expedientes/'.$expediente->id.'/fojas/'.$foja->id)}}">
                                            <button class="btn btn-info">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <br>
                    <a href="{{url('usuario/expedientes')}}" class="btn btn-warning">Atras</a>
                </div>
            </div>
        </div>
    </div>
    @include('vistas.modal')
@endsection

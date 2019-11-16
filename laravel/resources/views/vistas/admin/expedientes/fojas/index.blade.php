@extends('layouts.index')

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
                                        <a href="{{url('administrador/expedientes/'.$expediente->id.'/fojas/'.$foja->id)}}">
                                            <button class="btn btn-info">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </a>
                                        <button type="button" class="btn btn-danger" onclick="modalEliminar('{{$foja -> descripcion}}', '{{url('administrador/expedientes/'.$expediente->id.'/fojas/'.$foja->id)}}')">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <br>
                    <a href="{{url('administrador/expedientes')}}" class="btn btn-warning">Atras</a>
                </div>
            </div>
        </div>
    </div>
    @include('vistas.modal')
    @push('scripts')
        <script>

            function modalEliminar(nombre, url) {
                $('#modalEliminarForm').attr("action", url);
                $('#metodo').val("delete");
                $('#modalEliminarTitulo').html("Eliminar Expediente");
                $('#modalEliminarEnunciado').html("Realmente desea eliminar la expedinete: " + nombre + "?");
                $('#modalEliminar').modal('show');
            }

        </script>

    @endpush()
@endsection

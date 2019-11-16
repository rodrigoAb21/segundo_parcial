@extends('layouts.index')

@section('contenido')
    <div class="row pt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="pb-2">
                        Ver detalle
                    </h3>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label><b>FECHA</b></label>
                                    <p>{{$foja->fecha}}</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label><b>TIPO</b></label>
                                    <p>{{$foja->tipo}}</p>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label><b>DESCRIPCION</b></label>
                                    <input class="form-control" readonly type="text" value="{{$foja->descripcion}}">
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label><b>CONTENIDO</b></label>
                                    <textarea readonly rows="8" class="form-control">{{$foja->contenido}}</textarea>
                                </div>
                            </div>

                        </div>

                    <a href="{{url('administrador/expedientes/'.$foja->expediente_id.'/fojas')}}" class="btn btn-warning">Atras</a>
                </div>
            </div>
        </div>
    </div>
@endsection

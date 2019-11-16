@extends('layouts.index')

@section('contenido')
    <div class="row pt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="pb-2">
                        Detalle Expediente: {{$expediente->id}}
                    </h3>

                    
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>NUREJ</label>
                                    <input readonly
                                           type="number"
                                           class="form-control"
                                           value="{{$expediente->nurej}}"
                                           >
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>WEB_ID</label>
                                    <input readonly
                                           type="text"
                                           class="form-control"
                                           value="{{$expediente->web_id}}"
                                           >
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Descripcion</label>
                                    <input readonly
                                            type="text"
                                            class="form-control"
                                            value="{{$expediente->descripcion}}"
                                            >
                                </div>
                            </div>


                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Materia</label>
                                    <input readonly
                                           type="text"
                                           class="form-control"
                                           value="{{$expediente->materia}}"
                                           >
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Procedimiento</label>
                                    <input readonly
                                           type="text"
                                           class="form-control"
                                           value="{{$expediente->procedimiento}}"
                                           >
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Tipo</label>
                                    <input readonly
                                           type="text"
                                           class="form-control"
                                           value="{{$tipo->nombre}}"
                                           >
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Juzgado</label>
                                    <input readonly
                                           type="text"
                                           class="form-control"
                                           value="{{$juzgado->nombre}} - {{$juzgado->departamento}}"
                                           >
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Juez</label>
                                    <input readonly
                                           type="text"
                                           class="form-control"
                                           value="{{$juez->nombre}}"
                                           >
                                </div>
                            </div>
                        </div>

                        <br>
                        <hr>
                        <br>

                        <div class="row">

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Demandante</label>
                                    <input readonly
                                           type="text"
                                           class="form-control"
                                           value="{{$dmt->nombre}}"
                                           >
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Demandado</label>
                                    <input readonly
                                           type="text"
                                           class="form-control"
                                           value="{{$dmd->nombre}}"
                                           >
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Rep. Legal Demandante</label>
                                    <input readonly
                                           type="text"
                                           class="form-control"
                                           value="{{$rep_dmt->nombre}}"
                                           >
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Rep. Legal Demandado</label>
                                    <input readonly
                                           type="text"
                                           class="form-control"
                                           value="{{$rep_dmd->nombre}}"
                                           >
                                </div>
                            </div>

                        </div>
                        <a href="{{url('usuario/expedientes')}}" class="btn btn-warning">Atras</a>

                </div>
            </div>
        </div>
    </div>
@endsection

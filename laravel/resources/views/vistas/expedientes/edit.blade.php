@extends('layouts.index')

@section('contenido')
    <div class="row pt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="pb-2">
                        Editar Expediente: {{$expediente->id}}
                    </h3>

                    <form method="POST" action="{{url('expedientes/'.$expediente->id)}}" autocomplete="off">
                        {{csrf_field()}}
                        {{method_field('PATCH')}}
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>NUREJ</label>
                                    <input required
                                           type="number"
                                           class="form-control"
                                           value="{{$expediente->nurej}}"
                                           name="nurej">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>WEB_ID</label>
                                    <input required
                                           type="text"
                                           class="form-control"
                                           value="{{$expediente->web_id}}"
                                           name="web_id">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Descripcion</label>
                                    <input
                                            type="text"
                                            class="form-control"
                                            value="{{$expediente->descripcion}}"
                                            name="descripcion">
                                </div>
                            </div>


                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Materia</label>
                                    <select class="form-control" name="materia">
                                        @foreach($materias as $materia)
                                            @if($expediente->materia == $materia)
                                                <option selected value="{{$materia}}">{{$materia}}</option>
                                            @else
                                                <option value="{{$materia}}">{{$materia}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Procedimiento</label>
                                    <input required
                                           type="text"
                                           class="form-control"
                                           value="{{$expediente->procedimiento}}"
                                           name="procedimiento">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Tipo</label>
                                    <select class="form-control" name="tipo_proceso_id">
                                        @foreach($tipos as $tipo)
                                            @if($expediente->tipo_proceso_id == $tipo->id)
                                                <option selected value="{{$tipo->id}}">{{$tipo->nombre}}</option>
                                            @else
                                                <option value="{{$tipo->id}}">{{$tipo->nombre}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Juzgado</label>
                                    <select class="form-control" name="juzgado_id">
                                        @foreach($juzgados as $juzgado)
                                            @if($expediente->juzgado_id == $juzgado->id)
                                                <option selected value="{{$juzgado->id}}">{{$juzgado->nombre}} - {{$juzgado->departamento}}</option>
                                            @else
                                                <option value="{{$juzgado->id}}">{{$juzgado->nombre}} - {{$juzgado->departamento}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Juez</label>
                                    <select class="form-control" name="juez_id">
                                        @foreach($jueces as $juez)
                                            @if($expediente->juez_id == $juez->id)
                                                <option selected value="{{$juez->id}}">{{$juez->nombre}}</option>
                                            @else
                                                <option value="{{$juez->id}}">{{$juez->nombre}}</option>
                                            @endif
                                        @endforeach
                                    </select>
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
                                    <select class="form-control" name="dmt_id">
                                        @foreach($usuarios as $usuario)
                                            @if($expediente->dmt_id == $usuario->id)
                                                <option selected value="{{$usuario->id}}">{{$usuario->nombre}}</option>
                                            @else
                                                <option value="{{$usuario->id}}">{{$usuario->nombre}}</option>
                                            @endif

                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Demandado</label>
                                    <select class="form-control" name="dmd_id">
                                        @foreach($usuarios as $usuario)
                                            @if($expediente->dmd_id == $usuario->id)
                                                <option selected value="{{$usuario->id}}">{{$usuario->nombre}}</option>
                                            @else
                                                <option value="{{$usuario->id}}">{{$usuario->nombre}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Rep. Legal Demandante</label>
                                    <select class="form-control" name="rep_dmt_id">
                                        @foreach($abogados as $abogado)
                                            @if($expediente->rep_dmt_id == $abogado->id)
                                                <option selected value="{{$abogado->id}}">{{$abogado->nombre}}</option>
                                            @else
                                                <option value="{{$abogado->id}}">{{$abogado->nombre}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Rep. Legal Demandado</label>
                                    <select class="form-control" name="rep_dmd_id">
                                        @foreach($abogados as $abogado)
                                            @if($expediente->rep_dmd_id == $abogado->id)
                                                <option selected value="{{$abogado->id}}">{{$abogado->nombre}}</option>
                                            @else
                                                <option value="{{$abogado->id}}">{{$abogado->nombre}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        </div>
                        <a href="{{url('expedientes')}}" class="btn btn-warning">Atras</a>
                        <button type="submit" class="btn btn-info">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

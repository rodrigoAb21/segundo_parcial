@extends('layouts.index')

@section('contenido')
    <div class="row pt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="pb-2">
                        Nuevo Expediente
                    </h3>

                    <form method="POST" action="{{url('administrador/expedientes')}}" autocomplete="off">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>NUREJ</label>
                                    <input required
                                           type="number"
                                           class="form-control"
                                           value="{{old('nurej')}}"
                                           name="nurej">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>WEB_ID</label>
                                    <input required
                                           type="text"
                                           class="form-control"
                                           value="{{old('web_id')}}"
                                           name="web_id">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Descripcion</label>
                                    <input
                                            type="text"
                                            class="form-control"
                                            value="{{old('descripcion')}}"
                                            name="descripcion">
                                </div>
                            </div>


                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Materia</label>
                                    <select class="form-control" name="materia">
                                        @foreach($materias as $materia)
                                            <option value="{{$materia}}">{{$materia}}</option>
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
                                           value="{{old('procedimiento')}}"
                                           name="procedimiento">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Tipo</label>
                                    <select class="form-control" name="tipo_proceso_id">
                                        @foreach($tipos as $tipo)
                                            <option value="{{$tipo->id}}">{{$tipo->nombre}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Juzgado</label>
                                    <select class="form-control" name="juzgado_id">
                                        @foreach($juzgados as $juzgado)
                                            <option value="{{$juzgado->id}}">{{$juzgado->nombre}} - {{$juzgado->departamento}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Juez</label>
                                    <select class="form-control" name="juez_id">
                                        @foreach($jueces as $juez)
                                            <option value="{{$juez->id}}">{{$juez->nombre}}</option>
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
                                            <option value="{{$usuario->id}}">{{$usuario->nombre}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Demandado</label>
                                    <select class="form-control" name="dmd_id">
                                        @foreach($usuarios as $usuario)
                                            <option value="{{$usuario->id}}">{{$usuario->nombre}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Rep. Legal Demandante</label>
                                    <select class="form-control" name="rep_dmt_id">
                                        @foreach($abogados as $abogado)
                                            <option value="{{$abogado->id}}">{{$abogado->nombre}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Rep. Legal Demandado</label>
                                    <select class="form-control" name="rep_dmd_id">
                                        @foreach($abogados as $abogado)
                                            <option value="{{$abogado->id}}">{{$abogado->nombre}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>



                        </div>
                        <a href="{{url('administrador/expedientes')}}" class="btn btn-warning">Atras</a>
                        <button type="submit" class="btn btn-info">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

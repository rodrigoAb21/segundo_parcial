@extends('layouts.index')

@section('contenido')
    <div class="row pt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="pb-2">
                        Editar usuario: {{$usuario->id}}
                    </h3>

                    <form method="POST" action="{{url('administrador/usuarios/'.$usuario->id)}}" autocomplete="off">
                        {{csrf_field()}}
                        {{method_field('PATCH')}}
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input required
                                           type="text"
                                           class="form-control"
                                           value="{{$usuario->nombre}}"
                                           name="nombre">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>C.I.</label>
                                    <input
                                            type="text"
                                            class="form-control"
                                            value="{{$usuario->ci}}"
                                            name="ci">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>COD. Profesional</label>
                                    <input
                                            type="text"
                                            class="form-control"
                                            value="{{$usuario->codigo}}"
                                            name="codigo">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Telefono</label>
                                    <input required
                                           type="number"
                                           class="form-control"
                                           value="{{$usuario->telefono}}"
                                           name="telefono">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Tipo</label>
                                    <select class="form-control" name="tipo">
                                        @foreach($tipos as $tipo)
                                            @if($usuario->tipo == $tipo)
                                                <option selected value="{{$tipo}}">{{$tipo}}</option>
                                            @else
                                                <option value="{{$tipo}}">{{$tipo}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input required
                                           type="email"
                                           class="form-control"
                                           value="{{$usuario->email}}"
                                           name="email">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input
                                           type="password"
                                           class="form-control"
                                           value=""
                                           name="password">
                                </div>
                            </div>
                        </div>

                        <a href="{{url('administrador/usuarios')}}" class="btn btn-warning">Atras</a>
                        <button type="submit" class="btn btn-info">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

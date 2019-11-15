@extends('layouts.index')

@section('contenido')
    <div class="row pt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="pb-2">
                        Editar usuario: {{$juzgado->id}}
                    </h3>

                    <form method="POST" action="{{url('juzgados/'.$juzgado->id)}}" autocomplete="off">
                        {{csrf_field()}}
                        {{method_field('PATCH')}}
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input required
                                           type="text"
                                           class="form-control"
                                           value="{{$juzgado->nombre}}"
                                           name="nombre">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Departamento</label>
                                    <select name="departamento" class="form-control" required>
                                        @foreach($departamentos as $departamento)
                                            @if($juzgado->departamento == $departamento)
                                                <option selected value="{{$departamento}}">{{$departamento}}</option>
                                                @else
                                                <option value="{{$departamento}}">{{$departamento}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        </div>

                        <a href="{{url('juzgados')}}" class="btn btn-warning">Atras</a>
                        <button type="submit" class="btn btn-info">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

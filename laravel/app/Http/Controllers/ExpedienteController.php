<?php

namespace App\Http\Controllers;

use App\Expediente;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ExpedienteController extends Controller
{
    public function index(){
        return view('vistas.expedientes.index',
            [
                'expedientes' => Expediente::paginate(10),
            ]);
    }

    public function create(){
        return view('vistas.expedientes.create');
    }

    public function store(Request $request){
        $expediente = new Expediente();
        $expediente->nurej = $request['nurej'];
        $expediente->web_id = $request['web_id'];
        $expediente->fecha_recepcion = Carbon::now('America/La_Paz');
        $expediente->descripcion = $request['descripcion'];
        $expediente->materia = $request['materia'];
        $expediente->procedimiento = $request['procedimiento'];
        $expediente->nro_fojas = $request['nro_fojas'];
        $expediente->juez_id = $request['juez_id'];
        $expediente->juzgado_id = $request['juzgado_id'];
        $expediente->tipo_proceso_id = $request['tipo_proceso_id'];

        $expediente->save();

        return redirect('expedientes');

    }

    public function edit($id){
        return view('vistas.expedientes.edit', [
            'expediente' => Expediente::findOrFail($id),
        ]);
    }

    public function update(Request $request, $id){
        $expediente = Expediente::findOrFail($id);
        $expediente->nurej = $request['nurej'];
        $expediente->web_id = $request['web_id'];
        $expediente->descripcion = $request['descripcion'];
        $expediente->materia = $request['materia'];
        $expediente->procedimiento = $request['procedimiento'];
        $expediente->nro_fojas = $request['nro_fojas'];
        $expediente->juez_id = $request['juez_id'];
        $expediente->juzgado_id = $request['juzgado_id'];
        $expediente->tipo_proceso_id = $request['tipo_proceso_id'];

        $expediente->update();

        return redirect('expedientes');
    }

    public function destroy($id){
        $expediente = Expediente::findOrFail($id);
        $expediente->delete();

        return redirect('expedientes');
    }
}

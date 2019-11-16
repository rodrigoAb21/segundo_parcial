<?php

namespace App\Http\Controllers;

use App\Expediente;
use App\Foja;
use App\Juzgado;
use App\TipoProceso;
use App\User;
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
        $materias = ['FAMILIAR', 'PENAL', 'CIVIL', 'LABORAL', 'CONSTITUCIONAL'];

        return view('vistas.expedientes.create', [
            'materias' => $materias,
            'tipos' => TipoProceso::all(),
            'jueces' => User::where('tipo', '=', 'Juez')->get(),
            'abogados' => User::where('tipo', '=', 'Abogado')->get(),
            'usuarios' => User::where('tipo', '=', 'Demandado/Demandante')->get(),
            'juzgados' => Juzgado::all(),
            ]);
    }

    public function store(Request $request){
        $expediente = new Expediente();
        $expediente->nurej = $request['nurej'];
        $expediente->web_id = $request['web_id'];
        $expediente->fecha_recepcion = Carbon::now('America/La_Paz');
        $expediente->descripcion = $request['descripcion'];
        $expediente->materia = $request['materia'];
        $expediente->procedimiento = $request['procedimiento'];
        $expediente->nro_fojas = 0;
        $expediente->juez_id = $request['juez_id'];
        $expediente->dmt_id = $request['dmt_id'];
        $expediente->dmd_id = $request['dmd_id'];
        $expediente->rep_dmt_id = $request['rep_dmt_id'];
        $expediente->rep_dmd_id = $request['rep_dmd_id'];
        $expediente->juzgado_id = $request['juzgado_id'];
        $expediente->tipo_proceso_id = $request['tipo_proceso_id'];

        $expediente->save();

        return redirect('expedientes');

    }

    public function edit($id){
        $materias = ['FAMILIAR', 'PENAL', 'CIVIL', 'LABORAL', 'CONSTITUCIONAL'];
        return view('vistas.expedientes.edit', [
            'expediente' => Expediente::findOrFail($id),
            'materias' => $materias,
            'tipos' => TipoProceso::all(),
            'jueces' => User::where('tipo', '=', 'Juez')->get(),
            'abogados' => User::where('tipo', '=', 'Abogado')->get(),
            'usuarios' => User::where('tipo', '=', 'Demandado/Demandante')->get(),
            'juzgados' => Juzgado::all(),
        ]);
    }

    public function update(Request $request, $id){
        $expediente = Expediente::findOrFail($id);
        $expediente->nurej = $request['nurej'];
        $expediente->web_id = $request['web_id'];
        $expediente->descripcion = $request['descripcion'];
        $expediente->materia = $request['materia'];
        $expediente->procedimiento = $request['procedimiento'];
        $expediente->juez_id = $request['juez_id'];
        $expediente->dmt_id = $request['dmt_id'];
        $expediente->dmd_id = $request['dmd_id'];
        $expediente->rep_dmt_id = $request['rep_dmt_id'];
        $expediente->rep_dmd_id = $request['rep_dmd_id'];
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

    public function fojas($id){
        $fojas = Foja::where('expediente_id', '=', $id)->get();
        return view('vistas.expedientes.fojas.index', [
            'expediente' => Expediente::findOrFail($id),
            'fojas' => $fojas,
        ]);
    }

    public function verFoja($id, $fojaId){
        return view('vistas.expedientes.fojas.view', [
            'foja' => Foja::findOrFail($fojaId),
        ]);
    }

    public function eliminarFoja($id, $fojaId){
        $foja = Foja::findOrFail($fojaId);
        $foja->delete();

        return redirect('expedientes/'.$id.'/fojas');
    }
}

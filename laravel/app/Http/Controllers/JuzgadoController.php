<?php

namespace App\Http\Controllers;

use App\Juzgado;
use Illuminate\Http\Request;

class JuzgadoController extends Controller
{
    public function index(){
        return view('vistas.juzgados.index',
            [
                'juzgados' => Juzgado::paginate(10),
            ]);
    }

    public function create(){
        $departamentos = ['La Paz', 'Oruro', 'Potosi', 'Cochabamba', 'Sucre', 'Tarija', 'Pando', 'Beni', 'Santa Cruz'];
        return view('vistas.juzgados.create', ['departamentos' => $departamentos]);
    }

    public function store(Request $request){
        $juzgado = new Juzgado();

        $juzgado->nombre = $request['nombre'];
        $juzgado->departamento = $request['departamento'];
        $juzgado->save();

        return redirect('juzgados');

    }

    public function edit($id){
        $departamentos = ['La Paz', 'Oruro', 'Potosi', 'Cochabamba', 'Sucre', 'Tarija', 'Pando', 'Beni', 'Santa Cruz'];
        return view('vistas.juzgados.edit', [
            'juzgado' => Juzgado::findOrFail($id),
            'departamentos' => $departamentos,
        ]);
    }

    public function update(Request $request, $id){
        $juzgado = Juzgado::findOrFail($id);
        $juzgado->nombre = $request['nombre'];
        $juzgado->departamento = $request['departamento'];
        $juzgado->update();

        return redirect('juzgados');
    }

    public function destroy($id){
        $juzgado = Juzgado::findOrFail($id);
        $juzgado->delete();

        return redirect('juzgados');
    }
}

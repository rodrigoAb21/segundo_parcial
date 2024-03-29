<?php

namespace App\Http\Controllers;

use App\TipoProceso;
use Illuminate\Http\Request;

class TipoProcesoController extends Controller
{
    public function index()
    {
        return view('vistas.tipos.index',
            [
                'tipos' => TipoProceso::paginate(10),
            ]);
    }

    public function create()
    {
        return view('vistas.tipos.create');
    }


    public function store(Request $request)
    {
        $tipo = new TipoProceso();
        $tipo->nombre = $request['nombre'];
        $tipo->save();

        return redirect('tipos');
    }

    public function edit($id)
    {
        return view('vistas.tipos.edit',
            [
                'tipo' => TipoProceso::findOrFail($id),
            ]);
    }


    public function update(Request $request, $id)
    {
        $tipo = TipoProceso::findOrFail($id);
        $tipo->nombre = $request['nombre'];
        $tipo->update();

        return redirect('tipos');
    }


    public function destroy($id)
    {
        $tipo = TipoProceso::findOrFail($id);
        $tipo->delete();

        return redirect('tipos');
    }
}

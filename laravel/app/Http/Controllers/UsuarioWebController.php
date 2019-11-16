<?php

namespace App\Http\Controllers;

use App\Expediente;
use App\Foja;
use App\Juzgado;
use App\TipoProceso;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuarioWebController extends Controller
{
    public function index(){
        return view('vistas.usuario.expedientes.index',
            [
                'expedientes' => Expediente::
                where('juez_id', '=', Auth::user()->id)
                ->orWhere('dmt_id', '=', Auth::user()->id)
                ->orWhere('dmd_id', '=', Auth::user()->id)
                ->orWhere('rep_dmt_id', '=', Auth::user()->id)
                ->orWhere('rep_dmd_id', '=', Auth::user()->id)
                    ->paginate(10),
            ]);
    }

    public function fojas($id){
        $fojas = Foja::where('expediente_id', '=', $id)->get();
        return view('vistas.usuario.expedientes.fojas.index', [
            'expediente' => Expediente::findOrFail($id),
            'fojas' => $fojas,
        ]);
    }

    public function verFoja($id, $fojaId){
        return view('vistas.usuario.expedientes.fojas.view', [
            'foja' => Foja::findOrFail($fojaId),
        ]);
    }

    public function verExpediente($id){
        $expediente = Expediente::findOrFail($id);
        return view('vistas.usuario.expedientes.view', [
            'expediente' => $expediente,
            'tipo' => TipoProceso::findOrFail($expediente->tipo_proceso_id),
            'juez' => User::findOrFail($expediente->juez_id),
            'rep_dmt' => User::findOrFail($expediente->rep_dmt_id),
            'rep_dmd' => User::findOrFail($expediente->rep_dmd_id),
            'dmt' => User::findOrFail($expediente->dmt_id),
            'dmd' => User::findOrFail($expediente->dmd_id),
            'juzgado' => Juzgado::findOrFail($expediente->juzgado_id),
        ]);
    }

    public function eliminarFoja($id, $fojaId){
        $foja = Foja::findOrFail($fojaId);
        $foja->delete();

        return redirect('usuario/expedientes/'.$id.'/fojas');
    }

    public function editUsuario($id){
        return view('vistas.usuario.edit', [
            'usuario' => User::findOrFail($id),
        ]);
    }

    public function updateUsuario(Request $request, $id){
        $usuario = User::findOrFail($id);
        $usuario->nombre = $request['nombre'];
        $usuario->ci = $request['ci'];
        $usuario->codigo = $request['codigo'];
        $usuario->telefono = $request['telefono'];
        $usuario->email = $request['email'];
        if (trim($request['password']) != ''){
            $usuario->password = bcrypt($request['password']);
        }
        if ($usuario->update()){
            $request->session()->flash('alert-success', 'Cambios guardados exitosamente.');
        } else {
            $request->session()->flash('alert-danger', 'Error al guardar los cambios.');
        }
        return redirect('usuario/editarCuenta/'.$id);
    }
}

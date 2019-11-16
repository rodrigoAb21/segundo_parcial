<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index(){
        return view('vistas.admin.usuarios.index',
            [
                'usuarios' => User::where('tipo', '!=', 'admin')->paginate(10),
            ]);
    }

    public function create(){
        $tipos = ['Juez', 'Abogado', 'Demandado/Demandante'];
        return view('vistas.admin.usuarios.create',[
            'tipos' => $tipos,
        ]);
    }

    public function store(Request $request){
        $usuario = new User();
        $usuario->nombre = $request['nombre'];
        $usuario->ci = $request['ci'];
        $usuario->codigo = $request['codigo'];
        $usuario->telefono = $request['telefono'];
        $usuario->email = $request['email'];
        $usuario->password = bcrypt($request['password']);
        $usuario->tipo = $request['tipo'];

        $usuario->save();

        return redirect('administrador/usuarios');

    }

    public function edit($id){
        $tipos = ['Juez', 'Abogado', 'Demandado/Demandante'];

        return view('vistas.admin.usuarios.edit', [
            'usuario' => User::findOrFail($id),
            'tipos' => $tipos,
        ]);
    }

    public function update(Request $request, $id){
        $usuario = User::findOrFail($id);
        $usuario->nombre = $request['nombre'];
        $usuario->ci = $request['ci'];
        $usuario->codigo = $request['codigo'];
        $usuario->telefono = $request['telefono'];
        $usuario->email = $request['email'];
        $usuario->tipo = $request['tipo'];
        if (trim($request['password']) != ''){
            $usuario->password = bcrypt($request['password']);
        }
        $usuario->update();

        return redirect('administrador/usuarios');
    }

    public function destroy($id){
        $usuario = User::findOrFail($id);
        $usuario->delete();

        return redirect('administrador/usuarios');
    }
}

<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index(){
        return view('vistas.usuarios.index',
            [
                'usuarios' => User::paginate(10),
            ]);
    }

    public function create(){
        return view('vistas.usuarios.create');
    }

    public function store(Request $request){
        $usuario = new User();
        $usuario->ci = $request['ci'];
        $usuario->nombre = $request['nombre'];
        $usuario->telefono = $request['telefono'];
        $usuario->email = $request['email'];
        $usuario->password = bcrypt($request['password']);
        $usuario->tipo = 'Usuario';

        $usuario->save();

        return redirect('usuarios');

    }

    public function edit($id){
        return view('vistas.usuarios.edit', [
            'usuario' => User::findOrFail($id),
        ]);
    }

    public function update(Request $request, $id){
        $usuario = User::findOrFail($id);
        $usuario->ci = $request['ci'];
        $usuario->nombre = $request['nombre'];
        $usuario->telefono = $request['telefono'];
        $usuario->email = $request['email'];
        if (trim($request['password']) != ''){
            $usuario->password = bcrypt($request['password']);
        }
        $usuario->update();

        return redirect('usuarios');
    }

    public function destroy($id){
        $usuario = User::findOrFail($id);
        $usuario->delete();

        return redirect('usuarios');
    }
}

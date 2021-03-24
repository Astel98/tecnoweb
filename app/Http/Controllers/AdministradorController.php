<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministradorController extends Controller
{
    public function store(Request $request)
    {
        //if (!$request->ajax()) return redirect('/');
        
        $user = new User();
        $user->nombre = $request->nombre;
        $user->apellido = $request->apellido;
        $user->email = $request->email;
        $user->ci = $request->ci;
        $user->genero = $request->genero;
        $user->direccion = $request->direccion;
        $user->telefono = $request->telefono;
        $user->fecha_nac = $request->fecha_nac;
        $user->password = bcrypt($request->password);
        $user->id_rol='1';
        $user->save();

        $id = User::findByEmail($request->email);
        
        $administrador = new administrador();
        $administrador->id = $id->id;
        $administrador->save();
    
    }

    public function update(Request $request)
    {
        //if (!$request->ajax()) return redirect('/');

        $user = User::findOrFail($request->id);
        $user->nombre = $request->nombre;
        $user->email = $request->email;
        if($request->password != $user->password)
        {
            $user->password = bcrypt($request->password);
        }
        $user->id_rol=$request->id_rol;
        $user->save();
    }
}

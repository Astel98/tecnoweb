<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
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
        
        $cliente = new cliente();
        $cliente->id = $id->id;
        $cliente->estudiante = $request->estudiante;
        $cliente->id_tarifa = $request->id_tarifa;
        $cliente->save();;
    
    }
}

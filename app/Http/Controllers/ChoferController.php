<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChoferController extends Controller
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
        $user->id_rol=$request->id_rol;
        $user->save();

        $id = User::findByEmail($request->email);
        
        $chofer = new chofer();
        $chofer->id = $id->id;
        $chofer->hora_entrada = $request->hora_entrada;
        $chofer->hora_salida = $request->hora_salida;
        $chofer->save();      
    }
}

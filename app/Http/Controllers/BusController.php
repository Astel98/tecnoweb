<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bus;

class BusController extends Controller
{

    public function store(Request $request)
    {
        //if (!$request->ajax()) return redirect('/');
        
        $bus = new bus();
        $bus->nombre = $request->nombre;
        $bus->apellido = $request->apellido;
        $bus->email = $request->email;
        $bus->ci = $request->ci;
        $bus->genero = $request->genero;
        $bus->direccion = $request->direccion;
        $bus->telefono = $request->telefono;
        $bus->fecha_nac = $request->fecha_nac;
        $bus->password = bcrypt($request->password);
        $bus->id_rol=$request->id_rol;
        $bus->save();

        $id = bus::findByEmail($request->email);

        if($request->id_rol=='1'){
            $administrador = new administrador();
            $administrador->id = $id->id;
            $administrador->save();
        }

        if($request->id_rol=='2'){
            $cliente = new cliente();
            $cliente->id = $id->id;
            $cliente->estudiante = 'false';
            $cliente->id_tarifa = '1';
            $cliente->save();
        }

        if($request->id_rol=='3'){
            $chofer = new chofer();
            $chofer->id = $id->id;
            $chofer->hora_entrada = "00:00:00";
            $chofer->hora_salida = "00:00:00";
            $chofer->save();
        }
               
    }



    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function view()
    {
        //Cookie::queue('Tiempo', now(), 60);
        return view('buses');
    }

    public function getBuses()
    {
        $roles = bus::select('*')
            ->orderBy('id', 'desc')
            ->get();

        return ['roles' => $roles];
    }
}

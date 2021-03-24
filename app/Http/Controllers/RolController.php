<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rol;
use Illuminate\Support\Facades\Auth;

class RolController extends Controller
{
    public function index(Request $request)
    {
        // if (!$request->ajax()) return redirect('/');

        $buscar = $request->buscar;
        $criterio = $request->criterio;

        if((Auth::user()->id_rol == 1)){
            if ($buscar == '') {
                $roles = rol::orderBy('id', 'desc')->paginate(6);
            } else {
                $roles = rol::where($criterio, 'like', '%' . $buscar . '%')
                ->orderBy('id', 'desc')
                ->paginate(6);
            }
        }

        return [
            'pagination' => [
                'total'        => $roles->total(),
                'current_page' => $roles->currentPage(),
                'per_page'     => $roles->perPage(),
                'last_page'    => $roles->lastPage(),
                'from'         => $roles->firstItem(),
                'to'           => $roles->lastItem(),
            ],
            'roles' => $roles
        ];
    }

    public function store(Request $request)
    {
        //if (!$request->ajax()) return redirect('/');
        $rol = new rol();
        $rol->nombre = $request->nombre;
        $rol->descripcion = $request->descripcion;
        $rol->save();

    }

    public function update(Request $request)
    {
        //if (!$request->ajax()) return redirect('/');
        $rol = rol::findOrFail($request->id);
        $rol->nombre = $request->nombre;
        $rol->descripcion = $request->descripcion;
        $rol->save();

    }

    public function selectRol()
    {
        $roles = rol::select('id', 'nombre')
            ->orderBy('id', 'desc')->get();

        return ['roles' => $roles];
    }
}

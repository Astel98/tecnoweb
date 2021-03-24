<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\administrador;
use App\Models\cliente;
use App\Models\chofer;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(Request $request)
    {
        //if (!$request->ajax()) return redirect('/');

        $buscar = $request->buscar;
        $criterio = $request->criterio;

        if((Auth::user()->id_rol == 1)){
            if ($buscar == '') {
                $usuarios = User::join('rol', 'rol.id', '=', 'users.id_rol')
                ->select('users.id', 'users.nombre', 'users.apellido','users.email','users.password','users.id_rol','rol.nombre as rolnombre')
                ->orderBy('users.id', 'desc')->paginate(6);
            }else if ($criterio == 'id_rol') {
                $usuarios =User::join('rol', 'rol.id', '=', 'users.id_rol')
                ->select('users.id', 'users.nombre', 'users.apellido','users.email','users.password','users.id_rol','rol.nombre as rolnombre')
                ->where('rol.nombre', 'like', '%' . $buscar . '%')
                ->orderBy('users.id', 'desc')->paginate(6); 
            }else{
                $usuarios = User::join('rol', 'rol.id', '=', 'users.id_rol')
                ->select('users.id', 'users.nombre', 'users.apellido','users.email','users.password','users.id_rol','rol.nombre as rolnombre')
                ->where('users.' . $criterio, 'like', '%' . $buscar . '%')
                ->orderBy('users.id', 'desc')->paginate(6);
            }
        
        }
        

        return [
            'pagination' => [
                'total'        => $usuarios->total(),
                'current_page' => $usuarios->currentPage(),
                'per_page'     => $usuarios->perPage(),
                'last_page'    => $usuarios->lastPage(),
                'from'         => $usuarios->firstItem(),
                'to'           => $usuarios->lastItem(),
            ],
            'usuarios' => $usuarios
        ];
    }

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

    
    public function selectUsuario()
    {
        $usuarios = User::select('id', 'email')
            ->orderBy('id', 'desc')
            ->get();

        return ['usuarios' => $usuarios];
    }

    public function perfil()
    {
        $user = User::findOrFail(Auth::user()->id);
        return view('perfil', ['user' => $user]);
    }

    public function editarPerfil()
    {
        //if (!$request->ajax()) return redirect('/');

        $user = User::findOrFail(Auth::user()->id);
        return view('editperfil', ['user' => $user]);
    }
}

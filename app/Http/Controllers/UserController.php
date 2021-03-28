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
        //return csrf_token();
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
        $user->estado="true";
        $user->save();

        $id = User::findByEmail($request->email);

        if($request->id_rol=='1'){
            $administrador = new administrador();
            $administrador->id = $id->id;
            $administrador->estado = true;
            $administrador->save();
        }

        if($request->id_rol=='2'){
            $cliente = new cliente();
            $cliente->id = $id->id;
            $cliente->estudiante = 'false';
            $cliente->id_tarifa = '1';
            $cliente->estado = true;
            $cliente->save();
        }

        if($request->id_rol=='3'){
            $chofer = new chofer();
            $chofer->id = $id->id;
            $chofer->hora_entrada = "00:00:00";
            $chofer->hora_salida = "00:00:00";
            $chofer->estado = true;
            $chofer->save();
        }
               
    }

    public function store2(Request $request)
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
        $user->estado="true";
        $user->save();

        $id = User::findByEmail($request->email);

        if($request->id_rol=='1'){
            $administrador = new administrador();
            $administrador->id = $id->id;
            $administrador->estado = true;
            $administrador->save();
        }

        if($request->id_rol=='2'){
            $cliente = new cliente();
            $cliente->id = $id->id;
            $cliente->estudiante = 'false';
            $cliente->id_tarifa = '1';
            $cliente->estado = true;
            $cliente->save();
        }

        if($request->id_rol=='3'){
            $chofer = new chofer();
            $chofer->id = $id->id;
            $chofer->hora_entrada = "00:00:00";
            $chofer->hora_salida = "00:00:00";
            $chofer->estado = true;
            $chofer->save();
        }

        return view('auth.login');
               
    }

    public function update(Request $request)
    {
        //if (!$request->ajax()) return redirect('/');
        $user = User::findOrFail(Auth::user()->id);
        $user->nombre = $request->nombre;
        $user->apellido = $request->apellido;
        $user->genero = $request->genero;
        $user->direccion = $request->direccion;
        if($request->password != $user->password)
        {
            $user->password = bcrypt($request->password);
        }
        //$user->id_rol=$request->id_rol;
        $user->save();
        return view('home');
    }

    
    public function selectUsuario()
    {
        $usuarios = User::select('id', 'email')
            ->orderBy('id', 'desc')
            ->get();

        return ['usuarios' => $usuarios];
    }

    public function listar()
    {
        $usuarios = User::select('*')
            ->where('estado','=','true')
            ->orderBy('id', 'asc')
            ->get();

        return view('listausuarios',['listausuarios' => $usuarios]);
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

    public function editar(Request $request)
    {
        //if (!$request->ajax()) return redirect('/');
        $user = User::findOrFail($request->id);
        return view('edituser', ['user' => $user]);
    }

    public function editarUser(Request $request)
    {
        $user = User::findOrFail($request->id);

        $user->nombre = $request->nombre;
        $user->apellido = $request->apellido;
        $user->genero = $request->genero;
        $user->direccion = $request->direccion;
        $user_id_rol=-1;

        if($request->rol == "administrador"){
            $user_id_rol=1;
        }else if($request->rol == "cliente"){
            $user_id_rol=2;
        }else{
            $user_id_rol=3;
        }
        

        if($user->id_rol != $user_id_rol){
            if($user->id_rol == '1'){
                $rol_user = administrador::find($user->id); 
                $rol_user->estado = 'false';
                $rol_user->save();
            }else if($user->id_rol == '2'){
                $rol_user = cliente::find($user->id); 
                $rol_user->estado = 'false';
                $rol_user->save();
            }else{
                $rol_user = chofer::find($user->id); 
                $rol_user->estado = 'false';
                $rol_user->save();
            }

            $user->id_rol=$user_id_rol;
            $user->save();

            if($user_id_rol=='1'){
                $administrador = new administrador();
                $administrador->id = $id->id;
                $administrador->save();
            }else if($user_id_rol=='2'){
                $cliente = new cliente();
                $cliente->id = $id->id;
                $cliente->estudiante = 'false';
                $cliente->id_tarifa = '1';
                $cliente->save();
            } else {
                $chofer = new chofer();
                $chofer->id = $id->id;
                $chofer->hora_entrada = "00:00:00";
                $chofer->hora_salida = "00:00:00";
                $chofer->save();
            }
        }else{
            $user->save();
        }        
        listar();
    }

    public function eliminar(Request $request)
    {
        $user = User::findOrFail($request->id);
    
        if($user->id_rol == '1'){
            $rol_user = administrador::find($user->id); 
            $rol_user->estado = 'false';
            $rol_user->save();
        }else if($user->id_rol == '2'){
            $rol_user = cliente::find($user->id); 
            $rol_user->estado = 'false';
            $rol_user->save();
        }else{
            $rol_user = chofer::find($user->id); 
            $rol_user->estado = 'false';
            $rol_user->save();
        }
        $user->estado = 'false';
        $user->save();
        listar();
    }
}

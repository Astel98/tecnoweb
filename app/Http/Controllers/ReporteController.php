<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rol;
use App\Models\User;
use App\Models\bus_chofer;
use App\Models\bus;
use App\Models\ruta;
use App\Models\chofer;
use App\Models\cliente;
use App\Models\administrador;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class ReporteController extends Controller
{

    public function reportes()
    {
        return view('reporte');
    }

    public function getAdmins()
    {
        $roles = rol::select('id', 'nombre')
            ->orderBy('id', 'desc')->get();

        return ['roles' => $roles];
    }

    public function getEstudiantes()
    {
        $estudiantes = User::select('*')
            ->where('estudiante', '=', 'true')
            ->orderBy('id', 'desc')->get();

        return ['estudiantes' => $estudiantes];
    }

    public function getBusesActivos()
    {
        $Buses = bus::select('*')
            ->where('estado', '=', 'true')
            ->orderBy('id', 'desc')->get();

        return ['buses' => $Buses];
    }

    public function getChoferBuses()
    {
        $Buses = bus_chofer::join('buses', 'buses.id', '=', 'bus_chofers.id_bus')
                ->join('chofers', 'chofers.id', '=', 'bus_chofers.id_chofer')
                ->join('users', 'users.id', '=', 'bus_chofers.id_chofer')
                ->select('buses.*', 'users.nombre', 'users.apellido', 'chofers.*')
                ->orderBy('bus_chofers.id_bus', 'desc')
                ->get();

        return ['buses' => $Buses];
    }

    public function imprimir(){

        $usuarios = User::select('*')
            ->orderBy('id', 'asc')->get();

        $cantidad = User::count();

        $today = Carbon::now()->format('d/m/Y');
        $pdf = \PDF::loadView('pdfs.reporteusuarios', ['listausuarios' => $usuarios, 'cantidad' => $cantidad]);
        $pdf->setPaper('A4', 'landscape');
        return $pdf->download('usuarios.pdf');
    }


    public function imprimirEstudiantes(){

        $estudiantes = cliente::join('users', 'clientes.id', '=', 'users.id')
        ->select('*')
        ->where('estudiante','=','true')
        ->orderBy('id', 'asc')->get();

        $cantidad = User::count();

        $today = Carbon::now()->format('d/m/Y');
        $pdf = \PDF::loadView('pdfs.reporteestudiantes', ['listaestudiantes' => $estudiantes, 'cantidad' => $cantidad]);
        $pdf->setPaper('A4', 'landscape');
        return $pdf->download('estudiantes.pdf');
    }

    public function imprimirBuses(){

        $buses = bus::select('*')
            ->orderBy('id', 'asc')->get();

        $cantidad = bus::count();

        $today = Carbon::now()->format('d/m/Y');
        $pdf = \PDF::loadView('pdfs.reportebuses', ['listabuses' => $buses, 'cantidad' => $cantidad]);
        $pdf->setPaper('A4', 'landscape');
        return $pdf->download('buses.pdf');
    }

    public function imprimirClientes(){

        $clientes = User::join('clientes', 'clientes.id', '=', 'users.id')
        ->select('users.*')
        ->orderBy('id', 'asc')
        ->get();

        $cantidad = cliente::count();

        $today = Carbon::now()->format('d/m/Y');
        $pdf = \PDF::loadView('pdfs.reporteclientes', ['listaclientes' => $clientes, 'cantidad' => $cantidad]);
        $pdf->setPaper('A4', 'landscape');
        return $pdf->download('ejemplo.pdf');
    }

    public function imprimirChoferes(){

        $choferes = User::join('chofers', 'chofers.id', '=', 'users.id')
        ->select('users.*','chofers.hora_entrada','chofers.hora_salida')
            ->orderBy('id', 'asc')->get();

        $cantidad = chofer::count();

        $today = Carbon::now()->format('d/m/Y');
        $pdf = \PDF::loadView('pdfs.reportechoferes', ['listachoferes' => $choferes, 'cantidad' => $cantidad]);
        $pdf->setPaper('A4', 'landscape');
        return $pdf->download('ejemplo.pdf');
    }

    public function imprimirRutas(){

        $rutas = ruta::select('*')
            ->orderBy('id', 'asc')->get();

        $cantidad = ruta::count();

        $today = Carbon::now()->format('d/m/Y');
        $pdf = \PDF::loadView('pdfs.reporterutas', ['listarutas' => $rutas, 'cantidad' => $cantidad]);
        $pdf->setPaper('A4', 'landscape');
        return $pdf->download('ejemplo.pdf');
    }

}

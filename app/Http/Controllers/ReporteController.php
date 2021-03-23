<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rol;
use App\Models\User;
use App\Models\bus_chofer;
use Illuminate\Support\Facades\Auth;

class ReporteController extends Controller
{
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


}

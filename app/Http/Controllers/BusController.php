<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BusController extends Controller
{
    
    function read(){
        $data = DB::select('select * from buses order by id');
        return view("casos.buses.read",[ "buses" => $data]);
    }

    function showForm(){
        $data = DB::select('select * from rutas order by id');
        return view('casos.buses.create',["rutas" => $data]);
    }

    function create(Request $request){
        $nombre = $request->nombre;
        $descripcion = $request->descripcion;
        $modelo = $request->modelo;
        $capacidad = $request->capacidad;
        $estado = $request->estado;
        $id_ruta = $request->id_ruta;
        DB::insert('insert into buses(nombre,descripcion,modelo,capacidad,estado,id_ruta) 
        values(?,?,?,?,?,?)', [$nombre,$descripcion,$modelo,$capacidad,$estado,$id_ruta]);
        return $this->read();
    }   

    function modify($id){
        $data = DB::select('select * from buses where id = ? limit 1',[$id]);
        $rutas = DB::select('select * from rutas order by id');
        return view('casos.buses.modify',["bus" => $data, "buses" => $buses]);
    }

    function update($id, Request $request){
        $nombre = $request->nombre;
        $descripcion = $request->descripcion;
        $modelo = $request->modelo;
        $capacidad = $request->capacidad;
        $estado = $request->estado;
        $id_ruta = $request->id_ruta;
        DB::update('update buses set nombre = ?, descripcion = ?, modelo = ?, capacidad = ?, estado = ?, id_ruta = ? where id = ?',[$nombre,$descripcion,$modelo,$capacidad,$estado,$id_ruta,$id]);
        return $this->read();
    }

    function delete($id){
        DB::delete('delete from buses where id = ?', [$id]);
        return $this->read();
    }
}

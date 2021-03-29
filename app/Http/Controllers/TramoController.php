<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TramoController extends Controller
{
    
    function read(){
        $data = DB::select('select * from tramos order by id');
        return view("casos.tramos.read",[ "tramos" => $data]);
    }

    function showForm(){
        $data = DB::select('select * from rutas order by id');
        return view('casos.tramos.create',["rutas" => $data]);
    }

    function create(Request $request){
        $nombre = $request->nombre;
        $descripcion = $request->descripcion;
        $id_ruta = $request->id_ruta;
        DB::insert('insert into tramos(nombre,descripcion,id_ruta) 
        values(?,?,?)', [$nombre,$descripcion,$id_ruta]);
        return $this->read();
    }   

    function modify($id){
        $data = DB::select('select * from tramos where id = ? limit 1',[$id]);
        $rutas = DB::select('select * from rutas order by id');
        return view('casos.tramos.modify',["tramo" => $data, "rutas" => $rutas]);
    }

    function update($id, Request $request){
        $nombre = $request->nombre;
        $descripcion = $request->descripcion;
        $id_ruta = $request->id_ruta;
        DB::update('update tramos set nombre = ?, descripcion = ?, id_ruta = ? where id = ?',[$nombre,$descripcion,$id_ruta,$id]);
        return $this->read();
    }

    function delete($id){
        DB::delete('delete from tramos where id = ?', [$id]);
        return $this->read();
    }
}

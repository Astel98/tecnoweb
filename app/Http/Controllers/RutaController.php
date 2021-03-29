<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RutaController extends Controller
{
    
    function read(){
        $data = DB::select('select * from rutas order by id');
        return view("casos.rutas.read",[ "rutas" => $data]);
    }

    function showForm(){
        return view('casos.rutas.create');
    }

    function create(Request $request){
        $nombre = $request->nombre;
        $descripcion = $request->descripcion;
        $lat_ini = $request->lat_ini;
        $long_ini = $request->long_ini;
        $lat_fin = $request->lat_fin;
        $long_fin = $request->long_fin;
        DB::insert('insert into rutas(nombre,descripcion,lat_ini,long_ini,lat_fin,long_fin) 
        values(?,?,?,?,?,?)', [$nombre,$descripcion,$lat_ini,$long_ini,$lat_fin,$long_fin]);
        return $this->read();
    }   

    function modify($id){
        $data = DB::select('select * from rutas where id = ? limit 1',[$id]);
        return view('casos.rutas.modify',["ruta" => $data]);
    }

    function update($id, Request $request){
        $nombre = $request->nombre;
        $descripcion = $request->descripcion;
        $lat_ini = $request->lat_ini;
        $long_ini = $request->long_ini;
        $lat_fin = $request->lat_fin;
        $long_fin = $request->long_fin;
        DB::update('update rutas set nombre = ?, descripcion = ?, lat_ini = ?, long_ini = ?, lat_fin = ?, long_fin = ? where id = ?',[$nombre,$descripcion,$lat_ini,$long_ini,$lat_fin,$long_fin,$id]);
        return $this->read();
    }

    function delete($id){
        DB::delete('delete from rutas where id = ?', [$id]);
        return $this->read();
    }


}

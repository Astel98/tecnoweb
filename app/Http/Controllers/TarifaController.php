<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TarifaController extends Controller
{
    
    function read(){
        $data = DB::select('select * from tarifas order by id');
        return view("christian.tarifa.read",[ "tarifas" => $data]);
    }

    function showForm(){
        return view('christian.tarifa.create');
    }

    function create(Request $request){
        $nombre = $request->nombre;
        $descripcion = $request->descripcion;
        $precio = $request->precio;
        DB::insert('insert into tarifas(nombre,descripcion,precio) 
        values(?,?,?)', [$nombre,$descripcion,$precio]);
        return $this->read();
    }   

    function modify($id){
        $data = DB::select('select * from tarifas where id = ? limit 1',[$id]);
        return view('christian.tarifa.modify',["tarifa" => $data]);
    }

    function update($id, Request $request){
        $nombre = $request->nombre;
        $descripcion = $request->descripcion;
        $precio = $request->precio;
        DB::update('update tarifas set nombre = ?, descripcion = ?, precio = ? where id = ?',[$nombre,$descripcion,$precio,$id]);
        return $this->read();
    }

    function delete($id){
        DB::delete('delete from tarifas where id = ?', [$id]);
        return $this->read();
    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PromocionController extends Controller
{
    
    function read(){
        $data = DB::select('select * from promocions order by id');
        return view("christian.promocion.read",[ "promociones" => $data]);
    }

    function showForm(){
        $data = DB::select('select * from tarifas order by id');
        return view('christian.promocion.create',["tarifas" => $data]);
    }

    function create(Request $request){
        $nombre = $request->nombre;
        $descripcion = $request->descripcion;
        $descuento = $request->descuento;
        $id_tarifa = $request->id_tarifa;
        DB::insert('insert into promocions(nombre,descripcion,descuento,id_tarifa) 
        values(?,?,?,?)', [$nombre,$descripcion,$descuento,$id_tarifa]);
        return $this->read();
    }   

    function modify($id){
        $data = DB::select('select * from promocions where id = ? limit 1',[$id]);
        $tarifas = DB::select('select * from tarifas order by id');
        return view('christian.promocion.modify',["promocion" => $data, "tarifas" => $tarifas]);
    }

    function update($id, Request $request){
        $nombre = $request->nombre;
        $descripcion = $request->descripcion;
        $descuento = $request->descuento;
        $id_tarifa = $request->id_tarifa;
        DB::update('update promocions set nombre = ?, descripcion = ?, descuento = ?, id_tarifa = ? where id = ?',[$nombre,$descripcion,$descuento,$id_tarifa,$id]);
        return $this->read();
    }

    function delete($id){
        DB::delete('delete from promocions where id = ?', [$id]);
        return $this->read();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReclamoController extends Controller
{
    
    function read(){
        $id = Auth::user()->id;
        $data = DB::select('select * from reclamos where id_cliente = ? order by id',[$id]);
        return view('christian.reclamo.read',["reclamos" => $data]);
    }

    function showForm(){
        $data = DB::select('select * from buses order by id');
        return view('christian.reclamo.create',["buses" => $data]);
    }

    function create(Request $request){
        $id = Auth::user()->id;
        $motivo = $request->motivo;
        $descripcion = $request->descripcion;
        $id_bus = $request->id_bus;
        DB::insert('insert into reclamos(descipcion,motivo,id_bus,id_cliente) values(?,?,?,?)', [$descripcion,$motivo,$id_bus,$id]);
        return $this->read();
    }   

    function modify($id){
        $data = DB::select('select * from reclamos where id = ? limit 1',[$id]);
        $buses = DB::select('select * from buses order by id');
        return view('christian.reclamo.modify',["reclamo" => $data, "buses" => $buses]);
    }

    function update($id, Request $request){
        $motivo = $request->motivo;
        $descripcion = $request->descripcion;
        $id_bus = $request->id_bus;
        DB::update('update reclamos set motivo = ?, descipcion = ?, id_bus = ? where id = ?',[$motivo,$descripcion,$id_bus,$id]);
        return $this->read();
    }

    function delete($id){
        DB::delete('delete from reclamos where id = ?', [$id]);
        return $this->read();
    }
}

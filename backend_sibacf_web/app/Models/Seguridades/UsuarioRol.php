<?php

namespace app\Models\Seguridades;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UsuarioRol extends Model
{
    protected $shema = 'sch_seguridades';
    protected $table = 'sch_seguridades.usuario_rol';
    protected $filltable = [
        'id_usuario_rol',
        'rol_id',
        'usuario_id',
        'fecha_creacion',
        'usuario_creacion',
        'fecha_actualizacion',
        'usuario_actualizacion',
        'estado_id'
    ];


    public function get_usuario_rol()
    {
        $result = DB::table('sch_seguridades.usuario_rol')->get();
        return $result;
    }

    public function get_usuario_rol_id($id)
    {
        $result = UsuarioRol::where('id_usuario_rol',$id)->first();
        return $result;
    }

    public function create_usuario_rol($objectSave)
    {
       $rowCreated = UsuarioRol::create($objectSave);
       $response = UsuarioRol::where('id_usuario_rol',$rowCreated->id)->first();
       return $rowCreated->id;
    }

    public function update_usuario_rol($id, $objectSave)
    {
        $update = UsuarioRol::find($id)->update($objectSave);
        $response = UsuarioRol::where('id_usuario_rol',$id)->first();
        return $response;
    }

    public function delete_usuario_rol($id)
    {
        $response = UsuarioRol::find($id)->delete();
        return $response;
    }
}
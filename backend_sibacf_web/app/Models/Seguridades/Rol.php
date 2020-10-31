<?php

namespace app\Models\Seguridades;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Rol extends Model
{
    protected $shema = 'sch_seguridades';
    protected $table = 'sch_seguridades.rol';
    protected $filltable = [
        'id_rol',
        'empresa_id',
        'tipo_rol_id',
        'nombre',
        'descripcion',
        'nemonico',
        'fecha_creacion',
        'usuario_creacion',
        'fecha_actualizacion',
        'usuario_actualizacion',
        'estado_id'
    ];


    public function get_rol()
    {
        $result = DB::table('sch_seguridades.rol')->get();
        return $result;
    }

    public function get_rol_id($id)
    {
        $result = Rol::where('id_rol',$id)->first();
        return $result;
    }

    public function create_rol($objectSave)
    {
       $rowCreated = Rol::create($objectSave);
       $response = Rol::where('id_rol',$rowCreated->id)->first();
       return $rowCreated->id;
    }

    public function update_rol($id, $objectSave)
    {
        $update = Rol::find($id)->update($objectSave);
        $response = Rol::where('id_rol',$id)->first();
        return $response;
    }

    public function delete_rol($id)
    {
        $response = Rol::find($id)->delete();
        return $response;
    }
}
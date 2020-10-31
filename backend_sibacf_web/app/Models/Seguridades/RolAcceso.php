<?php

namespace app\Models\Seguridades;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class RolAcceso extends Model
{
    protected $shema = 'sch_seguridades';
    protected $table = 'sch_seguridades.rol_acceso';
    protected $filltable = [
        'id_rol_acceso',
        'rol_id',
        'acceso_id',
        'fecha_creacion',
        'usuario_creacion',
        'fecha_actualizacion',
        'usuario_actualizacion',
        'estado_id'
    ];


    public function get_rol_acceso()
    {
        $result = DB::table('sch_seguridades.rol_acceso')->get();
        return $result;
    }

    public function get_rol_acceso_id($id)
    {
        $result = RolAcceso::where('id_rol_acceso',$id)->first();
        return $result;
    }

    public function create_rol_acceso($objectSave)
    {
       $rowCreated = RolAcceso::create($objectSave);
       $response = RolAcceso::where('id_rol_acceso',$rowCreated->id)->first();
       return $rowCreated->id;
    }

    public function update_rol_acceso($id, $objectSave)
    {
        $update = RolAcceso::find($id)->update($objectSave);
        $response = RolAcceso::where('id_rol_acceso',$id)->first();
        return $response;
    }

    public function delete_rol_acceso($id)
    {
        $response = RolAcceso::find($id)->delete();
        return $response;
    }
}
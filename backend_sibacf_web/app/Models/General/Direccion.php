<?php

namespace app\Models\General;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Direccion extends Model
{
    protected $shema = 'sch_general';
    protected $table = 'sch_general.direccion';
    protected $filltable = [
        'id_direccion',
        'persona_id',
        'empresa_id',
        'calle_principal',
        'calle_secundaria',
        'numeracion',
        'ubicacion_id',
        'fecha_creacion',
        'usuario_creacion',
        'fecha_actualizacion',
        'usuario_actualizacion',
        'estado_id'
    ];


    public function get_direccion()
    {
        $result = DB::table('sch_general.direccion')->get();
        return $result;
    }

    public function get_direccion_id($id)
    {
        $result = Direccion::where('id_direccion',$id)->first();
        return $result;
    }

    public function create_direccion($objectSave)
    {
       $rowCreated = Direccion::create($objectSave);
       $response = Direccion::where('id_direccion',$rowCreated->id)->first();
       return $rowCreated->id;
    }

    public function update_direccion($id, $objectSave)
    {
        $update = Direccion::find($id)->update($objectSave);
        $response = Direccion::where('id_direccion',$id)->first();
        return $response;
    }

    public function delete_direccion($id)
    {
        $response = Direccion::find($id)->delete();
        return $response;
    }
}
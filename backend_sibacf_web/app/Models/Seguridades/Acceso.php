<?php

namespace app\Models\Seguridades;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Acceso extends Model
{
    protected $shema = 'sch_seguridades';
    protected $table = 'sch_seguridades.acceso';
    protected $filltable = [
        'id_acceso',
        'nombre',
        'descripcion',
        'nemonico',
        'acceso_padre_id',
        'nivel',
        'orden',
        'accion',
        'codigo_auxiliar',
        'valor_auxiliar',
        'fecha_creacion',
        'usuario_creacion',
        'fecha_actualizacion',
        'usuario_actualizacion',
        'estado_id'
    ];


    public function get_acceso()
    {
        $result = DB::table('sch_seguridades.acceso')->get();
        return $result;
    }

    public function get_acceso_id($id)
    {
        $result = Acceso::where('id_acceso',$id)->first();
        return $result;
    }

    public function create_acceso($objectSave)
    {
       $rowCreated = Acceso::create($objectSave);
       $response = Acceso::where('id_acceso',$rowCreated->id)->first();
       return $rowCreated->id;
    }

    public function update_acceso($id, $objectSave)
    {
        $update = Acceso::find($id)->update($objectSave);
        $response = Acceso::where('id_acceso',$id)->first();
        return $response;
    }

    public function delete_acceso($id)
    {
        $response = Acceso::find($id)->delete();
        return $response;
    }
}
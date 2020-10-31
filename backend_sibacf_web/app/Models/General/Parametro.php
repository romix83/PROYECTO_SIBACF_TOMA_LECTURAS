<?php

namespace app\Models\General;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Parametro extends Model
{
    protected $shema = 'sch_general';
    protected $table = 'sch_general.parametro';
    protected $filltable = [
        'id_parametro',
        'grupo_parametro_id',
        'empresa_id',
        'modulo_id',
        'nombre',
        'descripcion',
        'nemonico',
        'codigo_auxiliar',
        'valor_auxiliar',
        'valor',
        'fecha_creacion',
        'usuario_creacion',
        'fecha_actualizacion',
        'usuario_actualizacion',
        'estado_id'
    ];


    public function get_parametro()
    {
        $result = DB::table('sch_general.parametro')->get();
        return $result;
    }

    public function get_parametro_id($id)
    {
        $result = Parametro::where('id_parametro',$id)->first();
        return $result;
    }

    public function create_parametro($objectSave)
    {
       $rowCreated = Parametro::create($objectSave);
       $response = Parametro::where('id_parametro',$rowCreated->id)->first();
       return $rowCreated->id;
    }

    public function update_parametro($id, $objectSave)
    {
        $update = Parametro::find($id)->update($objectSave);
        $response = Parametro::where('id_parametro',$id)->first();
        return $response;
    }

    public function delete_parametro($id)
    {
        $response = Parametro::find($id)->delete();
        return $response;
    }
}
<?php

namespace app\Models\General;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class GrupoParametro extends Model
{
    protected $shema = 'sch_general';
    protected $table = 'sch_general.grupo_parametro';
    protected $filltable = [
        'id_grupo_parametro',
        'nombre',
        'descripcion',
        'nemonico',
        'codigo_auxiliar',
        'fecha_creacion',
        'usuario_creacion',
        'fecha_actualizacion',
        'usuario_actualizacion',
        'estado_id'
    ];


    public function get_grupo_parametro()
    {
        $result = DB::table('sch_general.grupo_parametro')->get();
        return $result;
    }

    public function get_grupo_parametro_id($id)
    {
        $result = GrupoParametro::where('id_grupo_parametro',$id)->first();
        return $result;
    }

    public function create_grupo_parametro($objectSave)
    {
       $rowCreated = GrupoParametro::create($objectSave);
       $response = GrupoParametro::where('id_grupo_parametro',$rowCreated->id)->first();
       return $rowCreated->id;
    }

    public function update_grupo_parametro($id, $objectSave)
    {
        $update = GrupoParametro::find($id)->update($objectSave);
        $response = GrupoParametro::where('id_grupo_parametro',$id)->first();
        return $response;
    }

    public function delete_grupo_parametro($id)
    {
        $response = GrupoParametro::find($id)->delete();
        return $response;
    }
}
<?php

namespace app\Models\General;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class GrupoCatalogo extends Model
{
    protected $shema = 'sch_general';
    protected $table = 'sch_general.grupo_catalogo';
    protected $filltable = [
        'id_grupo_catalogo',
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


    public function get_grupo_catalogo()
    {
        $result = DB::table('sch_general.grupo_catalogo')->get();
        return $result;
    }

    public function get_grupo_catalogo_id($id)
    {
        $result = GrupoCatalogo::where('id_grupo_catalogo',$id)->first();
        return $result;
    }

    public function create_grupo_catalogo($objectSave)
    {
       $rowCreated = GrupoCatalogo::create($objectSave);
       $response = GrupoCatalogo::where('id_grupo_catalogo',$rowCreated->id)->first();
       return $rowCreated->id;
    }

    public function update_grupo_catalogo($id, $objectSave)
    {
        $update = GrupoCatalogo::find($id)->update($objectSave);
        $response = GrupoCatalogo::where('id_grupo_catalogo',$id)->first();
        return $response;
    }
/*
    public function delete_Category($id)
    {
        $response = Category::find($id)->delete();
        return $response;
    }*/
}
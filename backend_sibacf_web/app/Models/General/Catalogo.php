<?php

namespace app\Models\General;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Catalogo extends Model
{
    protected $shema = 'sch_general';
    protected $table = 'sch_general.catalogo';
    protected $filltable = [
        'id_catalogo',
        'grupo_catalogo_id',
        'nombre',
        'descripcion',
        'nemonico',
        'codigo_auxiliar',
        'valor_auxiliar',
        'fecha_creacion',
        'usuario_creacion',
        'fecha_actualizacion',
        'usuario_actualizacion',
        'estado_id'
    ];


    public function get_catalogo()
    {
        $result = DB::table('sch_general.catalogo')->get();
        return $result;
    }

    public function get_catalogo_id($id)
    {
        $result = Catalogo::where('id_catalogo',$id)->first();
        return $result;
    }

    public function create_catalogo($objectSave)
    {
       $rowCreated = Catalogo::create($objectSave);
       $response = Catalogo::where('id_catalogo',$rowCreated->id)->first();
       return $rowCreated->id;
    }

    public function update_catalogo($id, $objectSave)
    {
        $update = Catalogo::find($id)->update($objectSave);
        $response = Catalogo::where('id_catalogo',$id)->first();
        return $response;
    }

    public function delete_catalogo($id)
    {
        $response = Catalogo::find($id)->delete();
        return $response;
    }
}
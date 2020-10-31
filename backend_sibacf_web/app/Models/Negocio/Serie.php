<?php

namespace app\Models\Negocio;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Serie extends Model
{
    protected $shema = 'sch_negocio';
    protected $table = 'sch_negocio.serie';
    protected $filltable = [
        'id_serie',
        'articulo_id',
        'codigo',
        'tipo',
        'modelo',
        'fecha_creacion',
        'usuario_creacion',
        'fecha_actualizacion',
        'usuario_actualizacion',
        'estado_id'
    ];


    public function get_serie()
    {
        $result = DB::table('sch_negocio.serie')->get();
        return $result;
    }

    public function get_serie_id($id)
    {
        $result = Serie::where('id_serie',$id)->first();
        return $result;
    }

    public function create_serie($objectSave)
    {
       $rowCreated = Serie::create($objectSave);
       $response = Serie::where('id_serie',$rowCreated->id)->first();
       return $rowCreated->id;
    }

    public function update_serie($id, $objectSave)
    {
        $update = Serie::find($id)->update($objectSave);
        $response = Serie::where('id_serie',$id)->first();
        return $response;
    }

    public function delete_serie($id)
    {
        $response = Serie::find($id)->delete();
        return $response;
    }
}
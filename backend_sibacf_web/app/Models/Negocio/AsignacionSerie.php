<?php

namespace app\Models\Negocio;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AsignacionSerie extends Model
{
    protected $shema = 'sch_negocio';
    protected $table = 'sch_negocio.asignacion_serie';
    protected $filltable = [
        'id_asignacion_serie',
        'serie_id',
        'persona_empresa_id',
        'fecha_instalacion',
        'lectura_inicial',
        'ciclo',
        'sector_id',
        'ruta',
        'manzana',
        'numero_piso',
        'numero_casa',
        'numero_lote',
        'longitud',
        'latitud',
        'fecha_creacion',
        'usuario_creacion',
        'fecha_actualizacion',
        'usuario_actualizacion',
        'estado_id'
    ];


    public function get_asignacion_serie()
    {
        $result = DB::table('sch_negocio.asignacion_serie')->get();
        return $result;
    }

    public function get_asignacion_serie_id($id)
    {
        $result = Usuario::where('id_asignacion_serie',$id)->first();
        return $result;
    }

    public function create_asignacion_serie($objectSave)
    {
       $rowCreated = Usuario::create($objectSave);
       $response = Usuario::where('id_asignacion_serie',$rowCreated->id)->first();
       return $rowCreated->id;
    }

    public function update_asignacion_serie($id, $objectSave)
    {
        $update = Usuario::find($id)->update($objectSave);
        $response = Usuario::where('id_asignacion_serie',$id)->first();
        return $response;
    }

    public function delete_asignacion_serie($id)
    {
        $response = Usuario::find($id)->delete();
        return $response;
    }
}
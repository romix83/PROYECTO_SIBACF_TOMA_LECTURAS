<?php

namespace app\Models\General;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UbicacionGeografica extends Model
{
    protected $shema = 'sch_general';
    protected $table = 'sch_general.ubicacion_geografica';
    protected $filltable = [
        'id_ubicacion_geografica',
        'codigo',
        'nombre',
        'nemonico',
        'nivel',
        'ubicacion_padre_id',
        'fecha_creacion',
        'usuario_creacion',
        'fecha_actualizacion',
        'usuario_actualizacion',
        'estado_id'
    ];


    public function get_ubicacion_geografica()
    {
        $result = DB::table('sch_general.ubicacion_geografica')->get();
        return $result;
    }

    public function get_ubicacion_geografica_id($id)
    {
        $result = UbicacionGeografica::where('id_ubicacion_geografica',$id)->first();
        return $result;
    }

    public function create_ubicacion_geografica($objectSave)
    {
       $rowCreated = UbicacionGeografica::create($objectSave);
       $response = TipoPersona::where('id_ubicacion_geografica',$rowCreated->id)->first();
       return $rowCreated->id;
    }

    public function update_ubicacion_geografica($id, $objectSave)
    {
        $update = UbicacionGeografica::find($id)->update($objectSave);
        $response = UbicacionGeografica::where('id_ubicacion_geografica',$id)->first();
        return $response;
    }

    public function delete_ubicacion_geografica($id)
    {
        $response = UbicacionGeografica::find($id)->delete();
        return $response;
    }
}
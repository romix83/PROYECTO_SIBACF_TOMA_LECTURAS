<?php

namespace app\Models\General;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Periodo extends Model
{
    protected $shema = 'sch_general';
    protected $table = 'sch_general.empresa';
    protected $filltable = [
        'id_periodo',
        'empresa_id',
        'nombre',
        'anio',
        'mes',
        'fecha_creacion',
        'usuario_creacion',
        'fecha_actualizacion',
        'usuario_actualizacion',
        'estado_id'
    ];


    public function get_periodo()
    {
        $result = DB::table('sch_general.periodo')->get();
        return $result;
    }

    public function get_periodo_id($id)
    {
        $result = Periodo::where('id_periodo',$id)->first();
        return $result;
    }

    public function create_periodo($objectSave)
    {
       $rowCreated = Periodo::create($objectSave);
       $response = Periodo::where('id_periodo',$rowCreated->id)->first();
       return $rowCreated->id;
    }

    public function update_periodo($id, $objectSave)
    {
        $update = Periodo::find($id)->update($objectSave);
        $response = Periodo::where('id_periodo',$id)->first();
        return $response;
    }

    public function delete_periodo($id)
    {
        $response = Periodo::find($id)->delete();
        return $response;
    }
}
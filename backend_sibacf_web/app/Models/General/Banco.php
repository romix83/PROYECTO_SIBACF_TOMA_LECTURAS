<?php

namespace app\Models\General;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Banco extends Model
{
    protected $shema = 'sch_general';
    protected $table = 'sch_general.banco';
    protected $filltable = [
        'id_banco',
        'nombre',
        'nemonico',
        'codigo_auxiliar',
        'valor_auxiliar',
        'fecha_creacion',
        'usuario_creacion',
        'fecha_actualizacion',
        'usuario_actualizacion',
        'estado_id'
    ];


    public function get_banco()
    {
        $result = DB::table('sch_general.banco')->get();
        return $result;
    }

    public function get_banco_id($id)
    {
        $result = Banco::where('id_banco',$id)->first();
        return $result;
    }

    public function create_banco($objectSave)
    {
       $rowCreated = Banco::create($objectSave);
       $response = Banco::where('id_banco',$rowCreated->id)->first();
       return $rowCreated->id;
    }

    public function update_banco($id, $objectSave)
    {
        $update = Banco::find($id)->update($objectSave);
        $response = Banco::where('id_banco',$id)->first();
        return $response;
    }

    public function delete_banco($id)
    {
        $response = Banco::find($id)->delete();
        return $response;
    }
}
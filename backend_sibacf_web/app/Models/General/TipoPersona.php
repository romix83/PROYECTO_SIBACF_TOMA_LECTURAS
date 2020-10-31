<?php

namespace app\Models\General;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TipoPersona extends Model
{
    protected $shema = 'sch_general';
    protected $table = 'sch_general.tipo_persona';
    protected $filltable = [
        'id_tipo_persona',
        'persona_id',
        'tipo_id',
        'fecha_creacion',
        'usuario_creacion',
        'fecha_actualizacion',
        'usuario_actualizacion',
        'estado_id'
    ];


    public function get_tipo_persona()
    {
        $result = DB::table('sch_general.tipo_persona')->get();
        return $result;
    }

    public function get_tipo_persona_id($id)
    {
        $result = TipoPersona::where('id_tipo_persona',$id)->first();
        return $result;
    }

    public function create_tipo_persona($objectSave)
    {
       $rowCreated = TipoPersona::create($objectSave);
       $response = TipoPersona::where('id_tipo_persona',$rowCreated->id)->first();
       return $rowCreated->id;
    }

    public function update_tipo_persona($id, $objectSave)
    {
        $update = TipoPersona::find($id)->update($objectSave);
        $response = TipoPersona::where('id_tipo_persona',$id)->first();
        return $response;
    }

    public function delete_tipo_persona($id)
    {
        $response = TipoPersona::find($id)->delete();
        return $response;
    }
}
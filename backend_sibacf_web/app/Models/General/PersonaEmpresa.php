<?php

namespace app\Models\General;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PersonaEmpresa extends Model
{
    protected $shema = 'sch_general';
    protected $table = 'sch_general.persona_empresa';
    protected $filltable = [
        'id_persona_empresa',
        'persona_id',
        'empresa_id',
        'fecha_creacion',
        'usuario_creacion',
        'fecha_actualizacion',
        'usuario_actualizacion',
        'estado_id'
    ];


    public function get_persona_empresa()
    {
        $result = DB::table('sch_general.persona_empresa')->get();
        return $result;
    }

    public function get_persona_empresa_id($id)
    {
        $result = PersonaEmpresa::where('id_persona_empresa',$id)->first();
        return $result;
    }

    public function create_persona_empresa($objectSave)
    {
       $rowCreated = PersonaEmpresa::create($objectSave);
       $response = PersonaEmpresa::where('id_persona_empresa',$rowCreated->id)->first();
       return $rowCreated->id;
    }

    public function update_persona_empresa($id, $objectSave)
    {
        $update = PersonaEmpresa::find($id)->update($objectSave);
        $response = PersonaEmpresa::where('id_persona_empresa',$id)->first();
        return $response;
    }

    public function delete_persona_empresa($id)
    {
        $response = PersonaEmpresa::find($id)->delete();
        return $response;
    }
}
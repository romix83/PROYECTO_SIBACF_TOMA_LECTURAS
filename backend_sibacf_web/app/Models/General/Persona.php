<?php

namespace app\Models\General;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Persona extends Model
{
    protected $shema = 'sch_general';
    protected $table = 'sch_general.persona';
    protected $filltable = [
        'id_persona',
        'tipo_identificacion_id',
        'identificacion',
        'personeria_id',
        'nombres',
        'apellidos',
        'razon_social',
        'nombre_comercial',
        'genero_id',
        'fecha_nacimiento',
        'estado_civil_id',
        'tipo_sangre_id',
        'trato_id',
        'codigo',
        'es_relacionado',
        'telefono_fijo',
        'extension_fijo',
        'telefono_alterno_fijo',
        'extension_alterno_fijo',
        'telefono_movil',
        'correo_electronico',
        'cc_correo_electronico',
        'pagina_web',
        'tipo_dicapacidad_id',
        'porcentaje_discapacidad',
        'fecha_creacion',
        'usuario_creacion',
        'fecha_actualizacion',
        'usuario_actualizacion',
        'estado_id'
    ];


    public function get_persona()
    {
        $result = DB::table('sch_general.persona')->get();
        return $result;
    }

    public function get_persona_id($id)
    {
        $result = Persona::where('id_persona',$id)->first();
        return $result;
    }

    public function create_persona($objectSave)
    {
       $rowCreated = Persona::create($objectSave);
       $response = Persona::where('id_persona',$rowCreated->id)->first();
       return $rowCreated->id;
    }

    public function update_persona($id, $objectSave)
    {
        $update = Persona::find($id)->update($objectSave);
        $response = Persona::where('id_persona',$id)->first();
        return $response;
    }

    public function delete_persona($id)
    {
        $response = Persona::find($id)->delete();
        return $response;
    }
}
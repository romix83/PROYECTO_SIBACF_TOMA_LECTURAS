<?php

namespace app\Models\General;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Empresa extends Model
{
    protected $shema = 'sch_general';
    protected $table = 'sch_general.empresa';
    protected $filltable = [
        'id_empresa',
        'tipo_identificacion_id',
        'identificacion',
        'personeria_id',
        'razon_social',
        'nombre_comercial',
        'obligado_contabilidad',
        'resolucion_contribuyente_especial',
        'regimen_microempresa',
        'agente_retencion',
        'resolucion_agente_retencion',
        'ambiente_id',
        'tipo_emision_id',
        'moneda_id',
        'version_comprobante_id',
        'servidor_correo',
        'puerto_correo',
        'correo_origen',
        'nombre_correo_origen',
        'usuario_correo',
        'pass_correo',
        'telefono_fijo',
        'extension_fijo',
        'telefono_alterno_fijo',
        'extension_alterno_fijo',
        'telefono_movil',
        'correo_electronico',
        'cc_correo_electronico',
        'pagina_web',
        'logo',
        'fecha_creacion',
        'usuario_creacion',
        'fecha_actualizacion',
        'usuario_actualizacion',
        'estado_id'
    ];


    public function get_empresa()
    {
        $result = DB::table('sch_general.empresa')->get();
        return $result;
    }

    public function get_empresa_id($id)
    {
        $result = Empresa::where('id_empresa',$id)->first();
        return $result;
    }

    public function create_empresa($objectSave)
    {
       $rowCreated = Empresa::create($objectSave);
       $response = Empresa::where('id_empresa',$rowCreated->id)->first();
       return $rowCreated->id;
    }

    public function update_empresa($id, $objectSave)
    {
        $update = Empresa::find($id)->update($objectSave);
        $response = Empresa::where('id_empresa',$id)->first();
        return $response;
    }

    public function delete_empresa($id)
    {
        $response = Empresa::find($id)->delete();
        return $response;
    }
}
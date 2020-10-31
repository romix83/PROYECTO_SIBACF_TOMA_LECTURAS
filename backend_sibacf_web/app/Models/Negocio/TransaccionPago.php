<?php

namespace app\Models\Negocio;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TransaccionPago extends Model
{
    protected $shema = 'sch_negocio';
    protected $table = 'sch_negocio.transaccion_pago';
    protected $filltable = [
        'id_transaccion_pago',
        'empresa_id',
        'origen_pago_id',
        'numero_documento',
        'fecha_generacion_documento',
        'nombre_archivo',
        'alias_archivo',
        'path_archivo',
        'observacion_pago',
        'fecha_creacion',
        'usuario_creacion',
        'fecha_actualizacion',
        'usuario_actualizacion',
        'estado_id'
    ];


    public function get_transaccion_pago()
    {
        $result = DB::table('sch_negocio.transaccion_pago')->get();
        return $result;
    }

    public function get_transaccion_pago_id($id)
    {
        $result = TransaccionPago::where('id_transaccion_pago',$id)->first();
        return $result;
    }

    public function create_transaccion_pago($objectSave)
    {
       $rowCreated = TransaccionPago::create($objectSave);
       $response = TransaccionPago::where('id_transaccion_pago',$rowCreated->id)->first();
       return $rowCreated->id;
    }

    public function update_transaccion_pago($id, $objectSave)
    {
        $update = TransaccionPago::find($id)->update($objectSave);
        $response = TransaccionPago::where('id_transaccion_pago',$id)->first();
        return $response;
    }

    public function delete_transaccion_pago($id)
    {
        $response = TransaccionPago::find($id)->delete();
        return $response;
    }
}
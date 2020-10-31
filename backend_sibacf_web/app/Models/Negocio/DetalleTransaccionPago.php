<?php

namespace app\Models\Negocio;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DetalleTransaccionPago extends Model
{
    protected $shema = 'sch_negocio';
    protected $table = 'sch_negocio.detalle_transaccion_pago';
    protected $filltable = [
        'id_detalle_transaccion_pago',
        'transaccion_pago_id',
        'concepto_pago_id',
        'consumo_id',
        'valor_pago',
        'fecha_creacion',
        'usuario_creacion',
        'fecha_actualizacion',
        'usuario_actualizacion',
        'estado_id'
    ];


    public function get_detalle_transaccion_pago()
    {
        $result = DB::table('sch_negocio.detalle_transaccion_pago')->get();
        return $result;
    }

    public function get_detalle_transaccion_pago_id($id)
    {
        $result = DetalleTransaccionPago::where('id_detalle_transaccion_pago',$id)->first();
        return $result;
    }

    public function create_detalle_transaccion_pago($objectSave)
    {
       $rowCreated = DetalleTransaccionPago::create($objectSave);
       $response = DetalleTransaccionPago::where('id_detalle_transaccion_pago',$rowCreated->id)->first();
       return $rowCreated->id;
    }

    public function update_detalle_transaccion_pago($id, $objectSave)
    {
        $update = DetalleTransaccionPago::find($id)->update($objectSave);
        $response = DetalleTransaccionPago::where('id_detalle_transaccion_pago',$id)->first();
        return $response;
    }

    public function delete_detalle_transaccion_pago($id)
    {
        $response = DetalleTransaccionPago::find($id)->delete();
        return $response;
    }
}
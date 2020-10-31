<?php

namespace app\Models\Negocio;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DetallePago extends Model
{
    protected $shema = 'sch_negocio';
    protected $table = 'sch_negocio.detalle_pago';
    protected $filltable = [
        'id_detalle_pago',
        'transaccion_pago_id',
        'forma_pago_id',
        'banco_id',
        'cuenta_bancaria',
        'referencia',
        'valor_pago',
        'fecha_creacion',
        'usuario_creacion',
        'fecha_actualizacion',
        'usuario_actualizacion',
        'estado_id'
    ];


    public function get_detalle_pago()
    {
        $result = DB::table('sch_negocio.detalle_pago')->get();
        return $result;
    }

    public function get_detalle_pago_id($id)
    {
        $result = DetallePago::where('id_detalle_pago',$id)->first();
        return $result;
    }

    public function create_detalle_pago($objectSave)
    {
       $rowCreated = DetallePago::create($objectSave);
       $response = DetallePago::where('id_detalle_pago',$rowCreated->id)->first();
       return $rowCreated->id;
    }

    public function update_detalle_pago($id, $objectSave)
    {
        $update = DetallePago::find($id)->update($objectSave);
        $response = DetallePago::where('id_detalle_pago',$id)->first();
        return $response;
    }

    public function delete_detalle_pago($id)
    {
        $response = DetallePago::find($id)->delete();
        return $response;
    }
}
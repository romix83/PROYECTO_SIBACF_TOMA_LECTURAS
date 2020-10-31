<?php

namespace app\Models\Negocio;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Consumo extends Model
{
    protected $shema = 'sch_negocio';
    protected $table = 'sch_negocio.consumo';
    protected $filltable = [
        'id_consumo',
        'asignacion_serie_id',
        'periodo_id',
        'fecha_toma_lectura',
        'lectura_anterior',
        'lectura_actual',
        'fecha_maxima_pago',
        'observacion',
        'consumo_basico_id',
        'excedente_id',
        'umbral_id',
        'valor_consumo_basico',
        'valor_consumo_excedente',
        'valor_consumo_umbral',
        'valor_multa_acumulada',
        'valor_total',
        'abono',
        'saldo',
        'fecha_ultima_consulta',
        'fecha_creacion',
        'usuario_creacion',
        'fecha_actualizacion',
        'usuario_actualizacion',
        'estado_id'
    ];


    public function get_consumo()
    {
        $result = DB::table('sch_negocio.consumo')->get();
        return $result;
    }

    public function get_consumo_id($id)
    {
        $result = Consumo::where('id_consumo',$id)->first();
        return $result;
    }

    public function create_consumo($objectSave)
    {
       $rowCreated = Consumo::create($objectSave);
       $response = Consumo::where('id_consumo',$rowCreated->id)->first();
       return $rowCreated->id;
    }

    public function update_consumo($id, $objectSave)
    {
        $update = Consumo::find($id)->update($objectSave);
        $response = Consumo::where('id_consumo',$id)->first();
        return $response;
    }

    public function delete_consumo($id)
    {
        $response = Consumo::find($id)->delete();
        return $response;
    }
}
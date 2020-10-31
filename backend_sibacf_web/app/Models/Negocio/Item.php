<?php

namespace app\Models\Negocio;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Item extends Model
{
    protected $shema = 'sch_negocio';
    protected $table = 'sch_negocio.item';
    protected $filltable = [
        'id_item',
        'empresa_id',
        'codigo',
        'codigo_alterno',
        'nombre',
        'detalle',
        'nemonico',
        'indicador_serie',
        'indicador_comercial',
        'afecta_inventario',
        'ultimo_precio_compra',
        'fecha_ultimo_precio_compra',
        'iva_id',
        'ice_id',
        'marca_id',
        'tipo_inventario_id',
        'tipo_producto_id',
        'medida_d_id',
        'medida_a_id',
        'factor',
        'producto_compuesto',
        'maneja_lote',
        'desagregar_produto_compuesto',
        'fecha_creacion',
        'usuario_creacion',
        'fecha_actualizacion',
        'usuario_actualizacion',
        'estado_id'
    ];


    public function get_item()
    {
        $result = DB::table('sch_negocio.item')->get();
        return $result;
    }

    public function get_item_id($id)
    {
        $result = Item::where('id_item',$id)->first();
        return $result;
    }

    public function create_item($objectSave)
    {
       $rowCreated = Item::create($objectSave);
       $response = Item::where('id_item',$rowCreated->id)->first();
       return $rowCreated->id;
    }

    public function update_item($id, $objectSave)
    {
        $update = Item::find($id)->update($objectSave);
        $response = Item::where('id_item',$id)->first();
        return $response;
    }

    public function delete_item($id)
    {
        $response = Item::find($id)->delete();
        return $response;
    }
}
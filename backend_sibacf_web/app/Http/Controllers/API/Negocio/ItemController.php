<?php

namespace app\Http\Controllers\API\Negocio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Negocio\Item;

class ItemController extends Controller
{
    public function get_item(Request $request)
    {
        $item = new Item; 
        $item = $item->get_item();
        
        return response()->json([
            'data' => $item,
        ]);
    }

    public function get_item_id(Request $request, $id)
    {
        $item = new Item; 
        $item = $item->get_item_id($id);
        
        return response()->json([
            'data' => $item,
        ]);
    }

    public function save_item(Request $request)
    {
        $item = new Item; 
        $id = $request->input('id_item');
        $empresa_id = $request->input('empresa_id');
        $codigo->input('codigo');
        $codigo_alterno->input('codigo_alterno');
        $nombre = $request->input('nombre');
        $detalle->input('detalle');
        $nemonico->input('nemonico');
        $indicador_serie->input('indicador_serie');
        $indicador_comercial = $request->input('indicador_comercial');
        $afecta_inventario->input('afecta_inventario');
        $ultimo_precio_compra->input('ultimo_precio_compra');
        $fecha_ultimo_precio_compra->input('fecha_ultimo_precio_compra');
        $iva_id = $request->input('iva_id');
        $ice_id->input('ice_id');
        $marca_id = $request->input('marca_id');
        $tipo_inventario_id->input('tipo_inventario_id');
        $tipo_producto_id = $request->input('tipo_producto_id');
        $medida_d_id->input('medida_d_id');
        $medida_a_id = $request->input('medida_a_id');
        $factor->input('factor');
        $producto_compuesto = $request->input('producto_compuesto');
        $maneja_lote->input('maneja_lote');
        $desagregar_produto_compuesto = $request->input('desagregar_produto_compuesto');
        $fecha_creacion = $request->input('fecha_creacion');
        $usuario_creacion = $request->input('usuario_creacion');
        $fecha_actualizacion = $request->input('fecha_actualizacion');
        $usuario_actualizacion = $request->input('usuario_actualizacion');
        $estado_id = $request->input('estado_id');
 
        $objectSave = [
            'empresa_id' => $empresa_id,
            'codigo' => $codigo,
            'codigo_alterno' => $codigo_alterno,
            'nombre' => $nombre,
            'detalle' => $detalle,
            'nemonico' => $nemonico,
            'indicador_serie' => $indicador_serie,
            'indicador_comercial' => $indicador_comercial,
            'afecta_inventario' => $afecta_inventario,
            'ultimo_precio_compra' => $ultimo_precio_compra,
            'fecha_ultimo_precio_compra' => $fecha_ultimo_precio_compra,
            'iva_id' => $iva_id,
            'ice_id' => $ice_id,
            'marca_id' => $marca_id,
            'tipo_inventario_id' => $tipo_inventario_id,
            'tipo_producto_id' => $tipo_producto_id,
            'medida_d_id' => $medida_d_id,
            'medida_a_id' => $medida_a_id,
            'factor' => $factor,
            'producto_compuesto' => $producto_compuesto,
            'maneja_lote' => $maneja_lote,
            'desagregar_produto_compuesto' => $desagregar_produto_compuesto,
            'fecha_creacion' => $fecha_creacion,
            'usuario_creacion' => $usuario_creacion,
            'fecha_actualizacion' => $fecha_actualizacion,
            'usuario_actualizacion' => $usuario_actualizacion,
            'estado_id' => $estado_id,
        ];

        if($id != 'null'){
            
            $response = $item->update_item($id, $objectSave);
        }else{
            $id_item = $item->create_item($objectSave);
        }

        $data = $item->get_item();
        
        return response()->json([
            "error" => "ERROR..",
            "data" => $data
        ]);
    }

}
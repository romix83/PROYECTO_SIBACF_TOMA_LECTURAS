<?php

namespace app\Http\Controllers\API\Negocio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Negocio\DetallePago;

class DetallePagoController extends Controller
{
    public function get_detalle_pago(Request $request)
    {
        $detalle_pago = new DetallePago; 
        $detalle_pago = $detalle_pago->get_detalle_pago();
        
        return response()->json([
            'data' => $detalle_pago,
        ]);
    }

    public function get_detalle_pago_id(Request $request, $id)
    {
        $detalle_pago = new DetallePago; 
        $detalle_pago = $detalle_pago->get_detalle_pago_id($id);
        
        return response()->json([
            'data' => $detalle_pago,
        ]);
    }

    public function save_detalle_pago(Request $request)
    {
        $detalle_pago = new DetallePago; 
        $id = $request->input('id_detalle_pago');
        $transaccion_pago_id = $request->input('transaccion_pago_id');
        $forma_pago_id->input('forma_pago_id');
        $banco_id->input('banco_id');
        $cuenta_bancaria = $request->input('cuenta_bancaria');
        $referencia->input('referencia');
        $valor_pago->input('valor_pago');
        $fecha_creacion = $request->input('fecha_creacion');
        $usuario_creacion = $request->input('usuario_creacion');
        $fecha_actualizacion = $request->input('fecha_actualizacion');
        $usuario_actualizacion = $request->input('usuario_actualizacion');
        $estado_id = $request->input('estado_id');
 
        $objectSave = [
            'transaccion_pago_id' => $transaccion_pago_id,
            'forma_pago_id' => $forma_pago_id,
            'banco_id' => $banco_id,
            'cuenta_bancaria' => $cuenta_bancaria,
            'referencia' => $referencia,
            'valor_pago' => $valor_pago,
            'fecha_creacion' => $fecha_creacion,
            'usuario_creacion' => $usuario_creacion,
            'fecha_actualizacion' => $fecha_actualizacion,
            'usuario_actualizacion' => $usuario_actualizacion,
            'estado_id' => $estado_id,
        ];

        if($id != 'null'){
            
            $response = $detalle_pago->update_detalle_pago($id, $objectSave);
        }else{
            $id_detalle_pago = $detalle_pago->create_detalle_pago($objectSave);
        }

        $data = $detalle_pago->get_detalle_pago();
        
        return response()->json([
            "error" => "ERROR..",
            "data" => $data
        ]);
    }

}
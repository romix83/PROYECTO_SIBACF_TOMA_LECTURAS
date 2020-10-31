<?php

namespace app\Http\Controllers\API\Negocio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Negocio\DetalleTransaccionPago;

class DetalleTransaccionPagoController extends Controller
{
    public function get_detalle_transaccion_pago(Request $request)
    {
        $detalle_transaccion_pago = new DetalleTransaccionPago; 
        $detalle_transaccion_pago = $detalle_transaccion_pago->get_detalle_transaccion_pago();
        
        return response()->json([
            'data' => $detalle_transaccion_pago,
        ]);
    }

    public function get_detalle_transaccion_pago_id(Request $request, $id)
    {
        $detalle_transaccion_pago = new DetalleTransaccionPago; 
        $detalle_transaccion_pago = $detalle_transaccion_pago->get_detalle_transaccion_pago_id($id);
        
        return response()->json([
            'data' => $detalle_transaccion_pago,
        ]);
    }

    public function save_detalle_transaccion_pago(Request $request)
    {
        $detalle_transaccion_pago = new DetalleTransaccionPago; 
        $id = $request->input('id_detalle_transaccion_pago');
        $transaccion_pago_id = $request->input('transaccion_pago_id');
        $concepto_pago_id->input('concepto_pago_id');
        $consumo_id->input('consumo_id');
        $valor_pago = $request->input('valor_pago');
        $fecha_creacion = $request->input('fecha_creacion');
        $usuario_creacion = $request->input('usuario_creacion');
        $fecha_actualizacion = $request->input('fecha_actualizacion');
        $usuario_actualizacion = $request->input('usuario_actualizacion');
        $estado_id = $request->input('estado_id');
 
        $objectSave = [
            'transaccion_pago_id' => $transaccion_pago_id,
            'concepto_pago_id' => $concepto_pago_id,
            'consumo_id' => $consumo_id,
            'valor_pago' => $valor_pago,
            'fecha_creacion' => $fecha_creacion,
            'usuario_creacion' => $usuario_creacion,
            'fecha_actualizacion' => $fecha_actualizacion,
            'usuario_actualizacion' => $usuario_actualizacion,
            'estado_id' => $estado_id,
        ];

        if($id != 'null'){
            
            $response = $detalle_transaccion_pago->update_detalle_transaccion_pago($id, $objectSave);
        }else{
            $id_detalle_transaccion_pago = $detalle_transaccion_pago->create_detalle_transaccion_pago($objectSave);
        }

        $data = $detalle_transaccion_pago->get_detalle_transaccion_pago();
        
        return response()->json([
            "error" => "ERROR..",
            "data" => $data
        ]);
    }

}
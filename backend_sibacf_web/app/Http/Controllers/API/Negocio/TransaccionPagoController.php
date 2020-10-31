<?php

namespace app\Http\Controllers\API\Negocio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Negocio\TransaccionPago;

class TransaccionPagoController extends Controller
{
    public function get_transaccion_pago(Request $request)
    {
        $transaccion_pago = new TransaccionPago; 
        $transaccion_pago = $transaccion_pago->get_transaccion_pago();
        
        return response()->json([
            'data' => $transaccion_pago,
        ]);
    }

    public function get_transaccion_pago_id(Request $request, $id)
    {
        $transaccion_pago = new TransaccionPago; 
        $transaccion_pago = $transaccion_pago->get_transaccion_pago_id($id);
        
        return response()->json([
            'data' => $transaccion_pago,
        ]);
    }

    public function save_transaccion_pago(Request $request)
    {
        $transaccion_pago = new TransaccionPago; 
        $id = $request->input('id_transaccion_pago');
        $empresa_id = $request->input('empresa_id');
        $origen_pago_id->input('origen_pago_id');
        $numero_documento->input('numero_documento');
        $fecha_generacion_documento = $request->input('fecha_generacion_documento');
        $nombre_archivo = $request->input('nombre_archivo');
        $alias_archivo->input('alias_archivo');
        $path_archivo->input('path_archivo');
        $observacion_pago = $request->input('observacion_pago');
        $fecha_creacion = $request->input('fecha_creacion');
        $usuario_creacion = $request->input('usuario_creacion');
        $fecha_actualizacion = $request->input('fecha_actualizacion');
        $usuario_actualizacion = $request->input('usuario_actualizacion');
        $estado_id = $request->input('estado_id');
 
        $objectSave = [
            'empresa_id' => $empresa_id,
            'origen_pago_id' => $origen_pago_id,
            'numero_documento' => $numero_documento,
            'fecha_generacion_documento' => $fecha_generacion_documento,
            'nombre_archivo' => $nombre_archivo,
            'alias_archivo' => $alias_archivo,
            'path_archivo' => $path_archivo,
            'observacion_pago' => $observacion_pago,
            'fecha_creacion' => $fecha_creacion,
            'usuario_creacion' => $usuario_creacion,
            'fecha_actualizacion' => $fecha_actualizacion,
            'usuario_actualizacion' => $usuario_actualizacion,
            'estado_id' => $estado_id,
        ];

        if($id != 'null'){
            
            $response = $transaccion_pago->update_transaccion_pago($id, $objectSave);
        }else{
            $id_transaccion_pago = $transaccion_pago->create_transaccion_pago($objectSave);
        }

        $data = $transaccion_pago->get_transaccion_pago();
        
        return response()->json([
            "error" => "ERROR..",
            "data" => $data
        ]);
    }

}
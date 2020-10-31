<?php

namespace app\Http\Controllers\API\Negocio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Negocio\Consumo;

class ConsumoController extends Controller
{
    public function get_consumo(Request $request)
    {
        $consumo = new Consumo; 
        $consumo = $consumo->get_consumo();
        
        return response()->json([
            'data' => $consumo,
        ]);
    }

    public function get_consumo_id(Request $request, $id)
    {
        $consumo = new Consumo; 
        $consumo = $consumo->get_consumo_id($id);
        
        return response()->json([
            'data' => $consumo,
        ]);
    }

    public function save_consumo(Request $request)
    {
        $consumo = new Consumo; 
        $id = $request->input('id_consumo');
        $asignacion_serie_id = $request->input('asignacion_serie_id');
        $periodo_id->input('periodo_id');
        $fecha_toma_lectura->input('fecha_toma_lectura');
        $lectura_anterior = $request->input('lectura_anterior');
        $lectura_actual->input('lectura_actual');
        $fecha_maxima_pago->input('fecha_maxima_pago');
        $observacion->input('observacion');
        $consumo_basico_id = $request->input('consumo_basico_id');
        $excedente_id->input('excedente_id');
        $umbral_id->input('umbral_id');
        $valor_consumo_basico->input('valor_consumo_basico');
        $valor_consumo_excedente = $request->input('valor_consumo_excedente');
        $valor_consumo_umbral->input('valor_consumo_umbral');
        $valor_multa_acumulada->input('valor_multa_acumulada');
        $valor_total->input('valor_total');
        $abono->input('abono');
        $saldo = $request->input('saldo');
        $fecha_ultima_consulta->input('fecha_ultima_consulta');
        $fecha_creacion = $request->input('fecha_creacion');
        $usuario_creacion = $request->input('usuario_creacion');
        $fecha_actualizacion = $request->input('fecha_actualizacion');
        $usuario_actualizacion = $request->input('usuario_actualizacion');
        $estado_id = $request->input('estado_id');
 
        $objectSave = [
            'asignacion_serie_id' => $asignacion_serie_id,
            'periodo_id' => $periodo_id,
            'fecha_toma_lectura' => $fecha_toma_lectura,
            'lectura_anterior' => $lectura_anterior,
            'lectura_actual' => $lectura_actual,
            'fecha_maxima_pago' => $fecha_maxima_pago,
            'observacion' => $observacion,
            'consumo_basico_id' => $consumo_basico_id,
            'excedente_id' => $excedente_id,
            'umbral_id' => $umbral_id,
            'valor_consumo_basico' => $valor_consumo_basico,
            'valor_consumo_excedente' => $valor_consumo_excedente,
            'valor_consumo_umbral' => $valor_consumo_umbral,
            'valor_multa_acumulada' => $valor_multa_acumulada,
            'valor_total' => $valor_total,
            'abono' => $abono,
            'saldo' => $saldo,
            'fecha_ultima_consulta' => $fecha_ultima_consulta,
            'fecha_creacion' => $fecha_creacion,
            'usuario_creacion' => $usuario_creacion,
            'fecha_actualizacion' => $fecha_actualizacion,
            'usuario_actualizacion' => $usuario_actualizacion,
            'estado_id' => $estado_id,
        ];

        if($id != 'null'){
            
            $response = $consumo->update_consumo($id, $objectSave);
        }else{
            $id_consumo = $consumo->create_consumo($objectSave);
        }

        $data = $consumo->get_consumo();
        
        return response()->json([
            "error" => "ERROR..",
            "data" => $data
        ]);
    }

}
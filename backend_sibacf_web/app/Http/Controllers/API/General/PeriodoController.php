<?php

namespace app\Http\Controllers\API\General;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\General\Periodo;

class PeriodoController extends Controller
{
    public function get_periodo(Request $request)
    {
        $periodo = new Periodo; 
        $periodo = $periodo->get_periodo();
        
        return response()->json([
            'data' => $periodo,
        ]);
    }

    public function get_periodo_id(Request $request, $id)
    {
        $periodo = new Periodo; 
        //$id = $request->input('id_periodo');
        $periodo = $periodo->get_periodo_id($id);
        
        return response()->json([
            'data' => $periodo,
        ]);
    }

    public function save_periodo(Request $request)
    {
        $periodo = new Periodo; 
        $id = $request->input('id_periodo');
        $empresa_id = $request->input('empresa_id');
        $nombre = $request->input('nombre');
        $anio = $request->input('anio');
        $mes = $request->input('mes');
        $fecha_creacion = $request->input('fecha_creacion');
        $usuario_creacion = $request->input('usuario_creacion');
        $fecha_actualizacion = $request->input('fecha_actualizacion');
        $usuario_actualizacion = $request->input('usuario_actualizacion');
        $estado_id = $request->input('estado_id');
 
        $objectSave = [
            'empresa_id' => $empresa_id,
            'nombre' => $nombre,
            'anio' => $anio,
            'mes' => $mes,
            'fecha_creacion' => $fecha_creacion,
            'usuario_creacion' => $usuario_creacion,
            'fecha_actualizacion' => $fecha_actualizacion,
            'usuario_actualizacion' => $usuario_actualizacion,
            'estado_id' => $estado_id,
        ];

        if($id != 'null'){
            
            $response = $periodo->update_periodo($id, $objectSave);
        }else{
            $id_periodo = $periodo->create_periodo($objectSave);
        }

        $data = $periodo->get_periodo();
        
        return response()->json([
            "error" => "ERROR..",
            "data" => $data
        ]);
    }

}
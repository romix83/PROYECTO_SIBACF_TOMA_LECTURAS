<?php

namespace app\Http\Controllers\API\Negocio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Negocio\AsignacionSerie;

class AsignacionSerieController extends Controller
{
    public function get_asignacion_serie(Request $request)
    {
        $asignacion_serie = new AsignacionSerie; 
        $asignacion_serie = $asignacion_serie->get_asignacion_serie();
        
        return response()->json([
            'data' => $asignacion_serie,
        ]);
    }

    public function get_asignacion_serie_id(Request $request, $id)
    {
        $asignacion_serie = new AsignacionSerie; 
        $asignacion_serie = $asignacion_serie->get_asignacion_serie_id($id);
        
        return response()->json([
            'data' => $asignacion_serie,
        ]);
    }

    public function save_asignacion_serie(Request $request)
    {
        $asignacion_serie = new AsignacionSerie; 
        $id = $request->input('id_asignacion_serie');
        $serie_id = $request->input('serie_id');
        $persona_empresa_id->input('persona_empresa_id');
        $fecha_instalacion->input('fecha_instalacion');
        $lectura_inicial = $request->input('lectura_inicial');
        $ciclo->input('ciclo');
        $sector_id->input('sector_id');
        $ruta->input('ruta');
        $manzana = $request->input('manzana');
        $numero_piso->input('numero_piso');
        $numero_casa->input('sector_inumero_casad');
        $numero_lote->input('numero_lote');
        $longitud = $request->input('longitud');
        $latitud->input('latitud');
        $fecha_creacion = $request->input('fecha_creacion');
        $usuario_creacion = $request->input('usuario_creacion');
        $fecha_actualizacion = $request->input('fecha_actualizacion');
        $usuario_actualizacion = $request->input('usuario_actualizacion');
        $estado_id = $request->input('estado_id');
 
        $objectSave = [
            'serie_id' => $serie_id,
            'persona_empresa_id' => $persona_empresa_id,
            'fecha_instalacion' => $fecha_instalacion,
            'lectura_inicial' => $lectura_inicial,
            'ciclo' => $ciclo,
            'sector_id' => $sector_id,
            'ruta' => $ruta,
            'manzana' => $manzana,
            'numero_piso' => $numero_piso,
            'numero_casa' => $numero_casa,
            'numero_lote' => $numero_lote,
            'longitud' => $longitud,
            'latitud' => $latitud,
            'fecha_creacion' => $fecha_creacion,
            'usuario_creacion' => $usuario_creacion,
            'fecha_actualizacion' => $fecha_actualizacion,
            'usuario_actualizacion' => $usuario_actualizacion,
            'estado_id' => $estado_id,
        ];

        if($id != 'null'){
            
            $response = $asignacion_serie->update_asignacion_serie($id, $objectSave);
        }else{
            $id_asignacion_serie = $asignacion_serie->create_asignacion_serie($objectSave);
        }

        $data = $asignacion_serie->get_asignacion_serie();
        
        return response()->json([
            "error" => "ERROR..",
            "data" => $data
        ]);
    }

}
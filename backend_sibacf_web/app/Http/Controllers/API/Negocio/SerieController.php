<?php

namespace app\Http\Controllers\API\Negocio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Negocio\Serie;

class SerieController extends Controller
{
    public function get_serie(Request $request)
    {
        $serie = new Serie; 
        $serie = $serie->get_serie();
        
        return response()->json([
            'data' => $serie,
        ]);
    }

    public function get_serie_id(Request $request, $id)
    {
        $serie = new Serie; 
        $serie = $serie->get_serie_id($id);
        
        return response()->json([
            'data' => $serie,
        ]);
    }

    public function save_serie(Request $request)
    {
        $serie = new Serie; 
        $id = $request->input('id_serie');
        $articulo_id = $request->input('articulo_id');
        $codigo->input('codigo');
        $tipo->input('tipo');
        $modelo = $request->input('modelo');
        $fecha_creacion = $request->input('fecha_creacion');
        $usuario_creacion = $request->input('usuario_creacion');
        $fecha_actualizacion = $request->input('fecha_actualizacion');
        $usuario_actualizacion = $request->input('usuario_actualizacion');
        $estado_id = $request->input('estado_id');
 
        $objectSave = [
            'articulo_id' => $articulo_id,
            'codigo' => $codigo,
            'tipo' => $tipo,
            'modelo' => $modelo,
            'fecha_creacion' => $fecha_creacion,
            'usuario_creacion' => $usuario_creacion,
            'fecha_actualizacion' => $fecha_actualizacion,
            'usuario_actualizacion' => $usuario_actualizacion,
            'estado_id' => $estado_id,
        ];

        if($id != 'null'){
            
            $response = $serie->update_serie($id, $objectSave);
        }else{
            $id_serie = $serie->create_serie($objectSave);
        }

        $data = $serie->get_serie();
        
        return response()->json([
            "error" => "ERROR..",
            "data" => $data
        ]);
    }

}
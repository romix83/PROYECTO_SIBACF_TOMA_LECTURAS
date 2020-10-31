<?php

namespace app\Http\Controllers\API\General;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\General\Parametro;

class ParametroController extends Controller
{
    public function get_parametro(Request $request)
    {
        $parametro = new Parametro; 
        $parametro = $parametro->get_parametro();
        
        return response()->json([
            'data' => $parametro,
        ]);
    }

    public function get_parametro_id(Request $request, $id)
    {
        $parametro = new Parametro; 
        //$id = $request->input('id_parametro');
        $parametro = $parametro->get_parametro_id($id);
        
        return response()->json([
            'data' => $parametro,
        ]);
    }

    public function save_parametro(Request $request)
    {
        $parametro = new Parametro; 
        $id = $request->input('id_parametro');
        $grupo_parametro_id = $request->input('grupo_parametro_id');
        $empresa_id = $request->input('empresa_id');
        $modulo_id = $request->input('modulo_id');
        $nombre = $request->input('nombre');
        $descripcion = $request->input('descripcion');
        $nemonico = $request->input('nemonico');
        $codigo_auxiliar = $request->input('codigo_auxiliar');
        $valor_auxiliar = $request->input('valor_auxiliar');
        $valor = $request->input('valor');
        $fecha_creacion = $request->input('fecha_creacion');
        $usuario_creacion = $request->input('usuario_creacion');
        $fecha_actualizacion = $request->input('fecha_actualizacion');
        $usuario_actualizacion = $request->input('usuario_actualizacion');
        $estado_id = $request->input('estado_id');
 
        $objectSave = [
            'grupo_parametro_id' => $grupo_parametro_id,
            'empresa_id' => $empresa_id,
            'modulo_id' => $modulo_id,
            'nombre' => $nombre,
            'descripcion' => $descripcion,
            'nemonico' => $nemonico,
            'codigo_auxiliar' => $codigo_auxiliar,
            'valor_auxiliar' => $valor_auxiliar,
            'valor' => $valor,
            'fecha_creacion' => $fecha_creacion,
            'usuario_creacion' => $usuario_creacion,
            'fecha_actualizacion' => $fecha_actualizacion,
            'usuario_actualizacion' => $usuario_actualizacion,
            'estado_id' => $estado_id,
        ];

        if($id != 'null'){
            
            $response = $parametro->update_parametro($id, $objectSave);
        }else{
            $id_parametro = $parametro->create_parametro($objectSave);
        }

        $data = $parametro->get_parametro();
        
        return response()->json([
            "error" => "ERROR..",
            "data" => $data
        ]);
    }

}
<?php

namespace app\Http\Controllers\API\General;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\General\GrupoParametro;

class GrupoParametroController extends Controller
{
    public function get_grupo_parametro(Request $request)
    {
        $grupo_parametro = new GrupoParametro; 
        $grupo_parametro = $grupo_parametro->get_grupo_parametro();
        
        return response()->json([
            'data' => $grupo_parametro,
        ]);
    }

    public function get_grupo_parametro_id(Request $request, $id)
    {
        $grupo_parametro = new GrupoParametro; 
        //$id = $request->input('id_grupo_parametro');
        $grupo_parametro = $grupo_parametro->get_grupo_parametro_id($id);
        
        return response()->json([
            'data' => $grupo_parametro,
        ]);
    }

    public function save_grupo_parametro(Request $request)
    {
        $grupo_parametro = new GrupoParametro; 
        $id = $request->input('id_grupo_parametro');
        $nombre = $request->input('nombre');
        $descripcion = $request->input('descripcion');
        $nemonico = $request->input('nemonico');
        $codigo_auxiliar = $request->input('codigo_auxiliar');
        $fecha_creacion = $request->input('fecha_creacion');
        $usuario_creacion = $request->input('usuario_creacion');
        $fecha_actualizacion = $request->input('fecha_actualizacion');
        $usuario_actualizacion = $request->input('usuario_actualizacion');
        $estado_id = $request->input('estado_id');
 
        $objectSave = [
            'nombre' => $nombre,
            'descripcion' => $descripcion,
            'nemonico' => $nemonico,
            'codigo_auxiliar' => $codigo_auxiliar,
            'fecha_creacion' => $fecha_creacion,
            'usuario_creacion' => $usuario_creacion,
            'fecha_actualizacion' => $fecha_actualizacion,
            'usuario_actualizacion' => $usuario_actualizacion,
            'estado_id' => $estado_id,
        ];

        if($id != 'null'){
            
            $response = $grupo_parametro->update_grupo_parametro($id, $objectSave);
        }else{
            $id_grupo_parametro = $grupo_parametro->create_grupo_parametro($objectSave);
        }

        $data = $grupo_parametro->get_grupo_parametro();
        
        return response()->json([
            "error" => "ERROR..",
            "data" => $data
        ]);
    }

}
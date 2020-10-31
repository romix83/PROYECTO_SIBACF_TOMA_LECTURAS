<?php

namespace app\Http\Controllers\API\General;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\General\GrupoCatalogo;

class GrupoCatalogoController extends Controller
{
    public function get_grupo_catalogo(Request $request)
    {
        $grupo_catalogo = new GrupoCatalogo; 
        $grupo_catalogo = $grupo_catalogo->get_grupo_catalogo();
        
        return response()->json([
            'data' => $grupo_catalogo,
        ]);
    }

    public function get_grupo_catalogo_id(Request $request, $id)
    {
        $grupo_catalogo = new GrupoCatalogo; 
        //$id = $request->input('id_grupo_catalogo');
        $grupo_catalogo = $grupo_catalogo->get_grupo_catalogo_id($id);
        
        return response()->json([
            'data' => $grupo_catalogo,
        ]);
    }

    public function save_grupo_catalogo(Request $request)
    {
        $grupo_catalogo = new GrupoCatalogo; 
        $id = $request->input('id_grupo_catalogo');
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
            
            $response = $grupo_catalogo->update_grupo_catalogo($id, $objectSave);
        }else{
            $id_grupo_catalogo = $grupo_catalogo->create_grupo_catalogo($objectSave);
        }

        $data = $grupo_catalogo->get_grupo_catalogo();
        
        return response()->json([
            "error" => "ERROR..",
            "data" => $data
        ]);
    }

}
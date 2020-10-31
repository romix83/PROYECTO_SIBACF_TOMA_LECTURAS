<?php

namespace app\Http\Controllers\API\General;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\General\Catalogo;

class CatalogoController extends Controller
{
    public function get_catalogo(Request $request)
    {
        $catalogo = new Catalogo; 
        $catalogo = $catalogo->get_catalogo();
        
        return response()->json([
            'data' => $catalogo,
        ]);
    }

    public function get_catalogo_id(Request $request, $id)
    {
        $catalogo = new Catalogo; 
        $catalogo = $catalogo->get_catalogo_id($id);
        
        return response()->json([
            'data' => $catalogo,
        ]);
    }

    public function save_catalogo(Request $request)
    {
        $catalogo = new Catalogo; 
        $id = $request->input('id_catalogo');
        $grupo_catalogo_id->input('grupo_catalogo_id');
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
        'grupo_catalogo_id' => $grupo_catalogo_id,
        'nombre' => $nombre,
        'descripcion' => $descripcion,
        'nemonico' => $nemonico,
        'codigo_auxiliar' => $codigo_auxiliar,
        'valor_auxiliar' => $valor_auxiliar,
        'fecha_creacion' => $fecha_creacion,
        'usuario_creacion' => $usuario_creacion,
        'fecha_actualizacion' => $fecha_actualizacion,
        'usuario_actualizacion' => $usuario_actualizacion,
        'estado_id' => $estado_id,
        ];

        if($id != 'null'){
            
            $response = $catalogo->update_catalogo($id, $objectSave);
        }else{
            $id_catalogo = $catalogo->create_catalogo($objectSave);
        }

        $data = $catalogo->get_catalogo();
        
        return response()->json([
            "error" => "ERROR..",
            "data" => $data
        ]);
    }

}
<?php

namespace app\Http\Controllers\API\Seguridades;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Seguridades\Acceso;

class AccesoController extends Controller
{
    public function get_acceso(Request $request)
    {
        $acceso = new Acceso; 
        $acceso = $acceso->get_acceso();
        
        return response()->json([
            'data' => $acceso,
        ]);
    }

    public function get_acceso_id(Request $request, $id)
    {
        $acceso = new Acceso; 
        $acceso = $acceso->get_acceso_id($id);
        
        return response()->json([
            'data' => $acceso,
        ]);
    }

    public function save_acceso(Request $request)
    {
        $acceso = new Acceso; 
        $id = $request->input('id_acceso');
        $nombre = $request->input('nombre');
        $descripcion->input('descripcion');
        $nemonico->input('nemonico');
        $acceso_padre_id = $request->input('acceso_padre_id');
        $nivel->input('nivel');
        $orden->input('orden');
        $accion->input('accion');
        $codigo_auxiliar = $request->input('codigo_auxiliar');
        $valor_auxiliar->input('valor_auxiliar');
        $fecha_creacion = $request->input('fecha_creacion');
        $usuario_creacion = $request->input('usuario_creacion');
        $fecha_actualizacion = $request->input('fecha_actualizacion');
        $usuario_actualizacion = $request->input('usuario_actualizacion');
        $estado_id = $request->input('estado_id');
 
        $objectSave = [
            'nombre' => $nombre,
            'descripcion' => $descripcion,
            'nemonico' => $nemonico,
            'acceso_padre_id' => $acceso_padre_id,
            'nivel' => $nivel,
            'orden' => $orden,
            'accion' => $accion,
            'codigo_auxiliar' => $codigo_auxiliar,
            'valor_auxiliar' => $valor_auxiliar,
            'fecha_creacion' => $fecha_creacion,
            'usuario_creacion' => $usuario_creacion,
            'fecha_actualizacion' => $fecha_actualizacion,
            'usuario_actualizacion' => $usuario_actualizacion,
            'estado_id' => $estado_id,
        ];

        if($id != 'null'){
            
            $response = $acceso->update_acceso($id, $objectSave);
        }else{
            $id_acceso = $acceso->create_acceso($objectSave);
        }

        $data = $acceso->get_acceso();
        
        return response()->json([
            "error" => "ERROR..",
            "data" => $data
        ]);
    }

}
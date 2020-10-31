<?php

namespace app\Http\Controllers\API\Seguridades;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Seguridades\Rol;

class RolController extends Controller
{
    public function get_rol(Request $request)
    {
        $rol = new Rol; 
        $rol = $rol->get_rol();
        
        return response()->json([
            'data' => $rol,
        ]);
    }

    public function get_rol_id(Request $request, $id)
    {
        $rol = new Rol; 
        $rol = $rol->get_rol_id($id);
        
        return response()->json([
            'data' => $rol,
        ]);
    }

    public function save_rol(Request $request)
    {
        $rol = new Rol; 
        $id = $request->input('id_rol');
        $empresa_id = $request->input('empresa_id');
        $tipo_rol_id->input('tipo_rol_id');
        $nombre = $request->input('nombre');
        $descripcion->input('descripcion');
        $nemonico->input('nemonico');
        $fecha_creacion = $request->input('fecha_creacion');
        $usuario_creacion = $request->input('usuario_creacion');
        $fecha_actualizacion = $request->input('fecha_actualizacion');
        $usuario_actualizacion = $request->input('usuario_actualizacion');
        $estado_id = $request->input('estado_id');
 
        $objectSave = [            
            'empresa_id' => $empresa_id,
            'tipo_rol_id' => $tipo_rol_id,
            'nombre' => $nombre,
            'descripcion' => $descripcion,
            'nemonico' => $nemonico,
            'fecha_creacion' => $fecha_creacion,
            'usuario_creacion' => $usuario_creacion,
            'fecha_actualizacion' => $fecha_actualizacion,
            'usuario_actualizacion' => $usuario_actualizacion,
            'estado_id' => $estado_id,
        ];

        if($id != 'null'){
            
            $response = $rol->update_rol($id, $objectSave);
        }else{
            $id_rol = $rol->create_rol($objectSave);
        }

        $data = $rol->get_rol();
        
        return response()->json([
            "error" => "ERROR..",
            "data" => $data
        ]);
    }

}
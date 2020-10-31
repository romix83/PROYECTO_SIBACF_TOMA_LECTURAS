<?php

namespace app\Http\Controllers\API\Seguridades;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Seguridades\UsuarioRol;

class UsuarioRolController extends Controller
{
    public function get_usuario_rol(Request $request)
    {
        $usuario_rol = new UsuarioRol; 
        $usuario_rol = $usuario_rol->get_usuario_rol();
        
        return response()->json([
            'data' => $usuario_rol,
        ]);
    }

    public function get_usuario_rol_id(Request $request, $id)
    {
        $usuario_rol = new UsuarioRol; 
        $usuario_rol = $usuario_rol->get_usuario_rol_id($id);
        
        return response()->json([
            'data' => $usuario_rol,
        ]);
    }

    public function save_usuario_rol(Request $request)
    {
        $usuario_rol = new UsuarioRol; 
        $id = $request->input('id_usuario_rol');
        $rol_id = $request->input('rol_id');
        $usuario_id->input('usuario_id');
        $fecha_creacion = $request->input('fecha_creacion');
        $usuario_creacion = $request->input('usuario_creacion');
        $fecha_actualizacion = $request->input('fecha_actualizacion');
        $usuario_actualizacion = $request->input('usuario_actualizacion');
        $estado_id = $request->input('estado_id');
 
        $objectSave = [            
            'rol_id' => $rol_id,
            'usuario_id' => $usuario_id,
            'fecha_creacion' => $fecha_creacion,
            'usuario_creacion' => $usuario_creacion,
            'fecha_actualizacion' => $fecha_actualizacion,
            'usuario_actualizacion' => $usuario_actualizacion,
            'estado_id' => $estado_id,
        ];

        if($id != 'null'){
            
            $response = $usuario_rol->update_usuario_rol($id, $objectSave);
        }else{
            $id_usuario_rol = $usuario_rol->create_usuario_rol($objectSave);
        }

        $data = $usuario_rol->get_usuario_rol();
        
        return response()->json([
            "error" => "ERROR..",
            "data" => $data
        ]);
    }

}
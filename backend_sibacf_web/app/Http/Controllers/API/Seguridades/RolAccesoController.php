<?php

namespace app\Http\Controllers\API\Seguridades;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Seguridades\RolAcceso;

class RolAccesoController extends Controller
{
    public function get_rol_acceso(Request $request)
    {
        $rol_acceso = new RolAcceso; 
        $rol_acceso = $rol_acceso->get_rol_acceso();
        
        return response()->json([
            'data' => $rol_acceso,
        ]);
    }

    public function get_rol_acceso_id(Request $request, $id)
    {
        $rol_acceso = new RolAcceso; 
        $rol_acceso = $rol_acceso->get_rol_acceso_id($id);
        
        return response()->json([
            'data' => $rol_acceso,
        ]);
    }

    public function save_rol_acceso(Request $request)
    {
        $rol_acceso = new RolAcceso; 
        $id = $request->input('id_rol_acceso');
        $rol_id = $request->input('rol_id');
        $acceso_id->input('acceso_id');
        $fecha_creacion = $request->input('fecha_creacion');
        $usuario_creacion = $request->input('usuario_creacion');
        $fecha_actualizacion = $request->input('fecha_actualizacion');
        $usuario_actualizacion = $request->input('usuario_actualizacion');
        $estado_id = $request->input('estado_id');
 
        $objectSave = [            
            'rol_id' => $rol_id,
            'acceso_id' => $acceso_id,
            'fecha_creacion' => $fecha_creacion,
            'usuario_creacion' => $usuario_creacion,
            'fecha_actualizacion' => $fecha_actualizacion,
            'usuario_actualizacion' => $usuario_actualizacion,
            'estado_id' => $estado_id,
        ];

        if($id != 'null'){
            
            $response = $rol_acceso->update_rol_acceso($id, $objectSave);
        }else{
            $id_rol_acceso = $rol_acceso->create_rol_acceso($objectSave);
        }

        $data = $rol_acceso->get_rol_acceso();
        
        return response()->json([
            "error" => "ERROR..",
            "data" => $data
        ]);
    }

}
<?php

namespace app\Http\Controllers\API\Seguridades;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Seguridades\Usuario;

class UsuarioController extends Controller
{
    public function get_usuario(Request $request)
    {
        $usuario = new Usuario; 
        $usuario = $usuario->get_usuario();
        
       /*  return response()->json([
            'data' => $usuario,
        ]); */

        return response()->json($usuario);
    }

    public function get_usuario_id(Request $request, $id)
    {
        $usuario = new Usuario; 
        $usuario = $usuario->get_usuario_id($id);
        
        return response()->json([
            'data' => $usuario,
        ]);
    }

    public function get_acceso_login_pass(Request $request, $login, $pass){
        $usuario = new Usuario; 
        $usuario = $usuario->get_acceso_login_pass($login, $pass);
        return response()->json($usuario);
    }

    public function save_usuario(Request $request)
    {
        $usuario = new Usuario; 
        $id = $request->input('id_usuario');
        $persona_empresa_id = $request->input('persona_empresa_id');
        $login->input('login');
        $pass->input('pass');
        $confirmacion = $request->input('confirmacion');
        $fecha_expiracion->input('fecha_expiracion');
        $fecha_ultimo_acceso->input('fecha_ultimo_acceso');
        $sesion_activa->input('sesion_activa');
        $fecha_creacion = $request->input('fecha_creacion');
        $usuario_creacion = $request->input('usuario_creacion');
        $fecha_actualizacion = $request->input('fecha_actualizacion');
        $usuario_actualizacion = $request->input('usuario_actualizacion');
        $estado_id = $request->input('estado_id');
 
        $objectSave = [
            'persona_empresa_id' => $persona_empresa_id,
            'login' => $login,
            'pass' => $pass,
            'confirmacion' => $confirmacion,
            'fecha_expiracion' => $fecha_expiracion,
            'fecha_ultimo_acceso' => $fecha_ultimo_acceso,
            'sesion_activa' => $sesion_activa,
            'fecha_creacion' => $fecha_creacion,
            'usuario_creacion' => $usuario_creacion,
            'fecha_actualizacion' => $fecha_actualizacion,
            'usuario_actualizacion' => $usuario_actualizacion,
            'estado_id' => $estado_id,
        ];

        if($id != 'null'){
            
            $response = $usuario->update_usuario($id, $objectSave);
        }else{
            $id_usuario = $usuario->create_usuario($objectSave);
        }

        $data = $usuario->get_usuario();
        
        return response()->json([
            "error" => "ERROR..",
            "data" => $data
        ]);
    }

}
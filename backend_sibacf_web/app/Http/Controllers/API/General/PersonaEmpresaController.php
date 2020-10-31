<?php

namespace app\Http\Controllers\API\General;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\General\PersonaEmpresa;

class PersonaEmpresaController extends Controller
{
    public function get_persona_empresa(Request $request)
    {
        $persona_empresa = new PersonaEmpresa; 
        $persona_empresa = $persona_empresa->get_persona_empresa();
        
        return response()->json([
            'data' => $persona_empresa,
        ]);
    }

    public function get_persona_empresa_id(Request $request, $id)
    {
        $persona_empresa = new PersonaEmpresa; 
        $persona_empresa = $persona_empresa->get_persona_empresa_id($id);
        
        return response()->json([
            'data' => $persona_empresa,
        ]);
    }

    public function save_persona_empresa(Request $request)
    {
        $persona_empresa = new PersonaEmpresa; 
        $id = $request->input('id_persona_empresa');
        $persona_id->input('persona_id');
        $empresa_id = $request->input('empresa_id');
        $fecha_creacion = $request->input('fecha_creacion');
        $usuario_creacion = $request->input('usuario_creacion');
        $fecha_actualizacion = $request->input('fecha_actualizacion');
        $usuario_actualizacion = $request->input('usuario_actualizacion');
        $estado_id = $request->input('estado_id');
 
        $objectSave = [
        'persona_id' => $persona_id,
        'empresa_id' => $empresa_id,
        'fecha_creacion' => $fecha_creacion,
        'usuario_creacion' => $usuario_creacion,
        'fecha_actualizacion' => $fecha_actualizacion,
        'usuario_actualizacion' => $usuario_actualizacion,
        'estado_id' => $estado_id,
        ];

        if($id != 'null'){
            
            $response = $persona_empresa->update_persona_empresa($id, $objectSave);
        }else{
            $id_persona_empresa = $persona_empresa->create_persona_empresa($objectSave);
        }

        $data = $persona_empresa->get_persona_empresa();
        
        return response()->json([
            "error" => "ERROR..",
            "data" => $data
        ]);
    }

}
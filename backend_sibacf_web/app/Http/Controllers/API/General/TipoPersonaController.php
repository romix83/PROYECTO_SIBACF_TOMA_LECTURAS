<?php

namespace app\Http\Controllers\API\General;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\General\TipoPersona;

class TipoPersonaController extends Controller
{
    public function get_tipo_persona(Request $request)
    {
        $tipo_persona = new TipoPersona; 
        $tipo_persona = $tipo_persona->get_tipo_persona();
        
        return response()->json([
            'data' => $tipo_persona,
        ]);
    }

    public function get_tipo_persona_id(Request $request, $id)
    {
        $tipo_persona = new TipoPersona; 
        $tipo_persona = $tipo_persona->get_tipo_persona_id($id);
        
        return response()->json([
            'data' => $tipo_persona,
        ]);
    }

    public function save_tipo_persona(Request $request)
    {
        $tipo_persona = new TipoPersona; 
        $id = $request->input('id_tipo_persona');
        $persona_id->input('persona_id');
        $tipo_id = $request->input('tipo_id');
        $fecha_creacion = $request->input('fecha_creacion');
        $usuario_creacion = $request->input('usuario_creacion');
        $fecha_actualizacion = $request->input('fecha_actualizacion');
        $usuario_actualizacion = $request->input('usuario_actualizacion');
        $estado_id = $request->input('estado_id');
 
        $objectSave = [
        'persona_id' => $persona_id,
        'tipo_id' => $tipo_id,
        'fecha_creacion' => $fecha_creacion,
        'usuario_creacion' => $usuario_creacion,
        'fecha_actualizacion' => $fecha_actualizacion,
        'usuario_actualizacion' => $usuario_actualizacion,
        'estado_id' => $estado_id,
        ];

        if($id != 'null'){
            
            $response = $tipo_persona->update_tipo_persona($id, $objectSave);
        }else{
            $id_tipo_persona = $tipo_persona->create_tipo_persona($objectSave);
        }

        $data = $tipo_persona->get_tipo_persona();
        
        return response()->json([
            "error" => "ERROR..",
            "data" => $data
        ]);
    }

}
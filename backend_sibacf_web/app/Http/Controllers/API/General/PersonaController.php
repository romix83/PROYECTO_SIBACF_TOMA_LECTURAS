<?php

namespace app\Http\Controllers\API\General;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\General\Persona;

class PersonaController extends Controller
{
    public function get_persona(Request $request)
    {
        $persona = new Persona; 
        $persona = $persona->get_persona();
        
        return response()->json([
            'data' => $persona,
        ]);
    }

    public function get_persona_id(Request $request, $id)
    {
        $persona = new Persona; 
        $persona = $persona->get_persona_id($id);
        
        return response()->json([
            'data' => $persona,
        ]);
    }

    public function save_persona(Request $request)
    {
        $persona = new Persona; 
        $id = $request->input('id_persona');
        $tipo_identificacion_id->input('tipo_identificacion_id');
        $identificacion = $request->input('identificacion');
        $personeria_id = $request->input('personeria_id');
        $nombres = $request->input('nombres');
        $apellidos = $request->input('apellidos');
        $razon_social = $request->input('razon_social');
        $nombre_comercial = $request->input('nombre_comercial');
        $genero_id = $request->input('genero_id');
        $fecha_nacimiento = $request->input('fecha_nacimiento');
        $estado_civil_id = $request->input('estado_civil_id');
        $tipo_sangre_id = $request->input('tipo_sangre_id');
        $trato_id = $request->input('trato_id');
        $codigo = $request->input('codigo');
        $es_relacionado = $request->input('es_relacionado');
        $telefono_fijo = $request->input('telefono_fijo');
        $extension_fijo = $request->input('extension_fijo');
        $telefono_alterno_fijo = $request->input('telefono_alterno_fijo');
        $extension_alterno_fijo = $request->input('extension_alterno_fijo');
        $telefono_movil = $request->input('telefono_movil');
        $correo_electronico = $request->input('correo_electronico');
        $cc_correo_electronico = $request->input('cc_correo_electronico');
        $pagina_web = $request->input('pagina_web');
        $tipo_dicapacidad_id = $request->input('tipo_dicapacidad_id');
        $porcentaje_discapacidad = $request->input('porcentaje_discapacidad');
        $fecha_creacion = $request->input('fecha_creacion');
        $usuario_creacion = $request->input('usuario_creacion');
        $fecha_actualizacion = $request->input('fecha_actualizacion');
        $usuario_actualizacion = $request->input('usuario_actualizacion');
        $estado_id = $request->input('estado_id');        

        $objectSave = [
            'tipo_identificacion_id' => $tipo_identificacion_id,
            'identificacion' => $identificacion,
            'personeria_id' => $personeria_id,
            'nombres' => $nombres,
            'apellidos' => $apellidos,
            'razon_social' => $razon_social,
            'nombre_comercial' => $nombre_comercial,
            'genero_id' => $genero_id,
            'fecha_nacimiento' => $fecha_nacimiento,
            'estado_civil_id' => $estado_civil_id,
            'tipo_sangre_id' => $tipo_sangre_id,
            'trato_id' => $trato_id,
            'codigo' => $codigo,
            'es_relacionado' => $es_relacionado,
            'telefono_fijo' => $telefono_fijo,
            'extension_fijo' => $extension_fijo,
            'telefono_alterno_fijo' => $telefono_alterno_fijo,
            'extension_alterno_fijo' => $extension_alterno_fijo,
            'telefono_movil' => $telefono_movil,
            'correo_electronico' => $correo_electronico,
            'cc_correo_electronico' => $cc_correo_electronico,
            'pagina_web' => $pagina_web,
            'tipo_dicapacidad_id' => $tipo_dicapacidad_id,
            'porcentaje_discapacidad' => $porcentaje_discapacidad,
            'fecha_creacion' => $fecha_creacion,
            'usuario_creacion' => $usuario_creacion,
            'fecha_actualizacion' => $fecha_actualizacion,
            'usuario_actualizacion' => $usuario_actualizacion,
            'estado_id' => $estado_id,
        ];

        if($id != 'null'){
            
            $response = $persona->update_persona($id, $objectSave);
        }else{
            $id_persona = $persona->create_persona($objectSave);
        }

        $data = $persona->get_persona();
        
        return response()->json([
            "error" => "ERROR..",
            "data" => $data
        ]);
    }

}
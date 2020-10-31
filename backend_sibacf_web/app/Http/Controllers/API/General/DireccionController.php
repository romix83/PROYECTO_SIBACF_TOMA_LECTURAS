<?php

namespace app\Http\Controllers\API\General;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\General\Direccion;

class DireccionController extends Controller
{
    public function get_direccion(Request $request)
    {
        $direccion = new Direccion; 
        $direccion = $direccion->get_direccion();
        
        return response()->json([
            'data' => $direccion,
        ]);
    }

    public function get_direccion_id(Request $request, $id)
    {
        $direccion = new Direccion; 
        $direccion = $direccion->get_direccion_id($id);
        
        return response()->json([
            'data' => $direccion,
        ]);
    }

    public function save_direccion(Request $request)
    {
        $direccion = new Direccion; 
        $id = $request->input('id_direccion');
        $persona_id->input('persona_id');
        $empresa_id = $request->input('empresa_id');
        $calle_principal = $request->input('calle_principal');
        $calle_secundaria = $request->input('calle_secundaria');
        $numeracion = $request->input('numeracion');
        $ubicacion_id = $request->input('ubicacion_id');
        $fecha_creacion = $request->input('fecha_creacion');
        $usuario_creacion = $request->input('usuario_creacion');
        $fecha_actualizacion = $request->input('fecha_actualizacion');
        $usuario_actualizacion = $request->input('usuario_actualizacion');
        $estado_id = $request->input('estado_id');
 
        $objectSave = [
            'persona_id' => $persona_id,
            'empresa_id' => $empresa_id,
            'calle_principal' => $calle_principal,
            'calle_secundaria' => $calle_secundaria,
            'numeracion' => $numeracion,
            'ubicacion_id' => $ubicacion_id,
            'fecha_creacion' => $fecha_creacion,
            'usuario_creacion' => $usuario_creacion,
            'fecha_actualizacion' => $fecha_actualizacion,
            'usuario_actualizacion' => $usuario_actualizacion,
            'estado_id' => $estado_id,
        ];

        if($id != 'null'){
            
            $response = $direccion->update_direccion($id, $objectSave);
        }else{
            $id_direccion = $direccion->create_direccion($objectSave);
        }

        $data = $direccion->get_direccion();
        
        return response()->json([
            "error" => "ERROR..",
            "data" => $data
        ]);
    }

}
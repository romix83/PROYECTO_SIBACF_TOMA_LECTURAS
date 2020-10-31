<?php

namespace app\Http\Controllers\API\General;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\General\UbicacionGeografica;

class UbicacionGeograficaController extends Controller
{
    public function get_ubicacion_geografica(Request $request)
    {
        $ubicacion_geografica = new UbicacionGeografica; 
        $ubicacion_geografica = $ubicacion_geografica->get_ubicacion_geografica();
        
        return response()->json([
            'data' => $ubicacion_geografica,
        ]);
    }

    public function get_ubicacion_geografica_id(Request $request, $id)
    {
        $ubicacion_geografica = new UbicacionGeografica; 
        $ubicacion_geografica = $ubicacion_geografica->get_ubicacion_geografica_id($id);
        
        return response()->json([
            'data' => $ubicacion_geografica,
        ]);
    }

    public function save_ubicacion_geografica(Request $request)
    {
        $ubicacion_geografica = new UbicacionGeografica; 
        $id = $request->input('id_ubicacion_geografica');
        $codigo->input('codigo');
        $nombre = $request->input('nombre');
        $nemonico->input('nemonico');
        $nivel = $request->input('nivel');
        $ubicacion_padre_id->input('ubicacion_padre_id');
        $fecha_creacion = $request->input('fecha_creacion');
        $usuario_creacion = $request->input('usuario_creacion');
        $fecha_actualizacion = $request->input('fecha_actualizacion');
        $usuario_actualizacion = $request->input('usuario_actualizacion');
        $estado_id = $request->input('estado_id');
 
        $objectSave = [
            'codigo' => $codigo,
            'nombre' => $nombre,
            'nemonico' => $nemonico,
            'nivel' => $nivel,
            'ubicacion_padre_id' => $ubicacion_padre_id,
            'fecha_creacion' => $fecha_creacion,
            'usuario_creacion' => $usuario_creacion,
            'fecha_actualizacion' => $fecha_actualizacion,
            'usuario_actualizacion' => $usuario_actualizacion,
            'estado_id' => $estado_id,
        ];

        if($id != 'null'){
            
            $response = $ubicacion_geografica->update_ubicacion_geografica($id, $objectSave);
        }else{
            $id_ubicacion_geografica = $ubicacion_geografica->create_ubicacion_geografica($objectSave);
        }

        $data = $ubicacion_geografica->get_ubicacion_geografica();
        
        return response()->json([
            "error" => "ERROR..",
            "data" => $data
        ]);
    }

}
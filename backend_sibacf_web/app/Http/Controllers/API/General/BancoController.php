<?php

namespace app\Http\Controllers\API\General;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\General\Banco;

class BancoController extends Controller
{
    public function get_banco(Request $request)
    {
        $banco = new Banco; 
        $banco = $banco->get_banco();
        
        return response()->json([
            'data' => $banco,
        ]);
    }

    public function get_banco_id(Request $request, $id)
    {
        $banco = new Banco; 
        $banco = $banco->get_banco_id($id);
        
        return response()->json([
            'data' => $banco,
        ]);
    }

    public function save_banco(Request $request)
    {
        $banco = new Banco; 
        $id = $request->input('id_banco');
        $nombre = $request->input('nombre');
        $nemonico = $request->input('nemonico');
        $codigo_auxiliar = $request->input('codigo_auxiliar');
        $valor_auxiliar = $request->input('valor_auxiliar');
        $fecha_creacion = $request->input('fecha_creacion');
        $usuario_creacion = $request->input('usuario_creacion');
        $fecha_actualizacion = $request->input('fecha_actualizacion');
        $usuario_actualizacion = $request->input('usuario_actualizacion');
        $estado_id = $request->input('estado_id');
 
        $objectSave = [
        'nombre' => $nombre,
        'nemonico' => $nemonico,
        'codigo_auxiliar' => $codigo_auxiliar,
        'valor_auxiliar' => $valor_auxiliar,
        'fecha_creacion' => $fecha_creacion,
        'usuario_creacion' => $usuario_creacion,
        'fecha_actualizacion' => $fecha_actualizacion,
        'usuario_actualizacion' => $usuario_actualizacion,
        'estado_id'  => $estado_id,
        ];

        if($id != 'null'){
            
            $response = $banco->update_banco($id, $objectSave);
        }else{
            $id_banco = $banco->create_banco($objectSave);
        }

        $data = $banco->get_banco();
        
        return response()->json([
            "error" => "ERROR..",
            "data" => $data
        ]);
    }

}
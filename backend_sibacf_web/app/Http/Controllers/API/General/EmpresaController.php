<?php

namespace app\Http\Controllers\API\General;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\General\Empresa;

class EmpresaController extends Controller
{
    public function get_empresa(Request $request)
    {
        $empresa = new Empresa; 
        $empresa = $empresa->get_empresa();
        
        return response()->json([
            'data' => $empresa,
        ]);
    }

    public function get_empresa_id(Request $request, $id)
    {
        $empresa = new Empresa; 
        $empresa = $empresa->get_empresa_id($id);
        
        return response()->json([
            'data' => $empresa,
        ]);
    }

    public function save_empresa(Request $request)
    {
        $empresa = new Empresa; 
        $id = $request->input('id_empresa');
        $tipo_identificacion_id->input('tipo_identificacion_id');
        $identificacion = $request->input('identificacion');
        $personeria_id = $request->input('personeria_id');
        $razon_social = $request->input('razon_social');
        $nombre_comercial = $request->input('nombre_comercial');
        $obligado_contabilidad = $request->input('obligado_contabilidad');
        $resolucion_contribuyente_especial = $request->input('resolucion_contribuyente_especial');
        $regimen_microempresa = $request->input('regimen_microempresa');
        $agente_retencion = $request->input('agente_retencion');
        $resolucion_agente_retencion = $request->input('resolucion_agente_retencion');
        $ambiente_id = $request->input('ambiente_id');
        $tipo_emision_id = $request->input('tipo_emision_id');
        $moneda_id = $request->input('moneda_id');
        $version_comprobante_id = $request->input('version_comprobante_id');
        $servidor_correo = $request->input('servidor_correo');
        $puerto_correo = $request->input('puerto_correo');
        $correo_origen = $request->input('correo_origen');
        $nombre_correo_origen = $request->input('nombre_correo_origen');
        $usuario_correo = $request->input('usuario_correo');
        $pass_correo = $request->input('pass_correo');
        $telefono_fijo = $request->input('telefono_fijo');
        $extension_fijo = $request->input('extension_fijo');
        $telefono_alterno_fijo = $request->input('telefono_alterno_fijo');
        $extension_alterno_fijo = $request->input('extension_alterno_fijo');
        $telefono_movil = $request->input('telefono_movil');
        $correo_electronico = $request->input('correo_electronico');
        $cc_correo_electronico = $request->input('cc_correo_electronico');
        $pagina_web = $request->input('pagina_web');
        $logo = $request->input('logo');
        $fecha_creacion = $request->input('fecha_creacion');
        $usuario_creacion = $request->input('usuario_creacion');
        $fecha_actualizacion = $request->input('fecha_actualizacion');
        $usuario_actualizacion = $request->input('usuario_actualizacion');
        $estado_id = $request->input('estado_id');
 
        $objectSave = [
            'tipo_identificacion_id' => $tipo_identificacion_id,
            'identificacion' => $identificacion,
            'personeria_id' => $personeria_id,
            'razon_social' => $razon_social,
            'nombre_comercial' => $nombre_comercial,
            'obligado_contabilidad' => $obligado_contabilidad,
            'resolucion_contribuyente_especial' => $resolucion_contribuyente_especial,
            'regimen_microempresa' => $regimen_microempresa,
            'agente_retencion' => $agente_retencion,
            'resolucion_agente_retencion' => $resolucion_agente_retencion,
            'ambiente_id' => $ambiente_id,
            'tipo_emision_id' => $tipo_emision_id,
            'moneda_id' => $moneda_id,
            'version_comprobante_id' => $version_comprobante_id,
            'servidor_correo' => $servidor_correo,
            'puerto_correo' => $puerto_correo,
            'correo_origen' => $correo_origen,
            'nombre_correo_origen' => $nombre_correo_origen,
            'usuario_correo' => $usuario_correo,
            'pass_correo' => $pass_correo,
            'telefono_fijo' => $telefono_fijo,
            'extension_fijo' => $extension_fijo,
            'telefono_alterno_fijo' => $telefono_alterno_fijo,
            'extension_alterno_fijo' => $extension_alterno_fijo,
            'telefono_movil' => $telefono_movil,
            'correo_electronico' => $correo_electronico,
            'cc_correo_electronico' => $cc_correo_electronico,
            'pagina_web' => $pagina_web,
            'logo' => $logo,
            'fecha_creacion' => $fecha_creacion,
            'usuario_creacion' => $usuario_creacion,
            'fecha_actualizacion' => $fecha_actualizacion,
            'usuario_actualizacion' => $usuario_actualizacion,
            'estado_id' => $estado_id,
        ];

        if($id != 'null'){
            
            $response = $empresa->update_empresa($id, $objectSave);
        }else{
            $id_empresa = $empresa->create_empresa($objectSave);
        }

        $data = $empresa->get_empresa();
        
        return response()->json([
            "error" => "ERROR..",
            "data" => $data
        ]);
    }

}
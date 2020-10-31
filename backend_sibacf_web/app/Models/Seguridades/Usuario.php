<?php

namespace app\Models\Seguridades;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Usuario extends Model
{
    protected $shema = 'sch_seguridades';
    protected $table = 'sch_seguridades.usuario';
    protected $filltable = [
        'id_usuario',
        'persona_empresa_id',
        'login',
        'pass',
        'confirmacion',
        'fecha_expiracion',
        'fecha_ultimo_acceso',
        'sesion_activa',
        'fecha_creacion',
        'usuario_creacion',
        'fecha_actualizacion',
        'usuario_actualizacion',
        'estado_id'
    ];


    public function get_usuario()
    {
        $result = DB::table('sch_seguridades.usuario')->get();
        return $result;
    }

    public function get_usuario_id($id)
    {
        $result = Usuario::where('id_usuario',$id)->first();
        return $result;
    }

    public function get_acceso_login_pass($login, $pass)
    {
        $result =  DB::table('sch_seguridades.usuario')
            ->where('login',$login)
            ->where('pass',$pass)
            ->first();
        return $result;
        
    }

    public function create_usuario($objectSave)
    {
       $rowCreated = Usuario::create($objectSave);
       $response = Usuario::where('id_usuario',$rowCreated->id)->first();
       return $rowCreated->id;
    }

    public function update_usuario($id, $objectSave)
    {
        $update = Usuario::find($id)->update($objectSave);
        $response = Usuario::where('id_usuario',$id)->first();
        return $response;
    }

    public function delete_usuario($id)
    {
        $response = Usuario::find($id)->delete();
        return $response;
    }
}
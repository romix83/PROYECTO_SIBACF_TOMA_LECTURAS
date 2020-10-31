<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//GENERAL
//http://localhost/backend_sibacf_web/public/api/banco/getBanco
//http://localhost/backend_sibacf_web/public/api/banco/getBancoId/4
Route::group([
    'prefix' => 'banco'
        ], function () {    
        Route::get('getBanco', 'API\General\BancoController@get_banco');
        Route::get('getBancoId/{id}', 'API\General\BancoController@get_banco_id');
        Route::post('saveBanco', 'API\General\BancoController@save_banco');
        
});

//http://localhost/backend_sibacf_web/public/api/catalogo/getCatalogo
//http://localhost/backend_sibacf_web/public/api/catalogo/getCatalogoId/4
Route::group([
    'prefix' => 'catalogo'
        ], function () {    
        Route::get('getCatalogo', 'API\General\CatalogoController@get_catalogo');
        Route::get('getCatalogoId/{id}', 'API\General\CatalogoController@get_catalogo_id');
        Route::post('saveCatalogo', 'API\General\CatalogoController@save_catalogo');
        
});

//http://localhost/backend_sibacf_web/public/api/direccion/getDireccion
//http://localhost/backend_sibacf_web/public/api/direccion/getDireccionId/4
Route::group([
    'prefix' => 'direccion'
        ], function () {    
        Route::get('getDireccion', 'API\General\DireccionController@get_direccion');
        Route::get('getDireccionId/{id}', 'API\General\DireccionController@get_direccion_id');
        Route::post('saveDireccion', 'API\General\DireccionController@save_direccion');
        
});

//http://localhost/backend_sibacf_web/public/api/direccion/getDireccion
//http://localhost/backend_sibacf_web/public/api/direccion/getDireccionId/4
Route::group([
    'prefix' => 'empresa'
        ], function () {    
        Route::get('getEmpresa', 'API\General\EmpresaController@get_empresa');
        Route::get('getEmpresaId/{id}', 'API\General\EmpresaController@get_empresa_id');
        Route::post('saveEmpresa', 'API\General\EmpresaController@save_empresa');
        
});

//http://localhost/backend_sibacf_web/public/api/grupoCatalogo/getGrupoCatalogo
//http://localhost/backend_sibacf_web/public/api/grupoCatalogo/getGrupoCatalogoId/4
Route::group([
    'prefix' => 'grupoCatalogo'
        ], function () {    
        Route::get('getGrupoCatalogo', 'API\General\GrupoCatalogoController@get_grupo_catalogo');
        Route::get('getGrupoCatalogoId/{id}', 'API\General\GrupoCatalogoController@get_grupo_catalogo_id');
        Route::post('saveGrupoCatalogo', 'API\General\GrupoCatalogoController@save_grupo_catalogo');
        
});

//http://localhost/backend_sibacf_web/public/api/grupoParametro/getGrupoParametro
//http://localhost/backend_sibacf_web/public/api/grupoParametro/getGrupoParametroId/1
Route::group([
    'prefix' => 'grupoParametro'
        ], function () {    
        Route::get('getGrupoParametro', 'API\General\GrupoParametroController@get_grupo_parametro');
        Route::get('getGrupoParametroId/{id}', 'API\General\GrupoParametroController@get_grupo_parametro_id');
        Route::post('saveGrupoParametro', 'API\General\GrupoParametroController@save_grupo_parametro');
        
});

//http://localhost/backend_sibacf_web/public/api/parametro/getParametro
//http://localhost/backend_sibacf_web/public/api/parametro/getParametroId/2
Route::group([
    'prefix' => 'parametro'
        ], function () {    
        Route::get('getParametro', 'API\General\ParametroController@get_parametro');
        Route::get('getParametroId/{id}', 'API\General\ParametroController@get_parametro_id');
        Route::post('saveParametro', 'API\General\ParametroController@save_parametro');
        
});

//http://localhost/backend_sibacf_web/public/api/periodo/getPeriodo
//http://localhost/backend_sibacf_web/public/api/periodo/getPeriodoId/2
Route::group([
    'prefix' => 'periodo'
        ], function () {    
        Route::get('getPeriodo', 'API\General\PeriodoController@get_periodo');
        Route::get('getPeriodoId/{id}', 'API\General\PeriodoController@get_periodo_id');
        Route::post('savePeriodo', 'API\General\PeriodoController@save_periodo');
        
});

//http://localhost/backend_sibacf_web/public/api/persona/getPersona
//http://localhost/backend_sibacf_web/public/api/persona/getPersonaId/2
Route::group([
    'prefix' => 'persona'
        ], function () {    
        Route::get('getPersona', 'API\General\PersonaController@get_persona');
        Route::get('getPersonaId/{id}', 'API\General\PersonaController@get_persona_id');
        Route::post('savePersona', 'API\General\PersonaController@save_persona');
        
});

//http://localhost/backend_sibacf_web/public/api/personaEmpresa/getPersonaEmpresa
//http://localhost/backend_sibacf_web/public/api/personaEmpresa/getPersonaEmpresaId/2
Route::group([
    'prefix' => 'personaEmpresa'
        ], function () {    
        Route::get('getPersonaEmpresa', 'API\General\PersonaEmpresaController@get_persona_empresa');
        Route::get('getPersonaEmpresaId/{id}', 'API\General\PersonaEmpresaController@get_persona_empresa_id');
        Route::post('savePersonaEmpresa', 'API\General\PersonaEmpresaController@save_persona_empresa');
        
});

//http://localhost/backend_sibacf_web/public/api/tipoPersona/getTipoPersona
//http://localhost/backend_sibacf_web/public/api/tipoPersona/getgetTipoPersonaId/2
Route::group([
    'prefix' => 'tipoPersona'
        ], function () {    
        Route::get('getTipoPersona', 'API\General\TipoPersonaController@get_tipo_persona');
        Route::get('getTipoPersonaId/{id}', 'API\General\TipoPersonaController@get_tipo_persona_id');
        Route::post('saveTipoPersona', 'API\General\TipoPersonaController@save_tipo_persona');
        
});

//http://localhost/backend_sibacf_web/public/api/ubicacionGeografica/getUbicacionGeografica
//http://localhost/backend_sibacf_web/public/api/ubicacionGeografica/getUbicacionGeograficaId/2
Route::group([
    'prefix' => 'ubicacionGeografica'
        ], function () {    
        Route::get('getUbicacionGeografica', 'API\General\UbicacionGeograficaController@get_ubicacion_geografica');
        Route::get('getUbicacionGeograficaId/{id}', 'API\General\UbicacionGeograficaController@get_ubicacion_geografica_id');
        Route::post('saveUbicacionGeografica', 'API\General\UbicacionGeograficaController@save_ubicacion_geografica');
        
});

//SEGURIDADES
//http://localhost/backend_sibacf_web/public/api/acceso/getAcceso
//http://localhost/backend_sibacf_web/public/api/acceso/getAccesoId/2
Route::group([
    'prefix' => 'acceso'
        ], function () {    
        Route::get('getAcceso', 'API\Seguridades\AccesoController@get_acceso');
        Route::get('getAccesoId/{id}', 'API\Seguridades\AccesoController@get_acceso_id');
        Route::post('saveAcceso', 'API\Seguridades\AccesoController@save_acceso');
        
});

//http://localhost/backend_sibacf_web/public/api/rol/getRol
//http://localhost/backend_sibacf_web/public/api/rol/getRolId/2
Route::group([
    'prefix' => 'rol'
        ], function () {    
        Route::get('getRol', 'API\Seguridades\RolController@get_rol');
        Route::get('getRolId/{id}', 'API\Seguridades\RolController@get_rol_id');
        Route::post('saveRol', 'API\Seguridades\RolController@save_rol');
        
});

//http://localhost/backend_sibacf_web/public/api/rolAcceso/getRolAcceso
//http://localhost/backend_sibacf_web/public/api/rolAcceso/getRolAccesoId/2
Route::group([
    'prefix' => 'rolAcceso'
        ], function () {    
        Route::get('getRolAcceso', 'API\Seguridades\RolAccesoController@get_rol_acceso');
        Route::get('getRolAccesoId/{id}', 'API\Seguridades\RolAccesoController@get_rol_acceso_id');
        Route::post('saveRolAcceso', 'API\Seguridades\RolAccesoController@save_rol_acceso');
        
});

//http://localhost/backend_sibacf_web/public/api/usuario/getUsuario
//http://localhost/backend_sibacf_web/public/api/usuario/getUsuarioId/1
//http://localhost/backend_sibacf_web/public/api/usuario/getUsuarioLoginPass/admin/adminadmin
Route::group([
    'prefix' => 'usuario'
        ], function () {    
        Route::get('getUsuario', 'API\Seguridades\UsuarioController@get_usuario');
        Route::get('getUsuarioId/{id}', 'API\Seguridades\UsuarioController@get_usuario_id');
        Route::get('getUsuarioLoginPass/{login}/{pass}', 'API\Seguridades\UsuarioController@get_acceso_login_pass');        
        Route::post('saveUsuario', 'API\Seguridades\UsuarioController@save_usuario');
        
});

//http://localhost/backend_sibacf_web/public/api/usuarioRol/getUsuarioRol
//http://localhost/backend_sibacf_web/public/api/usuarioRol/getUsuarioRolId/1
Route::group([
    'prefix' => 'usuarioRol'
        ], function () {    
        Route::get('getUsuarioRol', 'API\Seguridades\UsuarioRolController@get_usuario_rol');
        Route::get('getUsuarioRolId/{id}', 'API\Seguridades\UsuarioRolController@get_usuario_rol_id');
        Route::post('saveUsuarioRol', 'API\Seguridades\UsuarioRolController@save_usuario_rol');
        
});

//NEGOCIO
//http://localhost/backend_sibacf_web/public/api/asignacionSerie/getAsignacionSerie
//http://localhost/backend_sibacf_web/public/api/asignacionSerie/getAsignacionSerieId/1
Route::group([
    'prefix' => 'asignacionSerie'
        ], function () {    
        Route::get('getAsignacionSerie', 'API\Negocio\AsignacionSerieController@get_asignacion_serie');
        Route::get('getAsignacionSerieId/{id}', 'API\Negocio\AsignacionSerieController@get_asignacion_serie_id');
        Route::post('saveAsignacionSerie', 'API\Negocio\AsignacionSerieController@save_asignacion_serie');
        
});

//http://localhost/backend_sibacf_web/public/api/consumo/getConsumo
//http://localhost/backend_sibacf_web/public/api/consumo/getConsumoId/1
Route::group([
    'prefix' => 'consumo'
        ], function () {    
        Route::get('getConsumo', 'API\Negocio\ConsumoController@get_consumo');
        Route::get('getConsumoId/{id}', 'API\Negocio\ConsumoController@get_consumo_id');
        Route::post('saveConsumo', 'API\Negocio\ConsumoController@save_consumo');
        
});

//http://localhost/backend_sibacf_web/public/api/detallePago/getDetallePago
//http://localhost/backend_sibacf_web/public/api/detallePago/getDetallePagoId/1
Route::group([
    'prefix' => 'detallePago'
        ], function () {    
        Route::get('getDetallePago', 'API\Negocio\DetallePagoController@get_detalle_pago');
        Route::get('getDetallePagoId/{id}', 'API\Negocio\DetallePagoController@get_detalle_pago_id');
        Route::post('saveDetallePago', 'API\Negocio\DetallePagoController@save_detalle_pago');
        
});

//http://localhost/backend_sibacf_web/public/api/detalleTransaccionPago/getDetalleTransaccionPago
//http://localhost/backend_sibacf_web/public/api/detalleTransaccionPago/getDetalleTransaccionPagoId/1
Route::group([
    'prefix' => 'detalleTransaccionPago'
        ], function () {    
        Route::get('getDetalleTransaccionPago', 'API\Negocio\DetalleTransaccionPagoController@get_detalle_transaccion_pago');
        Route::get('getDetalleTransaccionPagoId/{id}', 'API\Negocio\DetalleTransaccionPagoController@get_detalle_transaccion_pago_id');
        Route::post('saveDetalleTransaccionPago', 'API\Negocio\DetalleTransaccionPagoController@save_detalle_transaccion_pago');
        
});

//http://localhost/backend_sibacf_web/public/api/item/getItem
//http://localhost/backend_sibacf_web/public/api/item/getItemId/1
Route::group([
    'prefix' => 'item'
        ], function () {    
        Route::get('getItem', 'API\Negocio\ItemController@get_item');
        Route::get('getItemId/{id}', 'API\Negocio\ItemController@get_item_id');
        Route::post('saveItem', 'API\Negocio\ItemController@save_item');
        
});

//http://localhost/backend_sibacf_web/public/api/serie/getSerie
//http://localhost/backend_sibacf_web/public/api/serie/getSerieId/1
Route::group([
    'prefix' => 'serie'
        ], function () {    
        Route::get('getSerie', 'API\Negocio\SerieController@get_serie');
        Route::get('getSerieId/{id}', 'API\Negocio\SerieController@get_serie_id');
        Route::post('saveSerie', 'API\Negocio\SerieController@save_serie');
        
});

//http://localhost/backend_sibacf_web/public/api/transaccionPago/getTransaccionPago
//http://localhost/backend_sibacf_web/public/api/transaccionPago/getTransaccionPagoId/1
Route::group([
    'prefix' => 'transaccionPago'
        ], function () {    
        Route::get('getTransaccionPago', 'API\Negocio\TransaccionPagoController@get_transaccion_pago');
        Route::get('getTransaccionPagoId/{id}', 'API\Negocio\TransaccionPagoController@get_transaccion_pago_id');
        Route::post('saveTransaccionPago', 'API\Negocio\TransaccionPagoController@save_transaccion_pago');
        
});
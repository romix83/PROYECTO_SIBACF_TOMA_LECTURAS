export class Usuario {
    id_usuario: bigint;
    persona_empresa_id: bigint;
    login: string;
    pass: string;
    confirmacion: boolean;
    fecha_expiracion: Date;
    fecha_ultimo_acceso: Date;
    sesion_activa: boolean;
    fecha_creacion: Date;
    usuario_creacion: bigint;
    fecha_actualizacion: Date;
    usuario_actualizacion: bigint;
    estado_id: bigint;
    
}

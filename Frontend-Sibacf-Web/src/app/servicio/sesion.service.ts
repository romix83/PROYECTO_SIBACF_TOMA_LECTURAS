import { Injectable } from '@angular/core';

const SESSION_TOKEN = 'Token';
const SESSION_PERSONA_EMPRESA_ID = 'PersonaEmpresaId';
const SESSION_USUARIO_ID = 'UsuarioId';
const SESSION_LOGIN = 'Login';

@Injectable({
  providedIn: 'root'
})
export class SesionService {

  constructor() { }

  /**
   * Ingresa el token en sesion.
  */
  public setToken(token: string): void {
    window.sessionStorage.removeItem(SESSION_TOKEN);
    window.sessionStorage.setItem(SESSION_TOKEN, token);
  }

  /**
   * Obtiene el token de session.
  */
  public getToken(): string {
    return window.sessionStorage.getItem(SESSION_TOKEN);
  }

  /**
   * Ingresa el id de la empresa en sesion.
  */
  public setPersonaEmpresaId(personaEmpresaId: string): void {
    window.sessionStorage.removeItem(SESSION_PERSONA_EMPRESA_ID);
    window.sessionStorage.setItem(SESSION_PERSONA_EMPRESA_ID, personaEmpresaId);
  }

  /**
   * Obtiene el id de la empresa de session.
  */
  public getPersonaEmpresaId(): string {
    return window.sessionStorage.getItem(SESSION_PERSONA_EMPRESA_ID);
  }
  /**
   * Ingresa el id del usuario en sesion.
  */
  public setUsuarioId(usuarioId: string): void {
    window.sessionStorage.removeItem(SESSION_USUARIO_ID);
    window.sessionStorage.setItem(SESSION_USUARIO_ID, usuarioId);
  }

  /**
   * Obtiene el id del usuario de session.
  */
  public getUsuarioId(): string {
    return window.sessionStorage.getItem(SESSION_USUARIO_ID);
  }
  /**
    * Ingresa el login en sesion.
   */
  public setLogin(login: string): void {
    window.sessionStorage.removeItem(SESSION_LOGIN);
    window.sessionStorage.setItem(SESSION_LOGIN, login);
  }

  /**
   * Obtiene el login de session.
  */
  public getLogin(): string {
    return window.sessionStorage.getItem(SESSION_LOGIN);
  }
  /**
   * Remueve todas las sesiones existentes
   */
  public cerrarSesion() {
    window.sessionStorage.clear;
  }

}

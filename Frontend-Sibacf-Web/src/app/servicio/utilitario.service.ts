import { Injectable } from '@angular/core';
import * as CryptoJS from 'crypto-js';

@Injectable({
  providedIn: 'root'
})
export class UtilitarioService {
  private URLSW: string = 'https://localhost/backend_sibacf_web/public/api';
  constructor() { }

  /**
   * Obtiene la URL principal para la invocacion de los servicios web
   */
  getURL(): string{
    return this.URLSW;
  }

  /**
   * Recibe como parametro de entrada una cadena para devolver la misma cadena encriptada en MD5
   * @param dato 
   */
  getDatoEncriptadoEnMD5(dato: string): string
  { 
    return CryptoJS.MD5(dato).toString();
  }
}

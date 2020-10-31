import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { observable, Observable } from 'rxjs';
import { Usuario } from './usuario';


@Injectable({
  providedIn: 'root'
})
export class UsuarioService {
  private urlSw: string = 'https://localhost/backend_sibacf_web/public/api';
  private endPoint: string = '/usuario/getUsuarioLoginPass';
  constructor(private http: HttpClient) { }

  obtenerUsuario(usr : string, pass: string): Observable<Usuario>
  {
    console.log('Entra a SW');
    return this.http.get<Usuario>(`${this.urlSw}${this.endPoint}/${usr}/${pass}`);
  }
}

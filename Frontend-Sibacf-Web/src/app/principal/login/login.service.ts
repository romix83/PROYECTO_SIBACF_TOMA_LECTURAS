import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { observable, Observable } from 'rxjs';
import { Usuario } from './usuario';
import { UtilitarioService} from '../../servicio/utilitario.service';

@Injectable({
  providedIn: 'root'
})
export class LoginService {
  private endPoint: string = '/usuario/getUsuarioLoginPass';
  constructor(
    private http: HttpClient,
    private utilitarioService: UtilitarioService

  ) { }

  obtenerUsuario(usr : string, pass: string): Observable<Usuario>
  {
    console.log(pass);
    console.log(this.endPoint);
    return this.http.get<Usuario>(`${this.utilitarioService.getURL()}${this.endPoint}/${usr}/${pass}`);
  }
}

import { Component, OnInit } from '@angular/core';
import { Usuario } from './usuario'
import { LoginService } from './login.service';
import Swal from 'sweetalert2';
import { UtilitarioService } from '../../servicio/utilitario.service';
import { SesionService } from '../../servicio/sesion.service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {
  usr: string;
  pass: string;
  usuario: Usuario = new Usuario();

  constructor(
    private loginService: LoginService,
    private utilitarioService: UtilitarioService,
    private sesionService: SesionService,
    private router: Router
  ) { }
  ngOnInit(): void {
  }
  /**
   * Metodo que se encarga de autenticar 
   */
  login(): void {
    if (this.usr === undefined || this.pass === undefined) {
      Swal.fire(
        'Error',
        `Especifique un usuario y una contraseña`,
        'error'
      );
    } else {
      this.loginService.obtenerUsuario(this.usr, this.utilitarioService.getDatoEncriptadoEnMD5(this.pass).toString())
        .subscribe(resp => {
          if (resp.login === undefined) {
            Swal.fire('ERROR', `Usuario o contraseña incorrectos.`, 'error');
          } else {
            this.usuario = resp;
            this.sesionService.setUsuarioId(this.usuario.id_usuario.toString());
           /*  if (this.usuario.persona_empresa_id === undefined) {
              console.log('Usuario Administrador');
            } else {
              this.sesionService.setPersonaEmpresaId(this.usuario.persona_empresa_id.toString());
            } */
            this.router.navigate(['./inicio']);
          }
        },
          err => {
            Swal.fire('ERROR', `Usuario o contraseña incorrectos.`, 'error');
          }
        );
    }
  }

}

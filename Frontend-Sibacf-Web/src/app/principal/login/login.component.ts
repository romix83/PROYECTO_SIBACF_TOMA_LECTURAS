import { Component, OnInit } from '@angular/core';
import { Usuario } from './usuario'
import { UsuarioService } from './usuario.service';
import Swal from 'sweetalert2';

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
    private usuarioServicio: UsuarioService
  ) { }

  ngOnInit(): void {
  }
  login(): void
  {
    if(this.usr === undefined || this.pass === undefined){
      Swal.fire(
        'Error',
        `Especifique un usuario y una contraseña`,
        'error'
      );
    }else{
    this.usuarioServicio.obtenerUsuario(this.usr, this.pass)
    .subscribe(resp=>
    {
      //console.log(resp);
      
      this.usuario = resp;//[0];
      console.log(this.usuario.login);
    }
    ) ;
  }
  }
}

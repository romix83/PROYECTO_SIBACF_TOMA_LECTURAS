import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';

@Component({
  selector: 'app-principal',
  templateUrl: './principal.component.html',
  styleUrls: ['./principal.component.css']
})
export class PrincipalComponent implements OnInit {
  empresa : string = 'COLAISA';
  isLogged : boolean = false;
  constructor(
    private router: Router
  ) { }

  ngOnInit(): void {
  }

  public onClikLogin():void{
    if (!this.isLogged) {
      this.router.navigate(['./login']);
    }
  }
}

import { Component, Input, OnInit } from '@angular/core';
import { Producto } from 'src/app/modelo/producto';
import { ProductoService } from 'src/app/servicios/producto.service';
import { ListadoComponent } from '../listado/listado.component';
import { ActivatedRoute, NavigationEnd, ParamMap, Router } from '@angular/router';
import { Subscription } from 'rxjs';

@Component({
  selector: 'app-registro',
  templateUrl: './registro.component.html',
  styleUrls: ['./Registro.component.css']
})
export class RegistroComponent implements OnInit {
  //instancia
  public producto:Producto = new Producto(0,"", 0, 0, true);

  @Input() listar: ListadoComponent | undefined;  

  constructor(private productoService:ProductoService, private route:ActivatedRoute) { }

    ngOnInit(): void {
  }
  
  //funcion registrar
  registrar():void{
    this.productoService.crearProducto(this.producto).subscribe(resp=>{
      this.producto = new Producto(0,"", 0, 0, true);
      console.log(resp);
      this.listar?.ngOnInit();
    });        
  }

  //funcion para mostrar datos en el formulario
  mostrar(arg:Producto){
    this.producto= arg;
    console.log(arg);
  }

  //funcion actualizar
  actualizar():void{
    this.productoService.actualizarProducto(this.producto).subscribe(resp=>{
      this.producto = new Producto(0,"", 0, 0, true);
      console.log(resp);
      this.listar?.ngOnInit();
    });        
  }


}
import { Component, OnInit, Input } from '@angular/core';
import { Producto } from 'src/app/modelo/producto';
import { ProductoService } from 'src/app/servicios/producto.service';
import { Router,ActivatedRoute } from '@angular/router';
import { RegistroComponent } from '../registro/registro.component';

@Component({
  selector: 'app-listado',
  templateUrl: './listado.component.html',
  styleUrls: ['./listado.component.css']
})

export class ListadoComponent implements OnInit {
  producto: Producto= {
  id: 3,
  nombre: "zanahoria",
  precio: 5000,
  stock: 10,
  estado: false
}
  public productos:Array<Producto>=[];

  //@Input() registrar: RegistroComponent | undefined;
  @Input() register: RegistroComponent | undefined;

  constructor(public servicioProducto:ProductoService, private router:Router) { }  
    ngOnInit(): void {
    
      this.servicioProducto.getProductos().subscribe(
        resp=>{
          console.log(resp);
          this.productos = resp;
        }
      );        
    }
        //funcion actualizar
       actualizar(prod:Producto):void{
        let productoTmp: Producto = prod
        this.register?.mostrar(productoTmp);
        }

        //funcion eliminar
        eliminar(id:number):void{
          this.servicioProducto.eliminarProducto(id).subscribe(resp=>{
            console.log(resp);
          });
        }
}

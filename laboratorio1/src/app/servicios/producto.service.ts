import { EventEmitter, Injectable, Output } from '@angular/core';
import { Producto } from '../modelo/producto';
import { HttpClient, HttpHeaders } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class ProductoService {

  public productos:Array<Producto>=[];

  constructor(private http: HttpClient) { }

  public agregar(p:Producto){
    this.productos.push(p);
  }

  public getProductos(){
     //defino la url donde esta el servicio
     let  url ='http://localhost/tiendaservice/ProductoService.php';
        let header=new HttpHeaders();
        header.append('Content-Type','aplication/json')
        header.append('Access-Control-Allow-Origin','http://localhost');

        return this.http.get<Producto[]>(url,{headers:header});
  }

  public crearProducto(producto:Producto){

    //defino la url donde esta el servicio
    let  url ='http://localhost/tiendaservice/ProductoService.php';
       let header=new HttpHeaders();
       header.append('Content-Type','aplication/json')
       header.append('Access-Control-Allow-Methods','"POST, GET,DELETE,PUT"')
       header.append('Access-Control-Allow-Origin','http://localhost');
       return this.http.post(url,JSON.stringify(producto),{headers:header});
 }

  public actualizarProducto(producto:Producto){

    //defino la url donde esta el servicio
    let  url ='http://localhost/tiendaservice/ProductoService.php';
      let header=new HttpHeaders();
      header.append('Content-Type','aplication/json')
      header.append('Access-Control-Allow-Methods','"POST, GET,DELETE,PUT"')
      header.append('Access-Control-Allow-Origin','http://localhost');
      return this.http.put(url,JSON.stringify(producto),{headers:header});
  }

  public eliminarProducto(id:number){

    //defino la url donde esta el servicio
    let  url ='http://localhost/tiendaservice/ProductoService.php?param='+id;
      let header=new HttpHeaders();
      header.append('Content-Type','aplication/json')
      header.append('Access-Control-Allow-Methods','"POST, GET,DELETE,PUT"')
      header.append('Access-Control-Allow-Origin','http://localhost');
      return this.http.delete(url,{headers:header});      
  }


}

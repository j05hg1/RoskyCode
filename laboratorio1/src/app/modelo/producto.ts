export class Producto{ 

    id: number = 0;
    nombre: string = "";
    precio: number = 0;
    stock: number = 0;
    estado: boolean = true;

    constructor(id:number, n:string, p:number, s:number, e:boolean){
        this.id = id;
        this.nombre = n;
        this.precio = p;
        this.stock = s;
        this.estado = e;
    }

}
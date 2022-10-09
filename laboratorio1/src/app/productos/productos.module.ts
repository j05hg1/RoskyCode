import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RegistroComponent } from './registro/registro.component';
import { ListadoComponent } from './listado/listado.component';
import { FormsModule } from '@angular/forms';
import { HttpClientModule } from '@angular/common/http';
import { EditarComponent } from './editar/editar.component';



@NgModule({
  declarations: [
    RegistroComponent,
    ListadoComponent,
    EditarComponent
  ],
  imports: [
    CommonModule,
    FormsModule,
    HttpClientModule    
  ],
  exports:[
    RegistroComponent,
    ListadoComponent
  ]
})
export class ProductosModule { }

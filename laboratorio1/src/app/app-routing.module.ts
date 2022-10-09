import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
//import { ListadoComponent } from './productos/listado/listado.component';
import { RegistroComponent } from './productos/registro/registro.component';

const routes:Routes = [

  {path:'producto/:id/:nombre/:precio/:stock/:estado', component:RegistroComponent, pathMatch: 'full'}

];

@NgModule({  
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }

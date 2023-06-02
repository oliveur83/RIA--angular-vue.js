import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';

import { EtudiantComponent } from './etudiant/etudiant.component'; 
import { PrincipalComponent } from './principal/principal.component';
import { ProfesseurComponent } from './professeur/professeur.component';
import { AdminComponent } from './admin/admin.component';

const routes: Routes = [
  {path: 'principal',component: PrincipalComponent },
  {path: 'etudiant',component: EtudiantComponent },
  {path: 'professeur',component: ProfesseurComponent },
  {path: 'admin',component: AdminComponent },{
    path:'',redirectTo:'principal',pathMatch:'full'
  }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }

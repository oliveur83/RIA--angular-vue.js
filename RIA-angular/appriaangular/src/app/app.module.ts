import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { HttpClientModule } from'@angular/common/http'
import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';

import { EtudiantComponent } from './etudiant/etudiant.component';
import { PrincipalComponent } from './principal/principal.component';
import { FormsModule } from '@angular/forms';
import { ProfesseurComponent } from './professeur/professeur.component';
import { AdminComponent } from './admin/admin.component'; // importer FormsModule ici

@NgModule({
  declarations: [
    AppComponent,

    EtudiantComponent,
     PrincipalComponent,
     ProfesseurComponent,
     AdminComponent
  ],
  imports: [
    HttpClientModule,
    BrowserModule,
    AppRoutingModule,
    FormsModule 
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }

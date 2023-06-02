import { Component } from '@angular/core';
import { BackendService } from '../backend.service';
import { NavigationExtras, Router } from '@angular/router';

import { ActivatedRoute, Params } from '@angular/router';
@Component({
  selector: 'app-professeur',
  templateUrl: './professeur.component.html',
  styleUrls: ['./professeur.component.css']
})
export class ProfesseurComponent {
  for_find_id :any;
  items: any; 
  itemsedt: any; 
  users :any;
  username: string;
  password: string;
  id: string;
  edt :any;

  afficher_note_for:  boolean = false;
  afficher_edt_for: boolean = false;
  afficher_liste_for: boolean = false;
  constructor(private backendService: BackendService,private activatedRoute: ActivatedRoute,private router: Router) {} // utilisez activatedRoute plutôt que route
 
  ngOnInit() {
    // Récupérez les paramètres de redirection
    this.activatedRoute.queryParams.subscribe((params: Params) => { // définissez le type de params
      this.username = params['username'];
      this.password = params['password'];
    });
    this.backendService.toto().subscribe((data: any) => {
      
      this.items =Object.values(data);
      this.for_find_id = JSON.parse(this.items);
      const user = this.for_find_id.find((u: any) => u.prenom === this.username && u.password === this.password);
      // if nom et password ce trouve dans ma BDD
      if (user)
      {
         this.id=user.id_utilisateur;
    }});

  }
  EDT() {
    this.backendService.edt_prof(this.id).subscribe((data: any) => {
      console.log("toto",data);
      this.itemsedt =Object.values(data);
      this.edt = JSON.parse(this.itemsedt);
      console.log(this.edt)
    });

    this.afficher_edt_for=true;
    this.afficher_note_for=false;
    this.afficher_liste_for=false;
  }
  note() {
this.afficher_note_for=true;
this.afficher_edt_for=false;
  }

  id_cours :string;
  id_utilisateur: string;
  notee :string;
  mettre_note() {
    this.backendService.mettre_note_prof(this.id_cours,this.id_utilisateur,this.notee).subscribe((data: any) => {
      console.log("toto",data);

   });
      }
  liste_etudiant() {
        this.backendService.liste_etudiant_prof(this.id).subscribe((data: any) => {
          console.log("toto",data);
          this.itemsedt =Object.values(data);
         this.edt = JSON.parse(this.itemsedt);
       });
       this.afficher_edt_for=false;
    this.afficher_note_for=false;
    this.afficher_liste_for=true;
          }
}

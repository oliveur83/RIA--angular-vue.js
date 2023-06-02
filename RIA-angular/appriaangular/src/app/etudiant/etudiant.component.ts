
import { BackendService } from '../backend.service';
import { Component, OnInit } from '@angular/core';

import { ActivatedRoute, Params } from '@angular/router';
import { NavigationExtras, Router } from '@angular/router';
@Component({
  selector: 'app-page3',
  templateUrl: './etudiant.component.html',
  styleUrls: ['./etudiant.component.css']
})
export class EtudiantComponent implements OnInit {
  
  for_find_id :any;
  items: any; 
  itemsedt: any; 
  users :any;
  username: string;
  password: string;
  id: string;
  edt :any;
  moyennes: { [key: string]: number } = {};
  somme:number=0;

    // Définissez une variable booléenne pour suivre l'état actuel (notes ou emploi du temps)
    showNotesFlag: boolean = false;
    showEDTFlag: boolean = false;
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

notes() {
    this.backendService.note_etudiant(this.id).subscribe((data: any) => {
      
      this.items =Object.values(data);
      this.users = JSON.parse(this.items);


      for (const note of this.users) {
        const { nom_cours, note: value } = note;

        if (!this.moyennes[nom_cours]) {
          this.somme+=parseInt(value)
          this.moyennes[nom_cours] = this.somme;
          console.log(value,this.somme);
        } else {
          this.somme+=parseInt(value)
          this.moyennes[nom_cours] = this.somme;
          console.log(value,this.somme);
        }
      }
      this.moyennes['ANGLAIS']=this.moyennes['ANGLAIS']/16
    });
    this.showNotesFlag = true;
    this.showEDTFlag = false;
  }
  
  EDT() {
    this.backendService.edt(this.id).subscribe((data: any) => {
      console.log("toto",data);
      this.itemsedt =Object.values(data);
      this.edt = JSON.parse(this.itemsedt);
      console.log(this.edt)
    });
    this.showNotesFlag = false;
    this.showEDTFlag = true;
  }
  
}

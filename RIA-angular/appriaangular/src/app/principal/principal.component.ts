import { Component } from '@angular/core';
import { POKEMONS } from '../listepokemon';
import { Pokemon } from '../clpokemon';
import { BackendService } from '../backend.service';

import { NavigationExtras, Router } from '@angular/router';
@Component({
  selector: 'app-principal',
  templateUrl: './principal.component.html',
  styleUrls: ['./principal.component.css']
})
export class PrincipalComponent {
  items: any; 
  users :any;
  pokemon:Pokemon[] =POKEMONS;
  pokemonselect: Pokemon | undefined;
  username: string;
  password: string;
  constructor(private backendService: BackendService ,private router: Router){}

// fonction pour la conenction 
onSubmit() {
  // Vérifier si les champs de saisie ne sont pas vides
  if (this.username && this.password) {
    this.backendService.toto().subscribe((data: any) => {
      
      this.items =Object.values(data);
      this.users = JSON.parse(this.items);
      console.log("toto",this.users,this.username);
      const user = this.users.find((u: any) => u.prenom === this.username && u.password === this.password);
      // if nom et password ce trouve dans ma BDD
      if (user)
      {
        console.log("yes")
        const navigationExtras: NavigationExtras = {
          queryParams: {
            username: this.username,
            password: this.password
          }
        };
        const prof = this.users.find((u: any) => u.prenom === this.username && u.password === this.password && u.role =="etudiant" );
        // tester etudiant ou non 
        console.log("ah")
        if (prof)
        {
          console.log("clement est con ")
          this.router.navigate(['/etudiant'], navigationExtras);
        
        }
       else  if (this.username== "admin" && this.password== "admin"){
          this.router.navigate(['/admin']);
        }
      else{

        this.router.navigate(['/professeur'], navigationExtras);
        console.log("toto")
        }
      }
    });
    // Vérifier si les identifiants sont valides

  } 
}

}

import { Component } from '@angular/core';
import { BackendService } from '../backend.service';

@Component({
  selector: 'app-admin',
  templateUrl: './admin.component.html',
  styles: [`
  button {
    display: inline-block;
    width: 30%;
    margin: 10px;
    padding: 10px;
    font-size: 16px;
    text-align: center;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 5px;
  }

  @media screen and (max-width: 768px) {
    button {
      width: 45%;
    }
  }

  @media screen and (max-width: 480px) {
    button {
      width: 100%;
    }
  }
`]
})
export class AdminComponent {

  constructor(private backendService: BackendService) {} // utilisez activatedRoute plutôt que route
  affichage:string;
  liste:any;
  item:any;

  formulaire_ajout: string 
  ajouter_for(type: string): void {
 
    this.formulaire_ajout=type
  }
  formulaire_modif: string 
  modifier_for(type: string): void {
 
    this.formulaire_modif=type
  }
  formulaire_supp: string 
  supprimer_for(type: string): void {
 
    this.formulaire_supp=type
  }
  nom :string;
  prenom :string;
  role :string;
  email :string;
  mot_de_passe :string;
  tel :string;
  id_utilisateur:string;
  diplome_etudiant:string;
  id_filiere:string;
  responsabilite_ens:string;
  volume_horaire:string;
  description:string;
  id_responsable:string;
  nombre_annee:string;
  niveau:string;
  id_enseignant:string;
  nom_cours :string;
  libelle_ue:string;
  id_cours:string;
  date_debut:string;
  date_fin:string;
  date_debutt:Date;
  date_finn:Date;
  type_cours:string;
  id_etudiant:string;
  id_ue:string;
 id_edt:string;
 nom_filliere:string;
  valide_for(type: string): void {
    switch (type) {
      case 'util':
        this.backendService.ajout_util(this.nom, this.prenom, this.role, this.email, this.mot_de_passe, this.tel).subscribe((data: any) => {
          this.item =Object.values(data);
          console.log(this.item)
          
        });
        break;
        case 'etud':
          this.backendService.ajout_etud(this.id_utilisateur, this.diplome_etudiant, this.id_filiere).subscribe((data: any) => {
            this.item = Object.values(data);
           
          });
          
          break;
          case 'ens':
            this.backendService.ajout_ens(this.id_utilisateur, this.responsabilite_ens, this.volume_horaire).subscribe((data: any) => {
              this.item = Object.values(data);
             
            });
            break;
            case 'fill':
              this.backendService.ajout_fill(this.nom, this.description, this.id_responsable, this.niveau, this.nombre_annee)
              .subscribe((data: any) => {
                  this.item = Object.values(data);
                 
              });
              break;

              case 'edt':
                this.backendService.ajout_edt(this.id_filiere, this.id_cours, this.date_debut, this.date_fin,this. type_cours).subscribe((data: any) => {
                this.item =Object.values(data);
                   
                  });
                break;
                case 'etud_cours':
                  this.backendService.ajout_etud_cours(this.id_etudiant,this. id_cours).subscribe((data: any) => {
                    this.item =Object.values(data);
                   
                  });
                  break;
                  case 'ue':
                    this.backendService.ajout_ue(this.description, this.id_filiere, this.libelle_ue).subscribe((data: any) => {
                      this.item = Object.values(data);
                     
                  });
                  
                    break;
                    case 'cours':
                      this.backendService.ajout_cours(this.id_enseignant, this.id_ue, this.nom_cours).subscribe((data: any) => {
                        this.item = Object.values(data);
                       
                      });
                      break;
                                            
      
      }
  }
  getListe(type: string): void {
    this.affichage = type;
    switch (type) {
      case 'util':
        this.backendService.toto().subscribe((data: any) => {
          this.item =Object.values(data);
          this.liste = JSON.parse(this.item);
        });
        break;
      case 'ens':
        this.backendService.liste_ens().subscribe((data: any) => {
              this.item =Object.values(data);
          this.liste = JSON.parse(this.item);
        });
        break;
      case 'etud':
        this.backendService.liste_etud().subscribe((data: any) => {
              this.item =Object.values(data);
          this.liste = JSON.parse(this.item);
        });
        break;
      case 'fill':
        this.backendService.liste_fill().subscribe((data: any) => {
              this.item =Object.values(data);
          this.liste = JSON.parse(this.item);
        });
        break;
      case 'cours':
          this.backendService.liste_cours().subscribe((data: any) => {
              this.item =Object.values(data);
              console.log(this.item)
          this.liste = JSON.parse(this.item);
          
        });
        break;
      case 'edt':
          this.backendService.edt_tout().subscribe((data: any) => {
                this.item =Object.values(data);
            this.liste = JSON.parse(this.item);
            console.log(this.liste)
        });
        break;
        case 'ue':
          this.backendService.liste_ue().subscribe((data: any) => {
                this.item =Object.values(data);
            this.liste = JSON.parse(this.item);
            console.log(this.liste)
        });
        break;
      }}
  valide_for_mod(type: string): void {
        switch (type) {
          case 'util':
            this.backendService.modif_util(this.nom, this.prenom, this.email, this.mot_de_passe, this.tel,this.id_utilisateur).subscribe((data: any) => {
              this.item =Object.values(data);
              console.log(this.item)});
            break;
          case 'etud':
            this.backendService.modif_etudiant(this.id_etudiant, this.diplome_etudiant, this.id_filiere).subscribe((data: any) => {
              this.item =Object.values(data);
              console.log(this.item)});
            break;
          case 'enseignant':
            this.backendService.modif_enseignant(this.id_utilisateur, this.responsabilite_ens, this.volume_horaire).subscribe((data: any) => {
              this.item =Object.values(data);
              console.log(this.item)});
            break;
          case 'filiere':
            this.backendService.modif_filiere(this.id_filiere, this.nom_filliere, this.description, this.niveau, this.nombre_annee, this.id_responsable).subscribe((data: any) => {
              this.item =Object.values(data);
              console.log(this.item)});
            break;
          case 'cours':
            this.backendService.modif_cours(this.id_cours,this.id_enseignant, this.id_ue).subscribe((data: any) => {
              this.item =Object.values(data);
              console.log(this.item)}); 
            break;
          case 'ue':
            this.backendService.modif_ue( this.id_filiere,this.id_ue, this.libelle_ue, this.description).subscribe((data: any) => {
              this.item =Object.values(data);
              console.log(this.item)}); 
            break;
          case 'edt':
            this.backendService.modif_edt(this.id_edt, this.id_filiere, this.id_cours, this.date_debutt, this.date_finn).subscribe((data: any) => {
              this.item =Object.values(data);
              console.log(this.item)}); 
            break;
          default:
            break;
        }
      }
      
      

  supp_for(type: string): void {
    switch (type) {
      case 'util':
        this.backendService.sup_util(this.id_utilisateur).subscribe((data: any) => {
          this.item = Object.values(data);
          console.log(this.item)
        });
        break;
      case 'etud':
        this.backendService.sup_etud(this.id_utilisateur).subscribe((data: any) => {
          this.item = Object.values(data);
          console.log(this.item)
        });
        break;
      case 'enseignant':
        this.backendService.sup_ens(this.id_utilisateur).subscribe((data: any) => {
          this.item = Object.values(data);
          console.log(this.item)
        });
        break;
      case 'filiere':
        this.backendService.sup_filiere(this.id_filiere).subscribe((data: any) => {
          this.item = Object.values(data);
          console.log(this.item)
        });
        break;
      case 'cours':
        this.backendService.sup_cours(this.id_cours).subscribe((data: any) => {
          this.item = Object.values(data);
          console.log(this.item)
        });
        break;
      case 'ue':
        this.backendService.sup_ue(this.id_ue).subscribe((data: any) => {
          this.item = Object.values(data);
          console.log(this.item)
        });
        break;
      case 'edt':
        this.backendService.sup_edt(this.id_edt).subscribe((data: any) => {
          this.item = Object.values(data);
          console.log(this.item)
        });
        break;
      default:
        console.log('Type non reconnu');
        break;
    }
  }

}

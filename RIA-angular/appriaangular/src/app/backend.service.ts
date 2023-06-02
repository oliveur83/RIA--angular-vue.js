import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class BackendService {



  private apiUrl = 'http://localhost/RIA/'; // Remplacez cette URL par l'URL de votre backend

  constructor(private http: HttpClient) { }
  // pour affichage 
  toto() {
    const url = `${this.apiUrl}/Welcome/lutil`;
    return this.http.get(url);
  }
  liste_etud() {
    const url = `${this.apiUrl}/Welcome/letudiant`;
    return this.http.get(url);
  }
  liste_ens() {
    const url = `${this.apiUrl}/Welcome/lprof`;
    return this.http.get(url);
  }
  liste_fill() {
    const url = `${this.apiUrl}/Welcome/lfil`;
    return this.http.get(url);
  }
  liste_ue() {
    const url = `${this.apiUrl}/Welcome/lue`;
    return this.http.get(url);
  }
  liste_cours() {
    const url = `${this.apiUrl}/Welcome/lcours`;
    return this.http.get(url);
  }
  //insertion 
  note_etudiant(parametre : string) {
    const url = `${this.apiUrl}/Welcome/lnotel?id_etudiant=${parametre}`;
    return this.http.get(url);
  }
  mettre_note_prof(id_cours : string,id_utilisateur : string,note : string) {
    const url = `${this.apiUrl}/Ajouter/ajout_note_insert?id_cours=${id_cours}&id_utilisateur=${id_utilisateur}&note=${note}`;
    return this.http.get(url);
  }
  liste_etudiant_prof(id :string){
    const url = `${this.apiUrl}/Welcome/liste_etudiant_prof?id=${id}`;
    return this.http.get(url);
  }
 
  
  edt(parametre : string) {   
    const url = `${this.apiUrl}/Welcome/ledtl?id_etudiant=${parametre}`;
    return this.http.get(url);
  }
  edt_prof(parametre : string) {
    const url = `${this.apiUrl}/Welcome/ledt?id_prof=${parametre}`;
    return this.http.get(url);
  }
  edt_tout() {
    const url = `${this.apiUrl}/Welcome/ledt_tout`;
    return this.http.get(url);
  }
  // Ajoutez ici d'autres méthodes pour appeler votre backend
  // ajouter
  ajout_etud_cours(id_etudiant: string, id_cours: string) {
    const url = `${this.apiUrl}/Ajouter/ajout_etud_cours_insert?id_etudiant=${id_etudiant}&id_cours=${id_cours}`;
    return this.http.get(url);
}

  ajout_ens(id_utilisateur: string, responsabilite_ens: string, volume_horaire: string) {
    const url = `${this.apiUrl}/Ajouter/ajout_prof_insert?id_utilisateur=${id_utilisateur}&responsabilite_ens=${responsabilite_ens}&volume_horaire=${volume_horaire}`;
    return this.http.get(url);
  }
  ajout_etud(id_utilisateur: string, diplome_etudiant: string, id_filiere: string) {
    const url = `${this.apiUrl}/Ajouter/ajout_etudiant_insert?id_utilisateur=${id_utilisateur}&diplome_etudiant=${diplome_etudiant}&id_filiere=${id_filiere}`;
    return this.http.get(url);
  }
  ajout_util(nom: string, prenom: string, role: string, email: string, mot_de_passe: string, tel: string) {
    const url = `${this.apiUrl}/Ajouter/ajout_etud_insert?nom=${nom}&prenom=${prenom}&role=${role}&email=${email}&mot_de_passe=${mot_de_passe}&tel=${tel}`;
    return this.http.get(url);
  }
  ajout_edt(id_filiere: string, id_cours: string, date_debut: string, date_fin: string, type_cours: string) {
    const url = `${this.apiUrl}/Ajouter/ajout_edt_insert?id_filiere=${id_filiere}&id_cours=${id_cours}&date_debut=${date_debut}&date_fin=${date_fin}&type_cours=${type_cours}`;
    return this.http.get(url);
}
  ajout_fill(nom: string, description: string, id_responsable: string, niveau: string, nombre_annee: string) {
    const url = `${this.apiUrl}/Ajouter/ajout_fil_insert?nom=${nom}&description=${description}&id_responsable=${id_responsable}&niveau=${niveau}&nombre_annee=${nombre_annee}`;
    return this.http.get(url);
  }
  ajout_ue(description: string, id_filiere: string, libelle_ue: string) {
    const url = `${this.apiUrl}/Ajouter/ajout_ue_insert?description=${description}&id_filiere=${id_filiere}&libelle_ue=${libelle_ue}`;
    return this.http.get(url);
  }
  ajout_cours(id_enseignant: string, id_ue: string, nom_cours: string) {
    const url = `${this.apiUrl}/Ajouter/ajout_cours_insert?id_enseignant=${id_enseignant}&id_ue=${id_ue}&nom_cours=${nom_cours}`;
    return this.http.get(url);
  }
  //modification
  modif_util(nom: string, prenom: string, email: string, mot_de_passe: string, tel: string ,id_utilisateur: string,)  {
    const url = `${this.apiUrl}/Modifier/modif_etud_insert?nom=${nom}&prenom=${prenom}&id_utilisateur=${id_utilisateur}&email=${email}&password=${mot_de_passe}&tel=${tel}`;
    return this.http.get(url);
  }
  
  modif_etudiant(id_etudiant: string, diplome_etudiant: string, id_filiere: string) {
    const url = `${this.apiUrl}/Modifier/modif_etudiant_insert?id_etudiant=${id_etudiant}&diplome_etudiant=${diplome_etudiant}&id_filiere=${id_filiere}`;
    return this.http.get(url);
  }
  
  modif_enseignant(id_utilisateur: string, responsabilite_ens: string, volume_horaire: string) {
    const url = `${this.apiUrl}/Modifier/modif_prof_insert?id_utilisateur=${id_utilisateur}&responsabilite_ens=${responsabilite_ens}&volume_horaire=${volume_horaire}`;
    return this.http.get(url);
  }
  
  modif_filiere(id_filiere: string, nom_filiere: string, description: string, niveau: string, nombre_annee: string, id_responsable: string)  {
    const url = `${this.apiUrl}/Modifier/modif_fil_insert?id_filiere=${id_filiere}&nom_filiere=${nom_filiere}&description=${description}&niveau=${niveau}&nombre_annee=${nombre_annee}&id_responsable=${id_responsable}`;
    return this.http.get(url);
  }
  // Fonction de modification d'un cours
modif_cours(id_cours: string, id_professeur: string, id_matiere: string) {
  const url = `${this.apiUrl}/Modifier/modif_cours_insert?id_cours=${id_cours}&id_enseignant=${id_professeur}&id_ue=${id_matiere}`;
  return this.http.get(url);
}

// Fonction de modification d'un événement de l'emploi du temps
modif_edt(id_edt: string,id_filiere: string,id_cours: string, date_debut: Date, date_fin: Date) {
  const url = `${this.apiUrl}/Modifier/modif_edt_insert?id_filiere=${id_filiere}&date_debut=${date_debut.toISOString()}&date_fin=${date_fin.toISOString()}&id_cours=${id_cours}`;
  return this.http.get(url);
}
modif_ue(id_filiere: string, id_ue: string, libelle_ue: string, description: string){
  const url = `${this.apiUrl}/Modifier/modif_ue_insert?id_filiere=${id_filiere}&id_ue=${id_ue}&libelle_ue=${libelle_ue}&description=${description}`;
  return this.http.get(url);
}
////fdsqfdsqfsqfsqfsqdf
//fdfdsqfdsqf
//fqdfqs
  //suprresion
  sup_util(id_utilisateur:string){
    const url = `${this.apiUrl}/Delete/delete_etud_insert?id_utilisateur=${id_utilisateur}`;
    return this.http.get(url);
  }
  // Supprimer un enseignant par son id
sup_ens(id_enseignant: string) {
  const url = `${this.apiUrl}/Delete/delete_prof_insert?id_utilisateur=${id_enseignant}`;
  return this.http.get(url);
}
sup_etud(id_etudiant: string) {
  const url = `${this.apiUrl}/Delete/delete_etudiant_insert?id_utilisateur=${id_etudiant}`;
  return this.http.get(url);
}
// Supprimer une UE par son id
sup_ue(id_ue: string) {
  const url = `${this.apiUrl}/Delete/delete_ue_insert?id_ue=${id_ue}`;
  return this.http.get(url);
}

// Supprimer une filière par son id
sup_filiere(id_filiere: string) {
  const url = `${this.apiUrl}/Delete/delete_fil_insert?id_fil=${id_filiere}`;
  return this.http.get(url);
}

// Supprimer un cours par son id
sup_cours(id_cours: string) {
  const url = `${this.apiUrl}/Delete/delete_cours_insert?id_cours=${id_cours}`;
  return this.http.get(url);
}

// Supprimer un emploi du temps par son id
sup_edt(id_edt: string) {
  const url = `${this.apiUrl}/Delete/delete_edt_insert?id_edt=${id_edt}`;
  return this.http.get(url);
}

}

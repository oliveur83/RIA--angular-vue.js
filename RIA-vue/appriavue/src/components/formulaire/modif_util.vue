<template>
  <div>
    <label for="nom">nom :</label>
    <input type="text" v-model="nom" id="nom">
    <br>
    <label for="prenom">prenom:</label>
    <input type="text" v-model="prenom" id="prenom">
    <br>
    <label for="email">email:</label>
    <input type="text" v-model="email" id="email">
    <br>
    <label for="password">password:</label>
    <input type="password" v-model="mot_de_passe" id="password">
    <br>
    <label for="tel">tel:</label>
    <input type="text" v-model="tel" id="tel">
    <br>
    <label for="id_utilisateur">id_utilisateur pour changement :</label>
    <input type="text" v-model="id_utilisateur" id="id_utilisateur">
    <br>
    <button @click="ajout()">Envoyer</button>
   
  </div>
</template>

<script>
export default {
  data() {
    return {
      nom: '',
      prenom: '',
      email: '',
      mot_de_passe: '',
      tel: '',
      id_utilisateur: ''
    }
  },  methods: {
      async ajout() {
        const response = await fetch(`http://localhost/RIA//Modifier/modif_etud_insert?nom=${this.nom}&prenom=${this.prenom}&id_utilisateur=${this.id_utilisateur}&email=${this.email}&password=${this.mot_de_passe}&tel=${this.tel}`);
    console.log(response) // Ajouter la logique pour ajouter un utilisateur
      }
    }
}
</script>

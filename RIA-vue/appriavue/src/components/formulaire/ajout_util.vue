<template>
  <div>
    <label for="nom">Nom:</label>
    <input type="text" v-model="nom" id="nom">
    <br>
    <label for="prenom">Prénom:</label>
    <input type="text" v-model="prenom" id="prenom">
    <br>
    <label for="role">Rôle:</label>
    <input type="text" v-model="role" id="role">
    <br>
    <label for="email">Email:</label>
    <input type="email" v-model="email" id="email">
    <br>
    <label for="mot_de_passe">Mot de passe:</label>
    <input type="password" v-model="mot_de_passe" id="mot_de_passe">
    <br>
    <label for="tel">Téléphone:</label>
    <input type="tel" v-model="tel" id="tel">
    <br>
    <button @click="ajout()">Envoyer</button>
  </div>
</template>

<script>
export default {
  name: 'ajout_util',
  data() {
    return {
      nom: '',
      prenom: '',
      role: '',
      email: '',
      mot_de_passe: '',
      tel: ''
    };
  },  methods: {
      async ajout() {
        const response = await fetch(`http://localhost/RIA//Ajouter/ajout_etud_insert?nom=${this.nom}&prenom=${this.prenom}&role=${this.role}&email=${this.email}&mot_de_passe=${this.mot_de_passe}&tel=${this.tel}`);
    console.log(response) // Ajouter la logique pour ajouter un utilisateur
      }
    }
}
</script>

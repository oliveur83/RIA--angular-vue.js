<template>
    <div>
      <label for="id_cours">id_cours:</label>
      <input type="text" v-model="id_cours" id="id_cours">
      <br>
      <button @click="ajout()">Envoyer</button>
   </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        id_cours: ''
      }
    },
    methods: {
      async ajout() {
        const response = await fetch(`http://localhost/RIA//Delete/delete_cours_insert?id_cours=${this.id_cours}`);
    console.log(response) // Ajouter la logique pour ajouter un utilisateur
      }
    }
  }
  </script>
  
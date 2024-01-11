<template>
  <div>
    <label for="id_utilisateur">id_utilisateur:</label>
    <input type="text" v-model="id_utilisateur">
    <br>
    <button @click="ajout()">Envoyer</button>
   
  </div>
</template>

<script>
export default {
  data() {
    return {
      id_utilisateur: ''
    }
  }
  ,
    methods: {
      async ajout() {
        const response = await fetch(`http://localhost/RIA//Delete/delete_etud_insert?id_utilisateur=${this.id_utilisateur}`);
    console.log(response) // Ajouter la logique pour ajouter un utilisateur
      }
    }
}
</script>

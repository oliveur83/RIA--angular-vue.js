<template>
  <div>
    <label for="username">mettre une note :</label>
    <input type="text" id="username" v-model="note">
    <label for="username">id_cours :</label>
    <input type="text" id="username" v-model="id_cours">
    <label for="username">id_utilisateur :</label>
    <input type="text" id="username" v-model="id_utilisateur">
 
    <button @click="ajout()">Envoyer</button>
    
  </div>
</template>

<script>
export default {
  name: 'note_prof',
  data() {
    return {
      note: '',
      id_cours: '',
      id_utilisateur: '',
    }
  },
  methods: {
      async ajout() {
        const response = await fetch(`http://localhost/RIA/Ajouter/ajout_fil_insert?nom=${this.nom}&description=${this.description}&id_responsable=${this.id_responsable}&niveau=${this.niveau}&nombre_annee=${this.nombre_annee}`);
    console.log(response) // Ajouter la logique pour ajouter un utilisateur
      }
    }
}
</script>

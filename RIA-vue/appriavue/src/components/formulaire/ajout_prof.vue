<template>
  <div>
    <label for="username">nombre heure:</label>
    <input type="text" id="username" v-model="heure">
    <label for="username">responsable:</label>
    <input type="text" id="username" v-model="responsable">
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
      heure: '',
      responsable: '',
      id_utilisateur: '',
    }
  }    ,
  methods: {
      async ajout() {
        const response = await fetch(`http://localhost/RIA//Ajouter/ajout_prof_insert?id_utilisateur=${this.id_utilisateur}&responsabilite_ens=${this.responsabie}&volume_horaire=${this.heure}`);
    console.log(response) // Ajouter la logique pour ajouter un utilisateur
      }
    }
}
</script>

<template>
  <form @submit.prevent="addUtilisateur">
    <label for="id_utilisateur">id_enseignant:</label>
    <input type="text" v-model="id_utilisateur" id="id_utilisateur">
    <br>
    <label for="responsabilite_ens">responsabilite_ens:</label>
    <input type="description" v-model="responsabilite_ens" id="responsabilite_ens">
    <br>
    <label for="volume_horaire">volume_horaire:</label>
    <input type="description" v-model="volume_horaire" id="volume_horaire">
    <br>    
    
    <button @click="ajout()">Envoyer</button>
    </form>
</template>

<script>
export default {
  data() {
    return {
      id_utilisateur: '',
      responsabilite_ens: '',
      volume_horaire: ''
    }
  },  methods: {
      async ajout() {
        const response = await fetch(`http://localhost/RIA/Modifier/modif_prof_insert?id_utilisateur=${this.id_utilisateur}&responsabilite_ens=${this.responsabilite_ens}&volume_horaire=${this.volume_horaire}`);
    console.log(response) // Ajouter la logique pour ajouter un utilisateur
      }
    }
}
</script>

<template>
  <div>
    <label for="id_filiere">id_filiere:</label>
    <input type="text" v-model="id_filiere" id="id_filiere">
    <br>
    <label for="id_ue">id_ue:</label>
    <input type="description" v-model="id_ue" id="id_ue">
    <br>
    <label for="libelle_ue">libelle_ue:</label>
    <input type="description" v-model="libelle_ue" id="libelle_ue">
    <br>
    <label for="description">description:</label>
    <input type="description" v-model="description" id="description">
    <br>
   
    <button @click="ajout()">Envoyer</button>
    </div>
</template>

<script>
export default {
  data() {
    return {
      id_filiere: '',
      id_ue: '',
      libelle_ue: '',
      description: '',
    }
  },
  
  methods: {
      async ajout() {
        const response = await fetch(`http://localhost/RIA//Modifier/modif_ue_insert?id_filiere=${this.id_filiere}&id_ue=${this.id_ue}&libelle_ue=${this.libelle_ue}&description=${this.description}`);
    console.log(response) // Ajouter la logique pour ajouter un utilisateur
      }
    }
}
</script>

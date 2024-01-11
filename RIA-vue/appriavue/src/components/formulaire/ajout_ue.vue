<template>
  <div>
    <label for="description">description:</label>
    <input type="text" v-model="description" id="description">
    <br>
    <label for="id_filiere">id_filiere:</label>
    <input type="description" v-model="id_filiere" id="id_filiere">
    <br>
    <label for="libelle_ue">libelle_ue:</label>
    <input type="description" v-model="libelle_ue" id="libelle_ue">
    <br>
    <button @click="valider()">Ajouter utilisateur</button>
  </div>
</template>

<script>
export default {
  data() {
    return {
      description: '',
      id_filiere: '',
      libelle_ue: '',
    }
  },
  methods: {
      async ajout() {
        const response = await fetch(`http://localhost/RIA//Ajouter/ajout_ue_insert?description=${this.description}&id_filiere=${this.id_filiere}&libelle_ue=${this.libelle_ue}`);
    console.log(response) // Ajouter la logique pour ajouter un utilisateur
      }
    }
}
</script>

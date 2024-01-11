<template>
  <div>
    <label for="id_etudiant">id_etudiant:</label>
    <input type="text" v-model="id_etudiant" id="id_etudiant">
    <br>
    <label for="diplome_etudiant">diplome_etudiant:</label>
    <input type="description" v-model="diplome_etudiant" id="diplome_etudiant">
    <br>
    <label for="id_filiere">id_filiere:</label>
    <input type="description" v-model="id_filiere" id="id_filiere">
    <br>
    <button @click="ajout()">Envoyer</button>
     </div>
</template>

<script>
export default {
  data() {
    return {
      id_etudiant: '',
      diplome_etudiant: '',
      id_filiere: '',
    };
  },
  
  methods: {
      async ajout() {
        const response = await fetch(`http://localhost/RIA/Modifier/modif_etudiant_insert?id_etudiant=${this.id_etudiant}&diplome_etudiant=${this.diplome_etudiant}&id_filiere=${this.id_filiere}`);
    console.log(response) // Ajouter la logique pour ajouter un utilisateur
      }
    }
};
</script>

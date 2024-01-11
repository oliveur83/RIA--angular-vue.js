<template>
<div>
    <label for="id_filiere">id_filiere:</label>
    <input type="text" v-model="id_filiere" id="id_filiere">
    <br>
    <label for="nom_filiere">nom_filiere:</label>
    <input type="description" v-model="nom_filliere" id="nom_filiere">
    <br>
    <label for="description">description:</label>
    <input type="description" v-model="description" id="description">
    <br>
    <label for="niveau">niveau:</label>
    <input type="text" v-model="niveau" id="niveau">
    <br>
    <label for="nombre_annee">nombre_annee:</label>
    <input type="description" v-model="nombre_annee" id="nombre_annee">
    <br>
    <label for="id_responsable">id_responsable:</label>
    <input type="description" v-model="id_responsable" id="id_responsable">
    <br>    
 
    <button @click="ajout()">Envoyer</button>
  </div>
</template>

<script>
export default {
  data() {
    return {
      id_filiere: '',
      nom_filliere: '',
      description: '',
      niveau: '',
      nombre_annee: '',
      id_responsable: ''
    }
  },
  methods: {
      async ajout() {
        const response = await fetch(`http://localhost/RIA//Modifier/modif_fil_insert?id_filiere=${this.id_filiere}&nom_filiere=${this.nom_filiere}&description=${this.description}&niveau=${this.niveau}&nombre_annee=${this.nombre_annee}&id_responsable=${this.id_responsable}`);
    console.log(response) // Ajouter la logique pour ajouter un utilisateur
      }
    }
}
</script>

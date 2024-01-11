<template>
  <form @submit.prevent="valide_for('formation')">
    <label for="nom">Nom:</label>
    <input type="text" v-model="nom" id="nom">
    <br>
    <label for="description">description:</label>
    <input type="description" v-model="description" id="description">
    <br>
    <label for="id_responsable">responsable(id):</label>
    <input type="id_responsable" v-model="id_responsable" id="id_responsable">
    <br>
    <label for="niveau">niveau:</label>
    <input type="niveau" v-model="niveau" id="niveau">
    <br>
    <label for="nombre_annee">nombre_annee:</label>
    <input type="nombre_annee" v-model="nombre_annee" id="nombre_annee">
    <br>
    <button type="submit">Ajouter utilisateur</button>
  </form>
</template>

<script>
export default {
  data() {
    return {
      nom: "",
      description: "",
      id_responsable: "",
      niveau: "",
      nombre_annee: "",
    };
  },

};
</script>

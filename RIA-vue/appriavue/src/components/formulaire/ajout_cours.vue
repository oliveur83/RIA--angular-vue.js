<template>
 <div>
    <label for="id_enseignant">id_enseignant:</label>
    <input type="text" v-model="id_enseignant" id="id_enseignant">
    <br>
    <label for="id_ue">id_ue:</label>
    <input type="description" v-model="id_ue" id="id_ue">
    <br>
    <label for="nom_cours">nom cours:</label>
    <input type="description" v-model="nom_cours" id="nom_cours">
    <br>
    <button @click="ajout()">Envoyer</button>
  </div>
</template>

<script>
export default {
  data() {
    return {
      id_enseignant: '',
      id_ue: '',
      nom_cours: '',
    }
  },
  methods: {
   async  ajout() {
      const response = await fetch(`http://localhost/RIA//Ajouter/ajout_cours_insert?id_enseignant=${this.id_enseignant}&id_ue=${this.id_ue}&nom_cours=${this.nom_cours}`);
    const data = await response.json();
    console.log(data)
  },
  }
}
</script>

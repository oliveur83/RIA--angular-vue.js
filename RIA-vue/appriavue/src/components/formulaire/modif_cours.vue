<template>
  <div>
    <h1>modifier un cours </h1>
  <label for="id_enseignant">id_enseignant:</label>
    <input type="text" v-model="id_enseignant" id="id_enseignant">
    <br>
    <label for="id_ue">id_ue:</label>
    <input type="description" v-model="id_ue" id="id_ue">
    <br>
    <label for="id_cours">id_cours:</label>
    <input type="description" v-model="id_cours" id="id_cours">
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
      id_cours: '',
    };
  },

  methods: {
   async  ajout() {
      const response = await fetch(`http://localhost/RIA//Modifier/modif_cours_insert?id_cours=${this.id_cours}&id_enseignant=${this.id_enseignant}&id_ue=${this.id_ue}`);
    console.log(response)
    
  },
  }

};
</script>

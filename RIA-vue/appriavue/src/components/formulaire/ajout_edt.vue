<template>
  <div>
    <label for="id_filiere">id_filiere:</label>
    <input type="text" v-model="id_filiere" id="id_filiere">
    <br>
    <label for="id_cours">id_cours:</label>
    <input type="description" v-model="id_cours" id="id_cours">
    <br>
    <label for="date_debut">date_debut:</label>
    <input type="date" v-model="date_debut" id="date_debut">
    <br>
    <label for="date_fin">date_fin:</label>
    <input type="date" v-model="date_fin" id="date_fin">
    <br>
    <label for="type_cours">type_cours:</label>
    <input type="description" v-model="type_cours" id="type_cours">
    <br>
 
    <button @click="ajout()">Envoyer</button>
  </div>
</template>

<script>
export default {
  data() {
    return {
      id_filiere: '',
      id_cours: '',
      date_debut: '',
      date_fin: '',
      type_cours: ''
    }
  },
  methods: {
      async ajout() {
        const response = await fetch(`http://localhost/RIA/Ajouter/ajout_edt_insert?id_filiere=${this.id_filiere}&id_cours=${this.id_cours}&date_debut=${this.date_debut}&date_fin=${this.date_fin}&type_cours=${this.type_cours}`);
    console.log(response) // Ajouter la logique pour ajouter un utilisateur
      }
    }
}
</script>

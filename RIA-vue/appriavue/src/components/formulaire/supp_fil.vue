<template>
  <div>
    <label for="id_filiere">id_filiere:</label>
    <input type="text" v-model="id_filiere" id="id_filiere"><br>

    <input type="submit" value="Ajouter utilisateur">
  </div>
</template>

<script>
export default {
  data() {
    return {
      id_filiere: '',
    }
  },
  methods: {
      async ajout() {
        const response = await fetch(`http://localhost/RIA//Delete/delete_fil_insert?id_fil=${this.id_filiere}`);
    console.log(response) // Ajouter la logique pour ajouter un utilisateur
      }
    }
}
</script>

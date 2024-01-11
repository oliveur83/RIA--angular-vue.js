<template>
  <div>
    <label for="id_ue">id_ue:</label>
    <input type="text" v-model="id_ue" id="id_ue">
    <br>
  </div>
</template>

<script>
export default {
  data() {
    return {
      id_ue: '',
    }
  },
  methods: {
      async ajout() {
        const response = await fetch(`http://localhost/RIA//Delete/delete_ue_insert?id_ue=${this.id_ue}`);
    console.log(response) // Ajouter la logique pour ajouter un utilisateur
      }
    }
}
</script>

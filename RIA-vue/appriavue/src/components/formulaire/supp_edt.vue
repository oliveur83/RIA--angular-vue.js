<template>
  <div>
    <label for="id_edt">id_edt:</label>
    <input type="text" v-model="id_edt" id="id_edt">
  </div>
</template>

<script>
export default {
  data() {
    return {
      id_edt: '',
    };
  },
  methods: {
      async ajout() {
        const response = await fetch(`http://localhost/RIA//Delete/delete_edt_insert?id_edt=${this.id_edt}`);
    console.log(response) // Ajouter la logique pour ajouter un utilisateur
      }
    }
};
</script>

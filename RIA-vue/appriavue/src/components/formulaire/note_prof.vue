<template>
  <div>
    <label for="username">mettre une note :</label>
    <input type="text" id="username" v-model="note">
    <label for="username">id_cours :</label>
    <input type="text" id="username" v-model="id_cours">
    <label for="username">id_utilisateur :</label>
    <input type="text" id="username" v-model="id_utilisateur">

  </div>
</template>

<script>
export default {
  name: 'note_prof',
  data() {
    return {
      note: '',
      id_cours: '',
      id_utilisateur: '',
    }
  }
}
</script>

<template>
  <div>
    <h1>Page admin</h1>
    <button @click.prevent="button1Click">Bouton 1</button>
    <button @click.prevent="button2Click">Bouton 2</button>
    <button @click.prevent="button3Click">Bouton 3</button>
  </div>
</template>

<script>
export default {
  name: 'EtudiantPage',
  methods: {
    button1Click() {
      console.log('Bouton 1 cliqué');
    },
    button2Click() {
      console.log('Bouton 2 cliqué');
    },
    button3Click() {
      console.log('Bouton 3 cliqué');
    }
  }
}
</script>

<template>
  <div>
    <ul>
      <li v-for="student in students" :key="student.id_utilisateur">{{ student.libelle_ue}} </li>
    </ul>
    
  </div>
</template>

<script>
export default {
  name: 'note_prof',
  data() {
    return {
      students: [],
      
    }
  },  methods: {
    async liste() {
    
    const response = await fetch(`http://localhost/RIA/Welcome/lue`);
    const data = await response.json();
      this.students = data;
      this.students =JSON.parse(this.students.toto);
   console.log(this.students)
    },


  },
  created() {
    this.liste(); // appel de la méthode dès la création du composant
  },
}
</script>

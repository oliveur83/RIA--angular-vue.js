<template>
  <div>
    <h2>Bienvenue, étudiant!</h2>
    <p>Votre ID utilisateur est {{ id_utilisateur }}.</p>
    <button @click.prevent="edt">voir son edt</button>
    <button @click.prevent="note">voir toute ces notes</button>
    <table>
  <thead>
    <tr>
      <th>ID Cours</th>
      <th>Date de début</th>
      <th>Date de fin</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="student in students" :key="student.id_utilisateur">
      <td>{{ student.id_cours }}</td>
      <td>{{ student.date_debut }}</td>
      <td>{{ student.date_fin }}</td>
    </tr>
  </tbody>
</table>

<table>
  <thead>
    <tr>
      <th>Note</th>
      <th>Nom du cours</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="student in students_note" :key="student.id_utilisateur">
      <td>{{ student.note }}</td>
      <td>{{ student.nom_cours }}</td>
    </tr>
  </tbody>
</table>

  </div>

</template>

<script>
export default {
  name: 'EtudiantPage',
  props: {
    id_utilisateur: {
      type: String,
      required: true
    }
  },  data() {
    return {
      students: [],
      students_note: [],
    }
  },
  methods: {
    async edt() {
    
    const response = await fetch(`http://localhost/RIA/Welcome/ledtl?id_etudiant=${this.id_utilisateur}`);
    const data = await response.json();
      this.students = data;
      this.students =JSON.parse(this.students.toto);
   console.log(this.students)
    },
    async note() {
      const response = await fetch(`http://localhost/RIA/Welcome/lnotel?id_etudiant=${this.id_utilisateur}`);
    const data = await response.json();
      this.students_note = data;
      this.students_note =JSON.parse(this.students_note.toto);
   console.log(this.students_note)
    },

  }
}
</script>

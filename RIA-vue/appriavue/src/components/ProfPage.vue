<template>
  <div>
    <h1>Page prof</h1>
    <p>Votre ID utilisateur est {{ id_utilisateur }}.</p>
    
    <button @click.prevent="edt">afficher votre emploi du temp</button>
    <button @click.prevent="for_note">metre une note a vos etudiant </button>
    <button @click.prevent="liste">liste d eovs etudiant </button>
    <table>
  <thead>
    <tr>
      <th>ID Cours</th>
      <th>Date de début</th>
      <th>Date de fin</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="student in prof_edt" :key="student.id_utilisateur">
      <td>{{ student.id_cours }}</td>
      <td>{{ student.date_debut }}</td>
      <td>{{ student.date_fin }}</td>
    </tr>
  </tbody>
</table>
   <div v-if="for_note_b">
    
      <note_prof ref="note_prof" />
      <button @click="submitNote()">Envoyer</button>
    </div>
    <table>
  <thead>
    <tr>
      <th>ID Cours</th>
      <th>Date de début</th>
   
    </tr>
  </thead>
  <tbody>
    <tr v-for="student in prof_liste_etud" :key="student.id_utilisateur">
      <td>{{ student.id_cours }}</td>
      <td>{{ student.nom_cours }}</td>
   
    </tr>
  </tbody>
</table>

</div>
</template>

<script>
import note_prof from './formulaire/note_prof.vue';
  
export default {
  name: 'ProfPage', 
  components: { note_prof}, 
  props: {
    id_utilisateur: {
      type: String,
      required: true
    }
  },data() {
    return {
      prof_edt: [],
      prof_note: [],
      prof_liste_etud: [],
      for_note_b: false
    }
  },
  methods: {
   async  edt() {
      const response = await fetch(`http://localhost/RIA/Welcome/ledt?id_prof=${this.id_utilisateur}`);
    const data = await response.json();
      this.prof_edt = data;
      this.prof_edt =JSON.parse(this.prof_edt.toto);
    },
    for_note(){
      this.for_note_b=true
    },
   async  submitNote() {
    console.log("toto",this.$refs.note_prof.note,this.$refs.note_prof.id_cours,this.$refs.note_prof.id_utilisateur)
      const response = await fetch(`http://localhost/RIA//Ajouter/ajout_note_insert?id_cours=${this.$refs.note_prof.id_cours}&id_utilisateur=${this.$refs.note_prof.id_utilisateur}&note=${this.$refs.note_prof.note}`);
    const data = await response.json();
      this.prof_note = data;
      console.log("tata",this.prof_note)

    },
    async liste() {
      const response = await fetch(`http://localhost/RIA/Welcome/liste_etudiant_prof?id=${this.id_utilisateur}`);
    const data = await response.json();
      this.prof_liste_etud = data;
      this.prof_liste_etud =JSON.parse(this.prof_liste_etud.toto);
    }
  }
}
</script>


<style scoped>
.prof-page {
  max-width: 600px;
  margin: 0 auto;
  padding: 40px;
}

h1 {
  font-size: 24px;
  margin-bottom: 20px;
}

p {
  margin-bottom: 20px;
}

.buttons {
  margin-bottom: 20px;
}

button {
  padding: 10px 20px;
  font-size: 16px;
  border: none;
  border-radius: 4px;
  background-color: #007bff;
  color: #fff;
  cursor: pointer;
}

button:not(:last-child) {
  margin-right: 10px;
}

.prof-edt-list,
.prof-etud-list {
  margin-top: 20px;
  padding: 0;
  list-style-type: none;
}

.prof-edt-list li,
.prof-etud-list li {
  margin-bottom: 10px;
  font-size: 16px;
}

.note-prof-container {
  margin-top: 20px;
}

.note-prof-container button {
  margin-top: 10px;
}
</style>
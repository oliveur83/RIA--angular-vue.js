<template>
  <div class="login-page">
    <h1>Page de connexion</h1>

    <form>
      <div class="form-group">
        <label for="username">Nom d'utilisateur:</label>
        <input type="text" id="username" v-model="username" class="form-control">
      </div>
      <div class="form-group">
        <label for="password">Mot de passe:</label>
        <input type="password" id="password" v-model="password" class="form-control">
      </div>
      <button type="button" @click="validateCredentials()" class="btn btn-primary">Valider</button>
    </form>

    <Etudiant v-if="loggedIn" :id_utilisateur="id_utilisateur" />
    <Prof v-if="loggedprof" :id_utilisateur="id_utilisateur" />
    <Admin v-if="loggedadmin" :id_utilisateur="id_utilisateur" />
  </div>
</template>

<script>
import Etudiant from './EtudiantPage.vue';
import Prof from './ProfPage.vue';
import Admin from './AdminPage.vue';

export default {
  name: 'LoginPage',
  components: { Etudiant, Prof, Admin },
  data() {
    return {
      students: [],
      username: '',
      password: '',
      id_utilisateur: '',
      loggedIn: false,
      loggedprof: false,
      loggedadmin: false,
    }
  },
  methods: {
    async fetchStudents() {
      const response = await fetch('http://localhost/RIA/Welcome/lutil');
      const data = await response.json();
      this.students = JSON.parse(data.toto);
    },
    validateCredentials() {
      const student = this.students.find(student => student.prenom === this.username && student.password === this.password);
      if (student) {
        this.id_utilisateur = student.id_utilisateur;
        switch (student.role) {
          case 'etudiant':
            this.loggedIn = true;
            break;
          case 'prof':
            this.loggedprof = true;
            break;
          case 'admin':
            this.loggedadmin = true;
            break;
          default:
            alert('Une erreur s\'est produite');
            break;
        }
      } else {
        alert('Identifiants invalides');
      }
    }
  },
  mounted() {
    this.fetchStudents();
  },
}
</script>

<style scoped>
.login-page {
  max-width: 400px;
  margin: 0 auto;
  padding: 40px;
  background-color: #131212;
  border: 1px solid #130d0d;
  border-radius: 4px;
}

.form-group {
  margin-bottom: 20px;
}

label {
  font-weight: bold;
  display: block;
}

input[type="text"],
input[type="password"] {
  width: 100%;
  padding: 10px;
  font-size: 16px;
  border: 1px solid #ddd;
  border-radius: 4px;
}

.btn {
  display: inline-block;
  padding: 10px 20px;
  font-size: 16px;
  border: none;
  border-radius: 4px;
  background-color: #007bff;
  color: #fff;
  cursor: pointer;
}

.btn-primary {
  background-color: #007bff;
}

.btn-primary:hover {
  background-color: #0069d9;
}
</style>

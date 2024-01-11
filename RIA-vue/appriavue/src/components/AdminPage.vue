  <template>
    <div>
      <h1>Page admin</h1>
      <div v-for="(button, index) in buttons" :key="index" class="button-row">
        <div v-if="index % 3 === 0" class="button-group">
          <button @click="buttonClicked(index)">{{ buttons[index].text }}</button>
          <button v-if="buttons[index + 1]" @click="buttonClicked(index + 1)">{{ buttons[index + 1].text }}</button>
          <button v-if="buttons[index + 2]" @click="buttonClicked(index + 2)">{{ buttons[index + 2].text }}</button>
        </div>
      </div>
      <div v-if="currentComponent === 'liste_etud'">
      <liste_etud ref="liste_etud" />
     </div>
    <div v-if="currentComponent === 'liste_cours'">
      <liste_cours ref="liste_cours" />
    </div>     
     <div v-if="currentComponent === 'liste_edt'">
      <liste_edt ref="liste_edt" />
    </div>      
    <div v-if="currentComponent === 'liste_fil'">
      <liste_fil ref="liste_fil" />
    </div>     
     <div v-if="currentComponent === 'liste_prof'">
      <liste_prof ref="liste_prof" />
    </div>     
     <div v-if="currentComponent === 'liste_ue'">
      <liste_ue ref="liste_ue" />
   </div>
    <div v-if="currentComponent === 'liste_util'">
      <liste_util ref="liste_util" />
  </div>

    <div v-if="currentComponent === 'ajout_cours'">
      <ajout_cours ref="ajout_cours" />
  </div>
    <div v-if="currentComponent === 'ajout_edt'">
      <ajout_edt ref="ajout_edt" />
  </div>
    <div v-if="currentComponent === 'ajout_etud_cours'">
      <ajout_etud_cours ref="ajout_etud_cours" />
  </div>
    <div v-if="currentComponent === 'ajout_etud'">
      <ajout_etud ref="ajout_etud" />
  </div>
        <div v-if="currentComponent === 'ajout_fill'">
      <ajout_fill ref="ajout_fill" />
  </div>
    <div v-if="currentComponent === 'ajout_prof'">
      <ajout_prof ref="ajout_prof" />
  </div>
    <div v-if="currentComponent === 'ajout_ue'">
      <ajout_ue ref="ajout_ue" />
  </div>
    <div v-if="currentComponent === 'ajout_util'">
      <ajout_util ref="ajout_util" />
  </div>

    <div v-if="currentComponent === 'ajout_edt'">
      <ajout_edt ref="ajout_edt" />
  </div>
    <div v-if="currentComponent === 'ajout_etud_cours'">
      <ajout_etud_cours ref="ajout_etud_cours" />
  </div>
    <div v-if="currentComponent === 'ajout_etud'">
      <ajout_etud ref="ajout_etud" />
  </div>
        <div v-if="currentComponent === 'ajout_fill'">
      <ajout_fill ref="ajout_fill" />
  </div>
    <div v-if="currentComponent === 'ajout_prof'">
      <ajout_prof ref="ajout_prof" />
  </div>
    <div v-if="currentComponent === 'ajout_ue'">
      <ajout_ue ref="ajout_ue" />
  </div>
    <div v-if="currentComponent === 'ajout_util'">
      <ajout_util ref="ajout_util" />
  </div>

    <div v-if="currentComponent === 'modif_cours'">
      <modif_cours ref="modif_cours" />
  </div>
    <div v-if="currentComponent === 'modif_edt'">
      <modif_edt ref="modif_edt" />
  </div>
    <div v-if="currentComponent === 'modif_etud'">
      <modif_etud ref="modif_etud" />
  </div>
        <div v-if="currentComponent === 'modif_fil'">
      <modif_fil ref="modif_fil" />
  </div>
    <div v-if="currentComponent === 'modif_prof'">
      <modif_prof ref="modif_prof" />
  </div>
    <div v-if="currentComponent === 'modif_ue'">
      <modif_ue ref="modif_ue" />
  </div>
    <div v-if="currentComponent === 'modif_util'">
      <modif_util ref="modif_util" />
  </div>

    <div v-if="currentComponent === 'supp_cours'">
      <supp_cours ref="supp_cours" />
  </div>
    <div v-if="currentComponent === 'supp_edt'">
      <supp_edt ref="supp_edt" />
  </div>
    <div v-if="currentComponent === 'supp_etud'">
      <supp_etud ref="supp_etud" />
  </div>
        <div v-if="currentComponent === 'supp_fil'">
      <supp_fil ref="supp_fil" />
  </div>
    <div v-if="currentComponent === 'supp_prof'">
      <supp_prof ref="supp_prof" />
  </div>
    <div v-if="currentComponent === 'supp_ue'">
      <supp_ue ref="supp_ue" />
  </div>
    <div v-if="currentComponent === 'supp_util'">
      <supp_util ref="supp_util" />
  </div>
    </div>
  </template>

  <script>
  import liste_etud from './formulaire/liste_etud.vue';
  import liste_util from './formulaire/liste_util.vue';
  import liste_cours from './formulaire/liste_cours.vue';
  import liste_edt from './formulaire/liste_edt.vue';
  import liste_fil from './formulaire/liste_fil.vue';
  import liste_prof from './formulaire/liste_prof.vue';
  import liste_ue from './formulaire/liste_ue.vue';
  
  import ajout_cours from './formulaire/ajout_cours.vue';
  import ajout_edt from './formulaire/ajout_edt.vue';
  import ajout_etud_cours from './formulaire/ajout_etud_cours.vue';
  import ajout_etud from './formulaire/ajout_etud.vue';
  import ajout_fill from './formulaire/ajout_fill.vue';
  import ajout_prof from './formulaire/ajout_prof.vue';
  import ajout_ue from './formulaire/ajout_ue.vue';
  import ajout_util from './formulaire/ajout_util.vue';
  
  import modif_cours from './formulaire/modif_cours.vue';
  import modif_edt from './formulaire/modif_edt.vue';
  import modif_etud from './formulaire/modif_etud.vue';
  import modif_fil from './formulaire/modif_fil.vue';
  import modif_prof from './formulaire/modif_prof.vue';
  import modif_ue from './formulaire/modif_ue.vue';
  import modif_util from './formulaire/modif_util.vue';
  
  import supp_cours from './formulaire/supp_cours.vue';
  import supp_edt from './formulaire/supp_edt.vue';
  import supp_etud from './formulaire/supp_etud.vue';
  import supp_fil from './formulaire/supp_fil.vue';
  import supp_prof from './formulaire/supp_prof.vue';
  import supp_ue from './formulaire/supp_ue.vue';
  import supp_util from './formulaire/supp_util.vue';
  
  export default {
    name: 'AdminPage', 
    components: { liste_etud,ajout_cours,ajout_edt,
      ajout_etud,ajout_etud_cours,ajout_fill,
      ajout_prof,ajout_ue,ajout_util,
      modif_cours,modif_edt,
      modif_etud,modif_fil,
      modif_prof,modif_ue,modif_util,
      supp_cours,supp_edt,
      supp_etud,supp_fil,
      supp_prof,supp_ue,supp_util,liste_cours,liste_edt
      ,liste_fil,liste_prof,liste_util,liste_ue


    
    }, 
    data() {
      return {currentComponent: null,
        buttons: [
          { text: 'Voir tous les utilisateurs', component: 'liste_util'},
          { text: 'Voir tous les enseignants', component: 'liste_prof' },
          { text: 'Voir tous les étudiants', component: 'liste_etud' },
          { text: 'Voir toutes les filières', component: 'liste_fil' },
          { text: 'Voir tous les cours', component: 'liste_cours' },
          { text: 'Voir toutes les UE', component: 'liste_ue' },
          { text: 'Voir toutes edt', component: 'liste_edt' },
          { text: 'Ajouter un enseignant', component: 'ajout_prof' },
          { text: 'Ajouter un étudiant', component: 'ajout_etud' },
          { text: 'Ajouter un utilisateur', component: 'ajout_util' },
          { text: 'Ajouter une filliere', component: 'ajout_fill' },
          { text: 'Ajouter un ue ', component: 'ajout_ue' },
          { text: 'ajouter un cours', component: 'ajout_cours' },
          { text: 'Ajouter un evenement', component: 'ajout_edt' },
          { text: 'Ajouter un etudiant a un cours ', component: 'ajout_etud_cours' },
          { text: 'Modifier un utilisateur ', component: 'modif_util' },
          { text: 'Modifier un etudiant', component: 'modif_etud' },
          { text: 'Modifier un enseignant', component: 'modif_prof' },
          { text: 'Modifier une filiere', component: 'modif_fil' },
          { text: 'Modifier un cours ', component: 'modif_cours' },
          { text: 'Modifier une UE', component: 'modif_ue' },
          { text: 'Modifier un evenement', component: 'modif_edt' },
          { text: 'Supprimer un etudiant ', component: 'supp_etud' },
          { text: 'Supprimer un enseignant ', component: 'supp_prof' },
          { text: 'Modifier un utilisateur', component: 'supp_util' },
          { text: 'Supprimer une filiere', component: 'supp_fil' },
          { text: 'Supprimer un cours', component: 'supp_cours' },
          { text: 'Supprimer une UE ', component: 'supp_ue' },
          { text: 'Supprimer un evenement', component: 'supp_edt' },
          { text: 'Supprimer un utilisateur ', component: 'supp_util' },
          // ... les autres boutons ...
        ]
      }
    },
    methods: {
      buttonClicked(index) {
        console.log("bouton")
        const button = this.buttons[index];
      this.currentComponent = button.component;
      },    

    }
  }
  </script>

<style scoped>
.admin-page {
  max-width: 800px;
  margin: 0 auto;
  padding: 20px;
  text-align: center;
}

h1 {
  font-size: 24px;
  margin-bottom: 20px;
}

.button-row {
  margin-bottom: 20px;
}

.button-group {
  display: flex;
  justify-content: center;
  gap: 10px;
}

.button {
  padding: 10px 20px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 4px;
  font-size: 16px;
  cursor: pointer;
}

.component-container {
  margin-top: 40px;
}
</style>
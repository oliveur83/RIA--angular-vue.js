 <h1>modifier un attribut dun étudiant </h1>
veuillez bien verifier id_utilisateur!
<?php echo form_open('Modifier/modif_etudiant_insert'); ?>
<label for="id_etudiant">id_etudiant:</label>
<input type="text" name="id_etudiant" id="id_etudiant">
<br>
<label for="diplome_etudiant">diplome_etudiant:</label>
<input type="description" name="diplome_etudiant" id="diplome_etudiant">
<br>
<label for="id_filiere">id_filiere:</label>
<input type="description" name="id_filiere" id="id_filiere">
<br>


<input type="submit" value="Ajouter utilisateur">
<?php echo form_close(); ?>

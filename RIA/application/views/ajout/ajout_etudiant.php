<h1>Ajouter un etudiant</h1>
veuillez bien verifier id_utilisateur!
<?php echo form_open('Ajouter/ajout_etudiant_insert'); ?>
<label for="id_utilisateur">id_utilisateur:</label>
<input type="text" name="id_utilisateur" id="id_utilisateur">
<br>
<label for="diplome_etudiant">diplome_etudiant:</label>
<input type="description" name="diplome_etudiant" id="diplome_etudiant">
<br>
<label for="id_filiere">id_filiere:</label>
<input type="description" name="id_filiere" id="id_filiere">
<br>


<input type="submit" value="Ajouter utilisateur">
<?php echo form_close(); ?>

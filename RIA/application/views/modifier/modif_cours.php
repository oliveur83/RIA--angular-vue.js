 <h1>MODIFIER UN COURS </h1>
veuillez bien verifier id_utilisateur!
<?php echo form_open('Modifier/modif_cours_insert'); ?>
<label for="id_enseignant">id_enseignant:</label>
<input type="text" name="id_enseignant" id="id_enseignant">
<br>
<label for="id_ue">id_ue:</label>
<input type="description" name="id_ue" id="id_ue">
<br>
<label for="id_cours">id_cours:</label>
<input type="description" name="id_cours" id="id_cours">
<br>


<input type="submit" value="Ajouter utilisateur">
<?php echo form_close(); ?>

 <h1>Ajouter un cours</h1>
veuillez bien verifier id_utilisateur!
<?php echo form_open('Ajouter/ajout_cours_insert'); ?>
<label for="id_enseignant">id_enseignant:</label>
<input type="text" name="id_enseignant" id="id_enseignant">
<br>
<label for="id_ue">id_ue:</label>
<input type="description" name="id_ue" id="id_ue">
<br>
<label for="nom_cours">nom cours:</label>
<input type="description" name="nom_cours" id="nom_cours">
<br>


<input type="submit" value="Ajouter utilisateur">
<?php echo form_close(); ?>

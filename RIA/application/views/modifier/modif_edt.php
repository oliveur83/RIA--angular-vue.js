 <h1>modifer EDT</h1>
veuillez bien verifier id_utilisateur!
<?php echo form_open('Modifier/modif_edt_insert'); ?>
<label for="id_edt">id_edt:</label>
<input type="text" name="id_edt" id="id_edt">
<br>
<label for="id_filiere">id_filiere:</label>
<input type="description" name="id_filiere" id="id_filiere">
<br>
<label for="id_cours">id_cours:</label>
<input type="description" name="id_cours" id="id_cours">
<br>
<label for="date_debut">date_debut:</label>
<input type="date" name="date_debut" id="date_debut">
<br>
<label for="date_fin">date_fin:</label>
<input type="date" name="date_fin" id="date_fin">
<br>
<label for="type_cours">type_cours:</label>
<input type="description" name="type_cours" id="type_cours">
<br>


<input type="submit" value="Ajouter utilisateur">
<?php echo form_close(); ?>

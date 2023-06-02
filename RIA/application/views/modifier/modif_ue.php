 <h1>modifier un ue </h1>
veuillez bien verifier id_utilisateur!
<?php echo form_open('Modifier/modif_ue_insert'); ?>
<label for="id_filiere">id_filiere:</label>
<input type="text" name="id_filiere" id="id_filiere">
<br>
<label for="id_ue">id_ue:</label>
<input type="description" name="id_ue" id="id_ue">
<br>
<label for="libelle_ue">libelle_ue:</label>
<input type="description" name="libelle_ue" id="libelle_ue">
<br>
<label for="description">description:</label>
<input type="description" name="description" id="description">
<br>


<input type="submit" value="Ajouter utilisateur">
<?php echo form_close(); ?>

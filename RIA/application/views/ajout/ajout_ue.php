 <h1>Ajouter un ue</h1>
veuillez bien verifier id_utilisateur!
<?php echo form_open('Ajouter/ajout_ue_insert'); ?>
<label for="description">description:</label>
<input type="text" name="description" id="description">
<br>
<label for="id_filiere">id_filiere:</label>
<input type="description" name="id_filiere" id="id_filiere">
<br>
<label for="libelle_ue">libelle_ue:</label>
<input type="description" name="libelle_ue" id="libelle_ue">
<br>


<input type="submit" value="Ajouter utilisateur">
<?php echo form_close(); ?>

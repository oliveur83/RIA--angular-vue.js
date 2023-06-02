 <h1>modifier un attribut d'un prof </h1>
veuillez bien verifier id_utilisateur!
<?php echo form_open('Modifier/modif_prof_insert'); ?>
<label for="id_utilisateur">id_enseignant:</label>
<input type="text" name="id_utilisateur" id="id_utilisateur">
<br>
<label for="responsabilite_ens">responsabilite_ens:</label>
<input type="description" name="responsabilite_ens" id="responsabilite_ens">
<br>
<label for="volume_horaire">volume_horaire:</label>
<input type="description" name="volume_horaire" id="volume_horaire">
<br>


<input type="submit" value="Ajouter utilisateur">
<?php echo form_close(); ?>

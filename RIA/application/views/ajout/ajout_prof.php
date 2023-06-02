<h1>Ajouter un professeur</h1>
<?php echo form_open('Ajouter/ajout_prof_insert'); ?>
<label for="nom">id_utilisateur:</label>
<input type="text" name="id_utilisateur" id="id_utilisateur">
<br>
<label for="description">responsabilité:</label>
<input type="responsabilite_ens" name="responsabilite_ens" id="responsabilite_ens">
<br>
<label for="volume_horaire">nombre_heure:</label>
<input type="description" name="volume_horaire" id="volume_horaire">
<br>
<input type="submit" value="Ajouter utilisateur">
<?php echo form_close(); ?>

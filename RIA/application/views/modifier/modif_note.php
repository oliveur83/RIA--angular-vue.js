 <h1>modifier une note </h1>
veuillez bien verifier id_utilisateur!
<?php echo form_open('Modifier/modif_note_insert'); ?>
<label for="id_note">id_note:</label>
<input type="text" name="id_note" id="id_note">
<br>
<label for="id_utilisateur">id_utilisateur:</label>
<input type="description" name="id_utilisateur" id="id_utilisateur">
<br>
<label for="id_cours">id_cours:</label>
<input type="description" name="id_cours" id="id_cours">
<br>
<label for="note">note:</label>
<input type="description" name="note" id="note">
<br>


<input type="submit" value="Ajouter utilisateur">
<?php echo form_close(); ?>

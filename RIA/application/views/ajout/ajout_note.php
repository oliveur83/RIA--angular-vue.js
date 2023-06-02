 <h1>Ajouter un NOTE</h1>
veuillez bien verifier id_utilisateur!
<?php echo form_open('Ajouter/ajout_note_insert'); ?>
<label for="id_utilisateur">id_utilisateur:</label>
<input type="text" name="id_utilisateur" id="id_utilisateur">
<br>
<label for="id_cours">id_cours:</label>
<input type="description" name="id_cours" id="id_cours">
<br>
<label for="note">note:</label>
<input type="description" name="note" id="note">
<br>


<input type="submit" value="Ajouter utilisateur">
<?php echo form_close(); ?>

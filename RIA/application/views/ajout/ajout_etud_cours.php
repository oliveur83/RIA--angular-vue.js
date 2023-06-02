 <h1>Ajouter un NOTE</h1>
veuillez bien verifier id_utilisateur!
<?php echo form_open('Ajouter/ajout_etud_cours_insert'); ?>
<label for="id_etudiant">id_etudiant:</label>
<input type="text" name="id_etudiant" id="id_etudiant">
<br>
<label for="id_cours">id_cours:</label>
<input type="description" name="id_cours" id="id_cours">
<br>

<input type="submit" value="Ajouter utilisateur">
<?php echo form_close(); ?>

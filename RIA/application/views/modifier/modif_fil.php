 <h1>modifier une filier</h1>
veuillez bien verifier id_utilisateur!
<?php echo form_open('Modifier/modif_fil_insert'); ?>
<label for="id_filiere">id_filiere:</label>
<input type="text" name="id_filiere" id="id_filiere">
<br>
<label for="nom_filiere">nom_filiere:</label>
<input type="description" name="nom_filiere" id="nom_filiere">
<br>
<label for="description">description:</label>
<input type="description" name="description" id="description">
<br>
<label for="niveau">niveau:</label>
<input type="text" name="niveau" id="niveau">
<br>
<label for="nombre_annee">nombre_annee:</label>
<input type="description" name="nombre_annee" id="nombre_annee">
<br>
<label for="id_responsable">id_responsable:</label>
<input type="description" name="id_responsable" id="id_responsable">
<br>    

<input type="submit" value="Ajouter utilisateur">
<?php echo form_close(); ?>

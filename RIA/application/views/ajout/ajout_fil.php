<h1>Ajouter une filliere</h1>
<?php echo form_open('Ajouter/ajout_fil_insert'); ?>
<label for="nom">Nom:</label>
<input type="text" name="nom" id="nom">
<br>
<label for="description">description:</label>
<input type="description" name="description" id="description">
<br>
<label for="id_responsable">responsable(id):</label>
<input type="id_responsable" name="id_responsable" id="id_responsable">
<br>
<label for="niveau">niveau:</label>
<input type="niveau" name="niveau" id="niveau">
<br>
<label for="nombre_annee">nombre_annee:</label>
<input type="nombre_annee" name="nombre_annee" id="nombre_annee">
<br>
<input type="submit" value="Ajouter utilisateur">
<?php echo form_close(); ?>

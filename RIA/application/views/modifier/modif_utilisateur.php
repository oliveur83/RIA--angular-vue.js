 <h1>modifier un utilisateur </h1>
veuillez bien verifier id_utilisateur!
<?php echo form_open('Modifier/modif_etud_insert'); ?>
<label for="nom">nom :</label>
<input type="text" name="nom" id="nom">
<br>
<label for="prenom">prenom:</label>
<input type="description" name="prenom" id="prenom">
<br>
<label for="email">email:</label>
<input type="description" name="email" id="email">
<br>
<label for="password">password:</label>
<input type="description" name="password" id="password">
<br>
<label for="tel">tel:</label>
<input type="description" name="tel" id="tel">
<br>
<label for="id_utilisateur">id_utilisateur pour changement :</label>
<input type="description" name="id_utilisateur" id="id_utilisateur">
<br>

<input type="submit" value="Ajouter utilisateur">
<?php echo form_close(); ?>

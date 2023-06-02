<h1>Ajouter un utilisateur</h1>
<?php echo form_open('Ajouter/ajout_etud_insert'); ?>
<label for="nom">Nom:</label>
<input type="text" name="nom" id="nom">
<br>
<label for="prenom">prenom:</label>
<input type="prenom" name="prenom" id="prenom">
<br>
<label for="role">role:</label>
<input type="role" name="role" id="role">
<br>
<label for="email">Email:</label>
<input type="email" name="email" id="email">
<br>
<label for="password">Mot de passe:</label>
<input type="password" name="mot_de_passe" id="mot_de_passe">
<br>
<label for="tel">tel:</label>
<input type="tel" name="tel" id="tel">
<br>
<input type="submit" value="Ajouter utilisateur">
<?php echo form_close(); ?>

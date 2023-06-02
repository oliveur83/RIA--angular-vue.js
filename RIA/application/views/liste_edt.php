<div id="table-container"></div>

<script>
 
        var json_data = <?php echo $json_data; ?>;
        
        let objList = JSON.parse(json_data.toto);
        var tableContainer = document.getElementById("table-container");
        var table = document.createElement("table");
        tableContainer.appendChild(table);
        for (let obj of objList) {
            console.log(obj);
            var row = document.createElement("tr");
            table.appendChild(row);
            var cell = document.createElement("td");
        cell.innerHTML = obj.id_cours+" ";
        cell.innerHTML += obj.type_cours+" ";
        cell.innerHTML += obj.date_debut+" ";
        cell.innerHTML += obj.date_fin+" ";
        row.appendChild(cell);
    // accéder à la propriété "nom" de chaque objet
   console.log( obj.nom)
}

</script>
si vous voulez voir EDT d'un etudiant en particulier
<?php echo form_open('Welcome/ledtl'); ?>
<label for="id_etudiant">id_etudiant:</label>
<input type="text" name="id_etudiant" id="id_etudiant">
<br>
<input type="submit" value="liste">
<?php echo form_close(); ?>
si vous voulez voir EDT d'une filiere
<?php echo form_open('Welcome/ledtl2'); ?>
<label for="id_etudiant">id_filiere:</label>
<input type="text" name="id_filiere" id="id_filiere">
<br>
<input type="submit" value="liste">
<?php echo form_close(); ?>
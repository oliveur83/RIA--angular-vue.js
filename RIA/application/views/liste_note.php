<div id="table-container"></div>

<script>
 
        var json_data = <?php echo $json_data; ?>;
        
        let objList = JSON.parse(json_data.toto);
        var tableContainer = document.getElementById("table-container");
        var table = document.createElement("table");
        tableContainer.appendChild(table);
        for (let obj of objList) {
            var row = document.createElement("tr");
            table.appendChild(row);
            var cell = document.createElement("td");
        cell.innerHTML = obj.id_utilisateur+" ";
        cell.innerHTML += obj.id_cours+" ";
        cell.innerHTML += obj.note;
        row.appendChild(cell);
    // accéder à la propriété "nom" de chaque objet
   console.log( obj.nom)
}

</script>
si vous voulez voir les notes d'un etudiant en particulier
<?php echo form_open('Welcome/lnotel'); ?>
<label for="id_etudiant">id_etudiant:</label>
<input type="text" name="id_etudiant" id="id_etudiant">
<br>
<input type="submit" value="liste">
<?php echo form_close(); ?>

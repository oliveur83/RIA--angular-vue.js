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
        cell.innerHTML = obj.nom_cours;

        row.appendChild(cell);
    // accéder à la propriété "nom" de chaque objet
   console.log( obj.nom)
}

</script>
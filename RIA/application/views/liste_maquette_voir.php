<div id="table-container"></div>

<script>
        //filiere
        var json_data = <?php echo $json_data; ?>;
        let objLis = JSON.parse(json_data.totofil);
        var tableContainer = document.getElementById("table-container");
        var table = document.createElement("table");
        tableContainer.appendChild(table);
        for (let obj of objLis) {
            var row = document.createElement("tr");
            table.appendChild(row);
            var cell = document.createElement("td");
            cell.innerHTML = obj.nom_filiere+" ";
        cell.innerHTML += obj.description+" ";
        cell.innerHTML += obj.niveau+" ";
        cell.innerHTML += obj.nombre_annee+" ";
        cell.innerHTML += obj.id_responsable+" ";
        cell.innerHTML += obj.periode_valide+" ";
        row.appendChild(cell);

}
        //ue
        let objList = JSON.parse(json_data.toto);

        for (let obj of objList) {
            //cours
            var row = document.createElement("tr");
            table.appendChild(row);
            var cell = document.createElement("td");
        cell.innerHTML = obj.libelle_ue;
        row.appendChild(cell);

}

</script>
<?php
class Database_maquette extends CI_Model{
	
	
        function liste_ue($data){
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "ria";
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $stmt = $conn->prepare("SELECT * FROM ue where id_filiere=".$data['id_filliere']); 
                $stmt->execute();
                $recipes = $stmt->fetchAll();
                return json_encode($recipes);
        }
        	
        function lmaq($data){
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "ria";
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $stmt = $conn->prepare("SELECT * FROM filiere where id_filiere=".$data['id_filliere']); 
                $stmt->execute();
                $recipes = $stmt->fetchAll();
                return json_encode($recipes);
        }
       
}


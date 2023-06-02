<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

class Database_ajouter extends CI_Model{
	
	function insert_etud($data){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "ria";
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $stmt = $conn->prepare("INSERT INTO utilisateur (role,nom,prenom,email,password,tel) 
        VALUES('".$data['role']."','".$data['nom']."','".$data['prenom']."','".$data['email']."','".$data['password']."','".$data['tel']."')"); 
               if ($stmt->execute()) {
                $response = array("success" => true, "message" => "Ajout réussi");
        } else {
                $response = array("success" => false, "message" => "Echec de l'ajout. Veuillez réessayer");
        }  
        return $response;   
              
	}
        function insert_etudiant($data){
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "ria";
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $stmt = $conn->prepare("INSERT INTO etudiant (id_utilisateur,diplome_etudiant,id_filiere) 
                VALUES('".$data['id_utilisateur']."','".$data['diplome_etudiant']."','".$data['id_filiere']."')"); 
               if ($stmt->execute()) {
                $response = array("success" => true, "message" => "Ajout réussi");
        } else {
                $response = array("success" => false, "message" => "Echec de l'ajout. Veuillez réessayer");
        }  
        return $response;              
        }
        function insert_prof($data){
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "ria";
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $stmt = $conn->prepare("INSERT INTO enseignant (id_utilisateur,responsabilite_ens,volume_horaire) 
                VALUES('".$data['id_utilisateur']."','".$data['responsabilite_ens']."','".$data['volume_horaire']."')"); 
                              if ($stmt->execute()) {
                                $response = array("success" => true, "message" => "Ajout réussi");
                        } else {
                                $response = array("success" => false, "message" => "Echec de l'ajout. Veuillez réessayer");
                        }  
                        return $response;          }
	function insert_fil($data){
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "ria";
                
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                
                $stmt = $conn->prepare("INSERT INTO filiere (nom_filiere,description,niveau,nombre_annee,id_responsable)
                VALUES('".$data['nom']."','".$data['description']."','".$data['niveau']."',".$data['nombre_annee'].",".$data['id_responsable'].")"); 
               if ($stmt->execute()) {
                $response = array("success" => true, "message" => "Ajout réussi");
        } else {
                $response = array("success" => false, "message" => "Echec de l'ajout. Veuillez réessayer");
        }  
        return $response;  
                      
        }
	function insert_cours($data){
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "ria";
                
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
               
                $stmt = $conn->prepare("INSERT INTO cours (nom_cours,id_ue,id_enseignant)
                VALUES('".$data['nom_cours']."',".$data['id_ue'].",".$data['id_enseignant'].")"); 
               if ($stmt->execute()) {
                $response = array("success" => true, "message" => "Ajout réussi");
        } else {
                $response = array("success" => false, "message" => "Echec de l'ajout. Veuillez réessayer");
        }  
        return $response;    
        }
	function insert_ue($data){
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "ria";
                
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
               
                $stmt = $conn->prepare("INSERT INTO ue (description,id_filiere,libelle_ue)
                VALUES('".$data['description']."',".$data['id_filiere'].",'".$data['libelle_ue']."')"); 
               if ($stmt->execute()) {
                $response = array("success" => true, "message" => "Ajout réussi");
        } else {
                $response = array("success" => false, "message" => "Echec de l'ajout. Veuillez réessayer");
        }  
        return $response;       
        }
        function insert_edt($data){
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "ria";
                print_r($data);
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
               
                $stmt = $conn->prepare("INSERT INTO edt (id_filiere,id_cours,date_debut,date_fin,type_cours)
                VALUES(".$data['id_filiere'].",".$data['id_cours'].",'".$data['date_debut']."','".$data['date_fin']."','".$data['type_cours']."')"); 
               if ($stmt->execute()) {
                $response = array("success" => true, "message" => "Ajout réussi");
        } else {
                $response = array("success" => false, "message" => "Echec de l'ajout. Veuillez réessayer");
        }  
        return $response;   
        }
        function insert_note($data){
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "ria";
                
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                
                $stmt = $conn->prepare("INSERT INTO note (id_utilisateur,id_cours,note)
                VALUES(".$data['id_utilisateur'].",".$data['id_cours'].",".$data['note'].")"); 
                if ($stmt->execute()) {
                        $response = array("success" => true, "message" => "Ajout réussi");
                } else {
                        $response = array("success" => false, "message" => "Echec de l'ajout. Veuillez réessayer");
                }  
                return $response;    
        }
        function insert_etud_cours($data){
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "ria";
                
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      
                $stmt = $conn->prepare("INSERT INTO inscritpion (id_etudiant,id_cours)
                VALUES(".$data['id_etudiant'].",".$data['id_cours'].")"); 
               if ($stmt->execute()) {
                $response = array("success" => true, "message" => "Ajout réussi");
        } else {
                $response = array("success" => false, "message" => "Echec de l'ajout. Veuillez réessayer");
        }  
        return $response;  
        }
}


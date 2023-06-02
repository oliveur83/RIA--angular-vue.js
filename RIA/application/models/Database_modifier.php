<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

class Database_modifier extends CI_Model{
	
	function modif_etud($data){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "ria";
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        
        $stmt = $conn->prepare("UPDATE utilisateur
        SET nom='".$data['nom']."',
        prenom='".$data['prenom']."',
        tel='".$data['tel']."',
        email='".$data['email']."',
        password='".$data['password']."'
        WHERE id_utilisateur= ".$data['id_utilisateur']." 
        "); 
        if ($stmt->execute()) {
                $response = array("success" => true, "message" => "Ajout réussi");
        } else {
                $response = array("success" => false, "message" => "Echec de l'ajout. Veuillez réessayer");
        }  
        return $response;  
	}
        function modif_etudiant($data){
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "ria";
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
              
                $stmt = $conn->prepare("UPDATE etudiant
                SET id_filiere=".$data['id_filiere'].",
                diplome_etudiant='".$data['diplome_etudiant']."'
                WHERE id_utilisateur=".$data['id_etudiant']." 
                "); 
                if ($stmt->execute()) {
                        $response = array("success" => true, "message" => "Ajout réussi");
                } else {
                        $response = array("success" => false, "message" => "Echec de l'ajout. Veuillez réessayer");
                }  
                return $response;       
        }
        function modif_prof($data){
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "ria";
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $stmt = $conn->prepare("UPDATE enseignant
                SET volume_horaire=".$data['volume_horaire'].",
                responsabilite_ens='".$data['responsabilite_ens']."'
                WHERE id_utilisateur=".$data['id_utilisateur']." 
                "); 
                if ($stmt->execute()) {
                        $response = array("success" => true, "message" => "Ajout réussi");
                } else {
                        $response = array("success" => false, "message" => "Echec de l'ajout. Veuillez réessayer");
                }  
                return $response;   }
	function modif_fil($data){
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "ria";
                
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                
                $stmt = $conn->prepare("UPDATE filiere
                SET id_responsable=".$data['id_responsable'].",
                nombre_annee=".$data['nombre_annee'].",
                niveau='".$data['niveau']."',
                description='".$data['description']."',
                nom_filiere='".$data['nom_filiere']."'
                WHERE id_filiere=".$data['id_filiere']." 
                ");                if ($stmt->execute()) {
                        $response = array("success" => true, "message" => "Ajout réussi");
                } else {
                        $response = array("success" => false, "message" => "Echec de l'ajout. Veuillez réessayer");
                }  
                return $response;    
        }
	function modif_cours($data){
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "ria";
                
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
               
                $stmt = $conn->prepare("UPDATE cours
                SET id_enseignant=".$data['id_enseignant'].",
                id_ue=".$data['id_ue']."
                WHERE id_cours=".$data['id_cours']." 
                ");  
                if ($stmt->execute()) {
                        $response = array("success" => true, "message" => "Ajout réussi");
                } else {
                        $response = array("success" => false, "message" => "Echec de l'ajout. Veuillez réessayer");
                }  
                return $response;      
        }
	function modif_ue($data){
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "ria";
                
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
               
               
                $stmt = $conn->prepare("UPDATE ue
                SET id_filiere=".$data['id_filiere'].",
                description='".$data['description']."',
                libelle_ue='".$data['libelle_ue']."'
                WHERE id_ue=".$data['id_ue']." 
                ");                  if ($stmt->execute()) {
                        $response = array("success" => true, "message" => "Ajout réussi");
                } else {
                        $response = array("success" => false, "message" => "Echec de l'ajout. Veuillez réessayer");
                }  
                return $response;  
        }
        function modif_edt($data){
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "ria";
                
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
               
                $stmt = $conn->prepare("UPDATE edt
                SET id_filiere=".$data['id_filiere'].",
                id_cours=".$data['id_cours'].",
                type_cours='".$data['type_cours']."',
                date_fin='".$data['date_fin']."',
                date_debut='".$data['date_debut']."'
                WHERE id_edt=".$data['id_edt']." 
                ");                if ($stmt->execute()) {
                        $response = array("success" => true, "message" => "Ajout réussi");
                } else {
                        $response = array("success" => false, "message" => "Echec de l'ajout. Veuillez réessayer");
                }  
                return $response;  
        }
        function modif_note($data){
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "ria";
                
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                
                $stmt = $conn->prepare("UPDATE note
                SET id_utilisateur=".$data['id_utilisateur'].",
                id_cours=".$data['id_cours'].",
                note=".$data['note']."
                WHERE id_note=".$data['id_note']." 
                ");   
                if ($stmt->execute()) {
                        $response = array("success" => true, "message" => "Ajout réussi");
                } else {
                        $response = array("success" => false, "message" => "Echec de l'ajout. Veuillez réessayer");
                }  
                return $response;  
        }
}


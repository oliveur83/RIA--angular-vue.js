<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
class Database_delete extends CI_Model{
	
	function insert_etud($data){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "ria";
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $stmt = $conn->prepare("DELETE FROM utilisateur
        WHERE id_utilisateur=".$data['id_utilisateur'].""); 
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
                $stmt = $conn->prepare("DELETE FROM etudiant
                WHERE id_utilisateur=".$data['id_utilisateur']." ");  
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
                $stmt = $conn->prepare("DELETE FROM enseignant
                WHERE id_utilisateur=".$data['id_utilisateur']." ");  
                              if ($stmt->execute()) {
                                $response = array("success" => true, "message" => "Ajout réussi");
                        } else {
                                $response = array("success" => false, "message" => "Echec de l'ajout. Veuillez réessayer");
                        }  
                        return $response;  
                        }        
	function insert_fil($data){
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "ria";
                
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                
                $stmt = $conn->prepare("DELETE FROM filiere
                WHERE id_filiere=".$data['id_fil']." ");  if($stmt->execute())
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
               
                $stmt = $conn->prepare("DELETE FROM cours
                WHERE id_cours=".$data['id_cours']." ");  if($stmt->execute())
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
               
                $stmt = $conn->prepare("DELETE FROM ue
                WHERE id_ue=".$data['id_ue']." ");  
                if($stmt->execute())
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
               
                $stmt = $conn->prepare("DELETE FROM edt
                WHERE id_edt=".$data['id_edt']." ");   if($stmt->execute())
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
                
                $stmt = $conn->prepare("DELETE FROM note
                WHERE id_note=".$data['id_note']." ");  if($stmt->execute())
                         if ($stmt->execute()) {
                $response = array("success" => true, "message" => "Ajout réussi");
        } else {
                $response = array("success" => false, "message" => "Echec de l'ajout. Veuillez réessayer");
        }  
        return $response;  
        }
                      
        
}


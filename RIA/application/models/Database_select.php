<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
class Database_select extends CI_Model{
	
	function select_util(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "ria";
        
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        
        $stmt = $conn->prepare("SELECT * FROM utilisateur "); 
        $stmt->execute();
        $recipes = $stmt->fetchAll();
                
        return json_encode($recipes);
	}
        function liste_etudiant_prof(){
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "ria";
                
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                
                $stmt = $conn->prepare("SELECT * FROM `inscritpion` natural join `cours`natural join `enseignant`  where id_utilisateur=11"); 
                $stmt->execute();
                $recipes = $stmt->fetchAll();
                        
                return json_encode($recipes);
                }
        function select_etudiant(){
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "ria";
                
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                
                $stmt = $conn->prepare('SELECT * FROM etudiant inner join utilisateur where etudiant.id_utilisateur=utilisateur.id_utilisateur'); 
                $stmt->execute();
                $recipes = $stmt->fetchAll();
                
                return json_encode($recipes);
                }
        function select_prof(){
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "ria";
                        
                        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                        
                        $stmt = $conn->prepare('SELECT * FROM enseignant inner join utilisateur where enseignant.id_utilisateur=utilisateur.id_utilisateur'); 
                        $stmt->execute();
                        $recipes = $stmt->fetchAll();
                        
                        return json_encode($recipes);
                        }
        function select_lue(){
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "ria";
                        
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                
                $stmt = $conn->prepare('SELECT * FROM ue'); 
                $stmt->execute();
                $recipes = $stmt->fetchAll();
              
                return json_encode($recipes);
                }
        function select_lfil(){
                
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "ria";
                                
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                        
                $stmt = $conn->prepare("SELECT * FROM filiere"); 
                $stmt->execute();
                $recipes = $stmt->fetchAll();
                
                return json_encode($recipes);
        }
        function select_lcours(){
                
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "ria";
                                
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                        
                $stmt = $conn->prepare("SELECT * FROM `cours` natural join `ue`"); 
                $stmt->execute();
                $recipes = $stmt->fetchAll();
                return json_encode($recipes);
        }
        
        function select_lnote(){
                
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "ria";
                                
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                        
                $stmt = $conn->prepare("SELECT * FROM note"); 
                $stmt->execute();
                $recipes = $stmt->fetchAll();
                return json_encode($recipes);
        }
        function select_lnotel($datal){
                if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
                        header('Access-Control-Allow-Origin: *');
                        header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
                        header('Access-Control-Allow-Headers: Content-Type, Authorization');
                        header('Access-Control-Max-Age: 86400');
                        exit();
                    }
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "ria";
                                
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
               
                $stmt = $conn->prepare("SELECT * FROM note natural join cours  where id_utilisateur='".$datal['id_etudiant']."'"); 
                $stmt->execute();
                $recipes = $stmt->fetchAll();
                return json_encode($recipes);
        }
        function select_ledtl($datal){
                
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "ria";
                $maintenant = date('Y-m-d H:i:s');
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                     
                
                $stmt = $conn->prepare("
        SELECT *
        FROM inscritpion
        INNER JOIN cours ON inscritpion.id_cours=cours.id_cours
        INNER JOIN edt ON inscritpion.id_cours = edt.id_cours
        where id_etudiant=".$datal['id_etudiant']." and edt.date_debut>'".$maintenant."'");
        
                $stmt->execute();
                $recipes = $stmt->fetchAll();
                
                return json_encode($recipes);
        }       
         function select_ledtl2($datal){
                
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "ria";
                                
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                        
                $stmt = $conn->prepare("
        SELECT *
        FROM filiere
        INNER JOIN edt ON filiere.id_filiere = edt.id_filiere;
        where id_filiere=".$datal['id_filiere']);
        
                $stmt->execute();
                $recipes = $stmt->fetchAll();
                
                return json_encode($recipes);
        }
        function select_ledt($data){
                
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "ria";
                $maintenant = date('Y-m-d H:i:s');
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                        
                $stmt = $conn->prepare("SELECT * FROM edt natural join cours where id_enseignant='".$data['id_prof']."'and edt.date_debut>'".$maintenant."'"); 
                $stmt->execute();
                $recipes = $stmt->fetchAll();
                return json_encode($recipes);
        }
        function select_edt_tout(){
                
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "ria";
                $maintenant = date('Y-m-d H:i:s');
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                
                $stmt = $conn->prepare("SELECT * FROM edt "); 
                $stmt->execute();
                $recipes = $stmt->fetchAll();
                        
                return json_encode($recipes);
        }
}


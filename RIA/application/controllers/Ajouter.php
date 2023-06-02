<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajouter extends CI_Controller {
    //partie utilisateur
    public function ajout_etud(){	
		$this->load->helper('url');
        $this->load->library('form_validation');
		$this->load->view('ajout/ajout');
	}
    public function ajout_etud_insert(){
        $this->load->helper('url');
        $this->load->model('Database_ajouter');
        $data = array(
            'role' => $this->input->get('role'),
            'nom' => $this->input->get('nom'),
            'prenom' => $this->input->get('prenom'),
            'email' => $this->input->get('email'),
            'tel' => $this->input->get('tel'),
            'password' => $this->input->get('password')
           
        );
        $datal["toto"]= $this->Database_ajouter->insert_etud($data);
        $datal['json_data'] = json_encode($datal);
        $this->output
        ->set_content_type('application/json')
        ->set_output($datal['json_data']);
	}
    //partie etudiant
    public function ajout_etudiant(){	
		$this->load->helper('url');
        $this->load->library('form_validation');
		$this->load->view('ajout/ajout_etudiant');
	}
    public function ajout_etudiant_insert(){
        $this->load->helper('url');
        $this->load->model('Database_ajouter');
        $data = array(
            'id_utilisateur' => $this->input->get('id_utilisateur'),
            'diplome_etudiant' => $this->input->get('diplome_etudiant'),
            'id_filiere' => $this->input->get('id_filiere'),
        );
        $datal["toto"]= $this->Database_ajouter->insert_etudiant($data);
        $datal['json_data'] = json_encode($datal);
        $this->output
        ->set_content_type('application/json')
        ->set_output($datal['json_data']);
    }
    //partie prof
    public function ajout_prof(){	
		$this->load->helper('url');
        $this->load->library('form_validation');
		$this->load->view('ajout/ajout_prof');
	}
    public function ajout_prof_insert(){
        $this->load->helper('url');
        $this->load->model('Database_ajouter');
        $data = array(
            'id_utilisateur' => $this->input->get('id_utilisateur'),
            'responsabilite_ens' => $this->input->get('responsabilite_ens'),
            'volume_horaire' => $this->input->get('volume_horaire'),
        );
        $datal["toto"]= $this->Database_ajouter->insert_prof($data);
        $datal['json_data'] = json_encode($datal);
        $this->output
        ->set_content_type('application/json')
        ->set_output($datal['json_data']);
    }
    //partie filiere
    public function ajout_fil(){	
        
		$this->load->helper('url');	
        $this->load->library('form_validation');	
		$this->load->view('ajout/ajout_fil');
	}
    public function ajout_fil_insert(){
        $this->load->model('Database_ajouter');
        $data = array(
            'nom' => $this->input->get('nom'),   
            'niveau' => $this->input->get('niveau'), 
            'nombre_annee' => $this->input->get('nombre_annee'), 
            'description' => $this->input->get('description') ,
            'id_responsable'=> $this->input->get('id_responsable') ,          
        );
        $datal["toto"]= $this->Database_ajouter->insert_fil($data);
        $datal['json_data'] = json_encode($datal);
        $this->output
        ->set_content_type('application/json')
        ->set_output($datal['json_data']);
    }
    //partie cours
    public function ajout_cours(){	
        
            $this->load->helper('url');	
            $this->load->library('form_validation');	
            $this->load->view('ajout/ajout_cours');
        }
    public function ajout_cours_insert(){
            $this->load->model('Database_ajouter');
            $data = array(
                'id_enseignant' => $this->input->get('id_enseignant'),   
                'id_ue' => $this->input->get('id_ue'), 
                'nom_cours' => $this->input->get('nom_cours')
             );
             $datal["toto"]=  $this->Database_ajouter->insert_cours($data);
       
            $datal['json_data'] = json_encode($datal);
            $this->output
            ->set_content_type('application/json')
            ->set_output($datal['json_data']);
         }
    public function ajout_ue(){	
        
            $this->load->helper('url');	
            $this->load->library('form_validation');	
            $this->load->view('ajout/ajout_ue');
        }
    public function ajout_ue_insert(){
            $this->load->model('Database_ajouter');
            $data = array(
                'description' => $this->input->get('description'),   
                'id_filiere' => $this->input->get('id_filiere'), 
                'libelle_ue' => $this->input->get('libelle_ue')
             );
             $datal["toto"]= $this->Database_ajouter->insert_ue($data);
        
            $datal['json_data'] = json_encode($datal);
            $this->output
            ->set_content_type('application/json')
            ->set_output($datal['json_data']);
        } 
    public function ajout_edt(){	
        
            $this->load->helper('url');	
            $this->load->library('form_validation');	
            $this->load->view('ajout/ajout_edt');
        }
    public function ajout_edt_insert(){
            $this->load->model('Database_ajouter');
            $data = array(
                'id_filiere' => $this->input->get('id_filiere'),   
                'id_cours' => $this->input->get('id_cours'), 
                'date_debut' => $this->input->get('date_debut'),
                'date_fin' => $this->input->get('date_fin'),
                'type_cours' => $this->input->get('type_cours'),
            );
            $datal["toto"]= $this->Database_ajouter->insert_edt($data);
            $datal['json_data'] = json_encode($datal);
            $this->output
            ->set_content_type('application/json')
            ->set_output($datal['json_data']);
        } 
    public function ajout_note(){	
        
            $this->load->helper('url');	
            $this->load->library('form_validation');	
            $this->load->view('ajout/ajout_note');
        }
    public function ajout_note_insert(){
            $this->load->model('Database_ajouter');
            $data = array(
                'id_utilisateur' => $this->input->get('id_utilisateur'),   
                'id_cours' => $this->input->get('id_cours'), 
                'note' => $this->input->get('note'),
 );
            $data["toto"]=$this->Database_ajouter->insert_note($data);
            $data['json_data'] = json_encode($data);
            $this->output
            ->set_content_type('application/json')
            ->set_output($data['json_data']);
        } 
        public function ajout_maq(){	
        
            $this->load->helper('url');	
            $this->load->library('form_validation');	
            $this->load->view('ajout/ajout_maq');
        }
        public function ajout_etud_cours(){	
        
            $this->load->helper('url');	
            $this->load->library('form_validation');	
            $this->load->view('ajout/ajout_etud_cours');
        }
        public function ajout_etud_cours_insert(){
            $this->load->model('Database_ajouter');
            $data = array(
                'id_etudiant' => $this->input->get('id_etudiant'),   
                'id_cours' => $this->input->get('id_cours'), 
           
                );
                $datal["toto"]= $this->Database_ajouter->insert_etud_cours($data);
            $datal['json_data'] = json_encode($datal);
            $this->output
            ->set_content_type('application/json')
            ->set_output($datal['json_data']);        
        } 
}

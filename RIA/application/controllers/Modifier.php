<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modifier extends CI_Controller {
    //partie utilisateur
    public function modif_etud(){	
		$this->load->helper('url');
        $this->load->library('form_validation');
		$this->load->view('modifier/modif_utilisateur');
	}
    public function modif_etud_insert(){
        $this->load->helper('url');
        $this->load->model('Database_modifier');
        $data = array(
            'id_utilisateur' => $this->input->get('id_utilisateur'),
            'nom' => $this->input->get('nom'),
            'prenom' => $this->input->get('prenom'),
            'email' => $this->input->get('email'),
            'tel' => $this->input->get('tel'),
            'password' => $this->input->get('password')
           
        );
        $datal["toto"]=$this->Database_modifier->modif_etud($data);
        $datal['json_data'] = json_encode($datal);
        $this->output
        ->set_content_type('application/json')
        ->set_output($datal['json_data']);
	}
    
    //partie etudiant
    public function modif_etudiant(){	
		$this->load->helper('url');
        $this->load->library('form_validation');
		$this->load->view('modifier/modif_etudiant');
	}
    public function modif_etudiant_insert(){
        $this->load->helper('url');
        $this->load->model('Database_modifier');
        $data = array(
            'id_etudiant' => $this->input->get('id_etudiant'),
            'diplome_etudiant' => $this->input->get('diplome_etudiant'),
            'id_filiere' => $this->input->get('id_filiere'),
        );
        $datal["toto"]=$this->Database_modifier->modif_etudiant($data);
        $datal['json_data'] = json_encode($datal);
        $this->output
        ->set_content_type('application/json')
        ->set_output($datal['json_data']);
	}
    //partie prof
    public function modif_prof(){	
		$this->load->helper('url');
        $this->load->library('form_validation');
		$this->load->view('modifier/modif_enseignant');
	}
    public function modif_prof_insert(){
        $this->load->helper('url');
        $this->load->model('Database_modifier');
        $data = array(
            'id_utilisateur' => $this->input->get('id_utilisateur'),
            'responsabilite_ens' => $this->input->get('responsabilite_ens'),
            'volume_horaire' => $this->input->get('volume_horaire'),
        );
        $datal["toto"]=$this->Database_modifier->modif_prof($data);
        $datal['json_data'] = json_encode($datal);
        $this->output
        ->set_content_type('application/json')
        ->set_output($datal['json_data']);
	}
    //partie filiere
    public function modif_fil(){	
        
		$this->load->helper('url');	
        $this->load->library('form_validation');	
		$this->load->view('modifier/modif_fil');
	}
    public function modif_fil_insert(){
        $this->load->model('Database_modifier');
        $data = array(
            'id_filiere'=> $this->input->get('id_filiere'),
            'nom_filiere' => $this->input->get('nom_filiere'),   
            'niveau' => $this->input->get('niveau'), 
            'nombre_annee' => $this->input->get('nombre_annee'), 
            'description' => $this->input->get('description') ,
            'id_responsable'=> $this->input->get('id_responsable') ,          
        );
        $datal["toto"]=$this->Database_modifier->modif_fil($data);
        $datal['json_data'] = json_encode($datal);
        $this->output
        ->set_content_type('application/json')
        ->set_output($datal['json_data']);
	}
    //partie cours
    public function modif_cours(){	
        
            $this->load->helper('url');	
            $this->load->library('form_validation');	
            $this->load->view('modifier/modif_cours');
        }
    public function modif_cours_insert(){
            $this->load->model('Database_modifier');
            $data = array(
                'id_enseignant' => $this->input->get('id_enseignant'),   
                'id_ue' => $this->input->get('id_ue'), 
                'id_cours' => $this->input->get('id_cours')
             );
             $datal["toto"]= $this->Database_modifier->modif_cours($data);
            $datal['json_data'] = json_encode($datal);
            $this->output
            ->set_content_type('application/json')
            ->set_output($datal['json_data']);
        }
    public function modif_ue(){	
        
            $this->load->helper('url');	
            $this->load->library('form_validation');	
            $this->load->view('modifier/modif_ue');
        }
    public function modif_ue_insert(){
            $this->load->model('Database_modifier');
            $data = array(
                'description' => $this->input->get('description'),   
                'id_filiere' => $this->input->get('id_filiere'), 
                'id_ue' => $this->input->get('id_ue'), 
                'libelle_ue' => $this->input->get('libelle_ue')
             );
             $datal["toto"]=$this->Database_modifier->modif_ue($data);
            $datal['json_data'] = json_encode($datal);
            $this->output
            ->set_content_type('application/json')
            ->set_output($datal['json_data']);
        } 
    public function modif_edt(){	
        
            $this->load->helper('url');	
            $this->load->library('form_validation');	
            $this->load->view('modifier/modif_edt');
        }
    public function modif_edt_insert(){
            $this->load->model('Database_modifier');
            $data = array(
                'id_edt' => $this->input->get('id_edt'),   
                'id_filiere' => $this->input->get('id_filiere'),   
                'id_cours' => $this->input->get('id_cours'), 
                'date_debut' => $this->input->get('date_debut'),
                'date_fin' => $this->input->get('date_fin'),
                'type_cours' => $this->input->get('type_cours'),
            );
            $datal["toto"]=$this->Database_modifier->modif_edt($data);
            $datal['json_data'] = json_encode($datal);
            $this->output
            ->set_content_type('application/json')
            ->set_output($datal['json_data']);
        } 
    public function modif_note(){	
        
            $this->load->helper('url');	
            $this->load->library('form_validation');	
            $this->load->view('modifier/modif_note');
        }
    public function modif_note_insert(){
            $this->load->model('Database_modifier');
            $data = array(
                'id_utilisateur' => $this->input->get('id_utilisateur'),   
                'id_cours' => $this->input->get('id_cours'), 
                'note' => $this->input->get('note'),
                'id_note' => $this->input->get('id_note'),
 );
 $datal["toto"]= $this->Database_modifier->modif_note($data);
            $datal['json_data'] = json_encode($datal);
            $this->output
            ->set_content_type('application/json')
            ->set_output($datal['json_data']);
        } 
}

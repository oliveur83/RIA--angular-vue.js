<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete extends CI_Controller {
    //partie utilisateur
    public function delete_etud(){	
		$this->load->helper('url');
        $this->load->library('form_validation');
		$this->load->view('delete/delete_utilisateur');
	}
    public function delete_etud_insert(){
        $this->load->helper('url');
        $this->load->model('Database_delete');
        $data = array(
            'id_utilisateur' => $this->input->get('id_utilisateur'),
        );
        $datal["toto"]= $this->Database_delete->insert_etud($data);
        $datal['json_data'] = json_encode($datal);
        $this->output
        ->set_content_type('application/json')
        ->set_output($datal['json_data']);   
	}
    //partie etudiant
    public function delete_etudiant(){	
		$this->load->helper('url');
        $this->load->library('form_validation');
		$this->load->view('delete/delete_etudiant');
	}
    public function delete_etudiant_insert(){
        $this->load->helper('url');
        $this->load->model('Database_delete');
        $data = array(
            'id_utilisateur' => $this->input->get('id_utilisateur'),

        );
        $datal["toto"]=  $this->Database_delete->insert_etudiant($data);
        $datal['json_data'] = json_encode($datal);
        $this->output
        ->set_content_type('application/json')
        ->set_output($datal['json_data']);   
    }
    //partie prof
    public function delete_prof(){	
		$this->load->helper('url');
        $this->load->library('form_validation');
		$this->load->view('delete/delete_enseignant');
	}
    public function delete_prof_insert(){
        $this->load->helper('url');
        $this->load->model('Database_delete');
        $data = array(
            'id_utilisateur' => $this->input->get('id_utilisateur'),

        );
        $datal["toto"]= $this->Database_delete->insert_prof($data);
        $datal['json_data'] = json_encode($datal);
        $this->output
        ->set_content_type('application/json')
        ->set_output($datal['json_data']);   
    }
    //partie filiere
    public function delete_fil(){	
        
		$this->load->helper('url');	
        $this->load->library('form_validation');	
		$this->load->view('delete/delete_filiere');
	}
    public function delete_fil_insert(){
        $this->load->model('Database_delete');
        $data = array(
            'id_fil' => $this->input->get('id_fil'),   
  );
  $datal["toto"] =$this->Database_delete->insert_fil($data);
       $datal['json_data'] = json_encode($datal);
        $this->output
        ->set_content_type('application/json')
        ->set_output($datal['json_data']);   
    }
    //partie cours
    public function delete_cours(){	
        
            $this->load->helper('url');	
            $this->load->library('form_validation');	
            $this->load->view('delete/delete_cours');
        }
    public function delete_cours_insert(){
            $this->load->model('Database_delete');
            $data = array(
                'id_cours' => $this->input->get('id_cours'),   
             );
             $datal["toto"] = $this->Database_delete->insert_cours($data);
            $datal['json_data'] = json_encode($datal);
            $this->output
            ->set_content_type('application/json')
            ->set_output($datal['json_data']);   
        }
    public function delete_ue(){	
        
            $this->load->helper('url');	
            $this->load->library('form_validation');	
            $this->load->view('delete/delete_ue');
        }
    public function delete_ue_insert(){
            $this->load->model('Database_delete');
    
            $data = array(
                'id_ue' => $this->input->get('id_ue'),   

             );
             $datal["toto"]= $this->Database_delete->insert_ue($data);
            $datal['json_data'] = json_encode($datal);
            $this->output
            ->set_content_type('application/json')
            ->set_output($datal['json_data']);   
        } 
    public function delete_edt(){	
        
            $this->load->helper('url');	
            $this->load->library('form_validation');	
            $this->load->view('delete/delete_edt');
        }
    public function delete_edt_insert(){
            $this->load->model('Database_delete');
            $data = array(
                'id_edt' => $this->input->get('id_edt'),   

            );
            $datal["toto"] =$this->Database_delete->insert_edt($data);
            $datal['json_data'] = json_encode($datal);
            $this->output
            ->set_content_type('application/json')
            ->set_output($datal['json_data']);   
        } 
    public function delete_note(){	
        
            $this->load->helper('url');	
            $this->load->library('form_validation');	
            $this->load->view('delete/delete_note');
        }
    public function delete_note_insert(){
            $this->load->model('Database_delete');
            $data = array(
                'id_note' => $this->input->get('id_note'),   
                );
                $datal["toto"]=$this->Database_delete->insert_note($data);
            $datal['json_data'] = json_encode($datal);
            $this->output
            ->set_content_type('application/json')
            ->set_output($datal['json_data']);   
        } 
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{	
		$this->load->helper('url');
		$this->load->view('site');
	}
	//liste des utilisateur 
	public function lutil(){	
		$this->load->helper('url');
		$this->load->model('Database_select');
		$data["toto"]=$this->Database_select->select_util();
		$data['json_data'] = json_encode($data);
		$this->output
        ->set_content_type('application/json')
        ->set_output($data['json_data']);
	}
	public function liste_etudiant_prof(){	
		$this->load->helper('url');
		$this->load->model('Database_select');
		$datal = array(
			'id_etudiant' => $this->input->get('id'),
		);
		$data["toto"]=$this->Database_select->liste_etudiant_prof($datal);
		$data['json_data'] = json_encode($data);
		$this->output
        ->set_content_type('application/json')
        ->set_output($data['json_data']);
	}
	//liste des etudiant 
	public function letudiant(){	
		$this->load->helper('url');
		$this->load->model('Database_select');
		$datal["toto"]=$this->Database_select->select_etudiant();
		$datal['json_data'] = json_encode($datal);
		
		$this->output
        ->set_content_type('application/json')
        ->set_output($datal['json_data']);
	}
	
	//liste des prof 
	public function lprof(){	
		$this->load->helper('url');
		$this->load->model('Database_select');
		$datal["toto"]=$this->Database_select->select_prof();
		$datal['json_data'] = json_encode($datal);
		
		$this->output
        ->set_content_type('application/json')
        ->set_output($datal['json_data']);
	}
	//liste des ue 
	public function lue(){	
		$this->load->helper('url');
		$this->load->model('Database_select');
		$datal["toto"]=$this->Database_select->select_lue();
		
		$datal['json_data'] = json_encode($datal);
		
		$this->output
        ->set_content_type('application/json')
        ->set_output($datal['json_data']);
	}
	//liste des filiere
	public function lfil(){	
		$this->load->helper('url');
		$this->load->model('Database_select');
		$datal["toto"]=$this->Database_select->select_lfil();
	
		$datal['json_data']=json_encode($datal);
		
		$this->output
        ->set_content_type('application/json')
        ->set_output($datal['json_data']);
	}
	//liste des cours 
	public function lcours(){	
		$this->load->helper('url');
		$this->load->model('Database_select');
		$datal["toto"]=$this->Database_select->select_lcours();
		
		$datal['json_data'] = json_encode($datal);
		
		$this->output
        ->set_content_type('application/json')
        ->set_output($datal['json_data']);
	}
	public function lnote(){	
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->model('Database_select');
		$data["toto"]=$this->Database_select->select_lnote();
		
		$data['json_data'] = json_encode($data);
		
		$this->load->view('liste_note',$data);
	}
	
	public function lnotel(){	
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->model('Database_select');
		$datal = array(
			'id_etudiant' => $this->input->get('id_etudiant'),
		);
		
		$data["toto"]=$this->Database_select->select_lnotel($datal);
		
		$data['json_data'] = json_encode($data);
		
		$this->output
        ->set_content_type('application/json')
        ->set_output($data['json_data']);
	
	}
	public function ledtl(){	
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->model('Database_select');
		$data = array(
			'id_etudiant' => $this->input->get('id_etudiant'),	
		);
		
		$datal["toto"]=$this->Database_select->select_ledtl($data);
		
		$datal['json_data'] = json_encode($datal);
		
		$this->output
        ->set_content_type('application/json')
        ->set_output($datal['json_data']);
	
	}
	public function ledtl2(){	
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->model('Database_select');
		$data = array(
			'id_filiere' => $this->input->post('id_filiere'),
		);
		
		$data["toto"]=$this->Database_select->select_ledtl2($data);
		
		$data['json_data'] = json_encode($data);
		
		$this->load->view('liste_edt',$data);
	}
	public function ledt(){	
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->model('Database_select');
		$data = array(
			'id_prof' => $this->input->get('id_prof'),
		);
		$datal["toto"]=$this->Database_select->select_ledt($data);
		
		$datal['json_data'] = json_encode($datal);
		
		$this->output
        ->set_content_type('application/json')
        ->set_output($datal['json_data']);
	
	}
	public function ledt_tout(){	
		$this->load->helper('url');	
		$this->load->model('Database_select');
		$data["toto"]=$this->Database_select->select_edt_tout();
		$data['json_data'] = json_encode($data);
		$this->output
        ->set_content_type('application/json')
        ->set_output($data['json_data']);
	
	}
	public function lmaquette_voir(){	
		$this->load->helper('url');
		$this->load->model('Database_maquette');
		$data = array(
            'id_filliere' => $this->input->post('id_filliere')
        );
        $data["toto"]=$this->Database_maquette->liste_ue($data);
		$data["totofil"]=$this->Database_maquette->lmaq($data);
		
		$data['json_data'] = json_encode($data);
		
		$this->load->view('liste_maquette_voir',$data);
	}	
	public function lmaquette(){	
		$this->load->helper('url');
        $this->load->library('form_validation');
		$this->load->view('liste_maquette');
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update extends CI_Controller {

    public function ajout_etud(){	
		$this->load->helper('url');
		$this->load->model('Database_ajouter');
		$data["toto"]=$this->Database_ajouter->ajouter_etud();

		$this->load->view('ajout/ajout');
	}
    public function ajout_prof(){	
		$this->load->helper('url');
		$this->load->model('Database_ajouter');
		$data["toto"]=$this->Database_ajouter->ajouter_prof();
		
		$this->load->view('ajout/ajout');
	}
}

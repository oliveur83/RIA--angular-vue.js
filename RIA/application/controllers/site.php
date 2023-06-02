<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {
    public function index() {
        $data["title"] = "Page d'accueil";
        echo 'tot';
        $this->load->view('common/header');
        $this->load->view('site/index');
        $this->load->view('common/footer');
    }
    public function contact() {
        echo 'toto';
        $data["title"] = "contact";

        $this->load->view('site/index', $data);

      }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sobre extends CI_Controller {

	public function index()
	{
		$dados['titulo'] = "Educar Centro Educacional :: Sobre Nós";
		
		
		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-top');
		$this->load->view('pages/about');
		$this->load->view('templates/footer');
		$this->load->view('templates/js');
	}
}

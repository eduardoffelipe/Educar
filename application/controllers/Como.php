<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Como extends CI_Controller {

	public function index()
	{
		$dados['titulo'] = "Educar Centro Educacional :: Sobre Nós";
		
		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-top', $dados);
		$this->load->view('pages/como-estudar', $dados);
		$this->load->view('templates/footer', $dados);
		$this->load->view('templates/js', $dados);
	}
	
}

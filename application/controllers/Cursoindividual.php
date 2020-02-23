<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cursoindividual extends CI_Controller {

	public function index()
	{
		$dados['titulo'] = "Educar Centro Educacional :: Cadastro";
		
		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-top', $dados);
		$this->load->view('pages/cursoindiv', $dados);
		$this->load->view('templates/footer', $dados);
		$this->load->view('templates/js', $dados);
	}
	
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CursosGraduacao extends CI_Controller {

	public function index()
	{
		$dados['titulo'] = "Educar Centro Educacional :: Cursos";
		
		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-top', $dados);
		$this->load->view('pages/cursos', $dados);
		$this->load->view('templates/footer', $dados);
		$this->load->view('templates/js', $dados);
	}
	
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sobre extends CI_Controller {

	public function index()
	{
		$dados = ['titulo' => "Educar Centro Educacional :: Sobre Nós", 'description' => "Página Sobre Nós, a melhor plataforma de aprendizado EAD! Cursos em todos os níveis de conhecimento, Graduação, Pós-Graduação, Cursos de Extensão, Cursos Profissionalizantes." ];
		
		
		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-top');
		$this->load->view('pages/about');
		$this->load->view('templates/footer');
		$this->load->view('templates/js');
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller {

	public function index()
	{
		$dados = ['titulo' => "Educar Centro Educacional :: Contato", 'description' => "Página de contato EAD da Educar.com.vc, a melhor plataforma de aprendizado EAD! Cursos em todos os níveis de conhecimento, Graduação, Pós-Graduação, Cursos de Extensão, Cursos Profissionalizantes." ];
		
		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-top');
		$this->load->view('pages/contact');
		$this->load->view('templates/footer');
		$this->load->view('templates/js');
	}
	
}

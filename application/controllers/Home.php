<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$dados = ['titulo' => "Educar Centro Educacional", 'description' => "Página Educar.com.vc - Educar Centro Educacional, a melhor plataforma de aprendizado EAD! Cursos em todos os níveis de conhecimento, Graduação, Pós-Graduação, Cursos de Extensão, Cursos Profissionalizantes." ];
		
		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-top');
		$this->load->view('pages/home');
		$this->load->view('templates/footer');
		$this->load->view('templates/js');
	}

}

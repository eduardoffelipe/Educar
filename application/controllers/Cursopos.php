<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cursopos extends CI_Controller {

	public function index()
	{
        $url = "http://virtualead.com.br/api/api-cursos.php";
        $cursos = json_decode(file_get_contents($url));
       
        $dados = ['titulo' => "Educar Centro Educacional :: Cursos Pós-Graduação", 'cursos' => $cursos, 'modalidade' => "3", 'description' => "Página de Cursos em Pós-Graduação Educar.com.vc, a melhor plataforma de aprendizado EAD! Cursos em todos os níveis de conhecimento, Graduação, Pós-Graduação, Cursos de Extensão, Cursos Profissionalizantes." ];
		
		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-top');
		$this->load->view('pages/cursos' );
		$this->load->view('templates/footer' );
		$this->load->view('templates/js');
	}
	
}

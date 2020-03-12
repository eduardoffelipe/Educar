<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cursoextensao extends CI_Controller {

	public function index()
	{
        $url = "http://virtualead.com.br/api/api-cursos.php";
        $cursos = json_decode(file_get_contents($url));
       
        $dados = ['titulo' => "Educar Centro Educacional :: Cursos Extensão", 'cursos' => $cursos, 'modalidade' => "13", 'description' => "Página de cursos de extensão Educar.com.vc, a melhor plataforma de aprendizado EAD! Cursos em todos os níveis de conhecimento, Graduação, Pós-Graduação, Cursos de Extensão, Cursos Profissionalizantes."  ];
		
		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-top');
		$this->load->view('pages/cursos' );
		$this->load->view('templates/footer' );
		$this->load->view('templates/js');
    }
    

	
}

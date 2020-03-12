<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {

	public function index()
	{
        $url = "http://virtualead.com.br/api/api-cursos.php";
        $cursos = json_decode(file_get_contents($url));
       
        $dados = ['titulo' => "Educar Centro Educacional :: Cadastro", 'cursos' => $cursos, 'modalidade' => "3", 'description' => "Página de Cadastro Educar.com.vc, a melhor plataforma de aprendizado EAD! Cursos em todos os níveis de conhecimento, Graduação, Pós-Graduação, Cursos de Extensão, Cursos Profissionalizantes."  ];
		
		$this->load->view('templates/headercad', $dados);
		// $this->load->view('templates/nav-top');
		$this->load->view('pages/cadastro');
		// $this->load->view('templates/footer');
		// $this->load->view('templates/js');
	}
	
}

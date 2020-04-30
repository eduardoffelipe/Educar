<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cursoindividual extends CI_Controller {

	public function index()
	{
        $this->load->model("cursos_model");
        $cursos = $this->cursos_model->index();
       
        $dados = ['titulo' => "Educar Centro Educacional :: Cursos", 'cursos' => $cursos, 'description' => "Página de detalhada de cursos Educar.com.vc, a melhor plataforma de aprendizado EAD! Cursos em todos os níveis de conhecimento, Graduação, Pós-Graduação, Cursos de Extensão, Cursos Profissionalizantes."  ];
        
        
		
		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-top');
		$this->load->view('pages/cursoindiv');
		$this->load->view('templates/footer');
		$this->load->view('templates/js');
    }

    public function busca()
    {
        $url = "http://virtualead.com.br/api/api-cursos.php";
        $json = file_get_contents($url);
        $cursos = json_decode($json);
        $id = $this->input->post();
        $dados = ['titulo' => "Educar Centro Educacional :: Cursos", 'cursoid' => $id, 'cursos' => $cursos, 'description' => "Página de detalhada de cursos Educar.com.vc, a melhor plataforma de aprendizado EAD! Cursos em todos os níveis de conhecimento, Graduação, Pós-Graduação, Cursos de Extensão, Cursos Profissionalizantes."  ];
        
        
		
		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-top');
		$this->load->view('pages/cursoindiv');
		$this->load->view('templates/footer');
		$this->load->view('templates/js');
    }
	
}

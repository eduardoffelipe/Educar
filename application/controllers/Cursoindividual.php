<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cursoindividual extends CI_Controller {

	public function index()
	{
        $url = "http://virtualead.com.br/api/api-cursos.php";
        $cursos = json_decode(file_get_contents($url));
       
        $dados = ['titulo' => "Educar Centro Educacional :: Cursos", 'cursos' => $cursos ];
        
        
		
		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-top');
		$this->load->view('pages/cursoindiv');
		$this->load->view('templates/footer');
		$this->load->view('templates/js');
	}
	
}

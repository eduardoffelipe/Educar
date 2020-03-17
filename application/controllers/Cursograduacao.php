<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cursograduacao extends CI_Controller {

	public function index()
	{
        $url = "http://virtualead.com.br/api/api-cursos.php";
        $cursos = json_decode(file_get_contents($url));

		$dados = ['titulo' => "Educar Centro Educacional :: Cursos Graduação", 'cursos' => $cursos, 'description' => "Página de cursos de graduação Educar.com.vc, a melhor plataforma de aprendizado EAD! Cursos em todos os níveis de conhecimento, Graduação, Pós-Graduação, Cursos de Extensão, Cursos Profissionalizantes."  ];
		
		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-top');
		$this->load->view('pages/cursos');
		$this->load->view('templates/footer');
		$this->load->view('templates/js');
    }
    
    public function buscarCurso(){
        $url = "http://virtualead.com.br/api/api-cursos.php";
        $cursos = json_decode(file_get_contents($url));
        $array = array();
        foreach($cursos as $curso){
            if($curso->modalidade===""){ 
                array_push($array, $curso);   
            }
        }
        $cursos = $array;

        return $cursos;
    }
	
}

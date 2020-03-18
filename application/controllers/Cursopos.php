<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cursopos extends CI_Controller {

	public function index()
	{



        $cursos = $this->buscarCurso();
       
        $dados = ['titulo' => "Educar Centro Educacional :: Cursos Pós-Graduação", 'cursos' => $cursos, 'description' => "Página de Cursos em Pós-Graduação Educar.com.vc, a melhor plataforma de aprendizado EAD! Cursos em todos os níveis de conhecimento, Graduação, Pós-Graduação, Cursos de Extensão, Cursos Profissionalizantes." ];
		
		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-top');
		$this->load->view('pages/cursos' );
		$this->load->view('templates/footer' );
		$this->load->view('templates/js');
    }


    public function store(){
        $this->load->model("cursos_model");
        $url = "http://virtualead.com.br/api/api-cursos.php";
        $cursos = json_decode(file_get_contents($url));
        foreach ($cursos as $curso){
            $this->cursos_model->store($curso);
        }
    
    
    }

    
    public function buscarCurso(){

        $this->load->model("cursos_model");
        $cursos = $this->cursos_model->index();

        $array = array();
        foreach($cursos as $curso){
            if($curso['modalidade']=== "3"){ 
                array_push($array, $curso);   
            }
        }
        $cursos = $array;

        return $cursos;
    }
	
}

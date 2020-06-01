<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Precosgraduacao extends CI_Controller
{

  public function index()
  {
    $this->load->model("cursos_model");
    $cursos = $this->cursos_model->areaCursosPos();

    $dados = ['titulo' => "Educar Centro Educacional :: Cursos Graduação", 'cursos' => $cursos, 'description' => "Página de Cursos em Pós-Graduação Educar.com.vc, a melhor plataforma de aprendizado EAD! Cursos em todos os níveis de conhecimento, Graduação, Pós-Graduação, Cursos de Extensão, Cursos Profissionalizantes."];

    $this->load->view('templates/header', $dados);
    $this->load->view('templates/nav-top');
    $this->load->view('pages/precosgraduacao');
    $this->load->view('templates/footer');
    $this->load->view('templates/js');
  }

}

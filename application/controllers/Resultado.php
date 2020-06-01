<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Resultado extends CI_Controller
{

  public function index()
  {
    $this->load->model('busca_model');


    $listagem = $this->busca_model->buscar($_POST);
    $dados = ['listagem' => $listagem, 'titulo' => "Educar Centro Educacional :: Busca", 'description' => "Página de Busca Educar.com.vc, a melhor plataforma de aprendizado EAD! Cursos em todos os níveis de conhecimento, Graduação, Pós-Graduação, Cursos de Extensão, Cursos Profissionalizantes."];

    // $this->load->view('templates/header', $dados);
    // $this->load->view('templates/nav-top');
    $this->load->view('pages/resultado', $dados);
    // $this->load->view('templates/footer');
    // $this->load->view('templates/js');
  }
}

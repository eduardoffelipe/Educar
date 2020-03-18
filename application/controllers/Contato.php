<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller {


	public function index()
	{
		$dados = ['titulo' => "Educar Centro Educacional :: Contato", 'description' => "Página de contato EAD da Educar.com.vc, a melhor plataforma de aprendizado EAD! Cursos em todos os níveis de conhecimento, Graduação, Pós-Graduação, Cursos de Extensão, Cursos Profissionalizantes.", 'action' => site_url('contato/enviaEmail') ];
		
		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-top');
		$this->load->view('pages/contact');
		$this->load->view('templates/footer');
		$this->load->view('templates/js');
    }
    
    public function enviaEmail() {

        $dados = ['titulo' => "Educar Centro Educacional :: Contato", 'description' => "Página de contato EAD da Educar.com.vc, a melhor plataforma de aprendizado EAD! Cursos em todos os níveis de conhecimento, Graduação, Pós-Graduação, Cursos de Extensão, Cursos Profissionalizantes.", 'action' => site_url('contato/enviaEmail') ];

        $this->load->library('email');
 
        $email = $this->input->post('email', TRUE);
        $nome = $this->input->post('nome', TRUE);
        $mensagem = $this->input->post('mensagem', TRUE);

 
        $this->email->from($email, $nome);
        $this->email->to('contato@educar.com.vc');
 
        $this->email->subject("Mensagem de contato do Site");
        $this->email->message('<html><head></head><body>
            <b>Nome:</b>       ' . $nome . ' <br />
            <b>E-mail:</b>     ' . $email . ' <br />
            <b>Mensagem:</b>   ' . $mensagem . ' <br />
            </body></html>');
 
        $em = $this->email->send();
        if ($em) {
            $data['email_enviado'] = 'E-mail enviado com sucesso. Retornaremos em breve.';
        } else {
            $data['email_enviado'] = 'Erro ao enviar o email. Favor enviar um e-mail para Contato@educar.com.vc';
        }
         $data['action'] = site_url('contato/enviaEmail');
         $this->load->view('templates/header', $dados);
         $this->load->view('templates/nav-top');
         $this->load->view('pages/contact');
         $this->load->view('templates/footer');
         $this->load->view('templates/js');
    }
 
}
	


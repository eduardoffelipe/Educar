<?php
defined('BASEPATH') or exit('No direct script access allowed');

require FCPATH . '/vendor/autoload.php';

class Vindicostumer extends CI_Controller
{

  public function index(){
    try {

      $id = $this->cadastroCliente();
      $dados = ['titulo' => "Educar Centro Educacional :: Cadastro", 'idCostumer' => $id];
		
		
      $this->load->view('templates/header', $dados);
      $this->load->view('templates/nav-top');
      $this->load->view('pages/cadastrotwo');
      $this->load->view('templates/footer');
      $this->load->view('templates/js');

  } catch (Exception $e) {
      echo 'Exceção capturada: ',  $e->getMessage(), "\n";
      echo 'DEU MERDA MENOOO';
  }

  }


  public function cadastroCliente()
  {


    // Declara em um array os valores de VINDI_API_KEY e VINDI_API_URI
    $arguments = array(
      'VINDI_API_KEY' => 'wOMWzfkhFKkYIUXxxy-v9ojFw57wv3qwVLFgBmHmG78',
      'VINDI_API_URI' => 'https://sandbox-app.vindi.com.br/api/v1/'
    );

    // Instancia o serviço de Customers (Clientes) com o array contendo VINDI_API_KEY e VINDI_API_URI
    $customerService = new Vindi\Customer($arguments);



    // Cria um novo cliente:
    $customer = $customerService->create([
      'name'  => $this->input->post_get('name', TRUE),
      'email' => $this->input->post_get('email', TRUE),
      'registry_code' => $this->input->post_get('cpf', TRUE),
      'address' => [
        'street' => $this->input->post_get('rua', TRUE),
        'zipcode' => $this->input->post_get('cep', TRUE),
        'number' => $this->input->post_get('numero', TRUE),
        'neighborhood' => $this->input->post_get('bairro', TRUE),
        'city' => $this->input->post_get('cidade', TRUE),
        'state' => $this->input->post_get('estado', TRUE),
        'country' => 'BR',
      ],
      'phones' => [
        [
          "phone_type" => "mobile",
          "number" => "55{$this->input->post_get('phone1', TRUE)}",
        ],
        [
          "phone_type" => "mobile",
          "number" => "55{$this->input->post_get('phone2', TRUE)}",
        ],
      ],

    ]);
       
    return $customer->id;
    
  }
}

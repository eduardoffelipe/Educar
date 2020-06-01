<?php

class Busca_model extends CI_Model
{

    public function index()
    {
        $this->db->order_by("titulo", "ASC");
        return $this->db->get("cursos")->result_array();
    }

    public function buscar($busca){
      if(empty($busca)){
        return array();
      }

      $busca = $this->input->post('resultado');
      $this->db->like('titulo', $busca);
      $query = $this->db->get('cursos');
      return $query->result_array();

    }

}    
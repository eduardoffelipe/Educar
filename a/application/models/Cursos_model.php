<?php 

class Cursos_model extends CI_Model{

   public function index(){
        $this->db->order_by("titulo", "ASC");
       return $this->db->get("cursos")->result_array();
   }
   
   
   
   public function store($curso){
       $this->db->insert("cursos", $curso);
   }
   
}


?>

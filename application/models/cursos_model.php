<?php 

class Cursos_model extends CI_Model{

   public function index(){

       return $this->db->get("cursos")->result_array();
   }
   
   
   
   public function store($curso){
       $this->db->insert("cursos", $curso);
   }
   
}


?>

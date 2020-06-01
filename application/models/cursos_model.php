<?php

class Cursos_model extends CI_Model
{

    public function index()
    {
        $this->db->order_by("titulo", "ASC");
        return $this->db->get("cursos")->result_array();
    }



    public function store($curso)
    {
        $this->db->insert("cursos", $curso);
    }

    public function areacursospos()
    {
        return $this->db->select("area")
            ->from('cursos')
            ->where('modalidade = 3')
            ->group_by('area')
            ->get()->result_array();
        // $area = "select `area` from `cursos` where `modalidade` LIKE \'3\' group by `area`";

    }

    // $this->db->select("select `area` from `cursos` where `modalidade` LIKE '3' group by `area`";
}

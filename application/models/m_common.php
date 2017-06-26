<?php
class M_common extends CI_Model {

    function selecCodeValueOne($code){

        $this->db->where('code_key', $code);
        $query  = $this->db->get('CODE');
        $result = $query->row();
        return $result->code_value;
    }

    function selecCode($entry){
        $this->db->where('entry', $entry);
        $this->db->order_by('int_value asc');
        $query = $this->db->get('CODE');
        return $query->result_array();
    }


    function selecStaffCode($code){
        $this->db->where('CC_CD', $code);
        $query  = $this->db->get('t_comm_cd');
        $result = $query->row();
        return $result->CC_NM;

    }

    function selectMedia($category){
        $this->db->where('category', $category);
        $this->db->order_by('idx asc');
        $query = $this->db->get('t_video');
        return $query->result_array();
    }
}
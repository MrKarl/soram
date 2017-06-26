<?php
class M_main_popup extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    function selectConsultPopup(){
        $this->db->where('CP_IDX', '1');
        return $this->db->get('t_consult_popup')->row();
    }
    
    function updateProcess($data){
        $this->db->where('CP_IDX', '1');
        return $this->db->update('t_consult_popup', $data);
    }
    
}
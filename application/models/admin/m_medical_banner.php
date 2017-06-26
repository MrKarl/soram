<?php
class M_medical_banner extends CI_Model {
    function __construct(){
        parent::__construct();
    }
    
    function selectMedicalBanner(){
        $this->db->where('BN_SEQ', '1');
        return $this->db->get('t_banner')->row();
    }

    function updateProcess($data){
        $this->db->where('BN_SEQ', '1');
        return $this->db->update('t_banner', $data);
    }
}
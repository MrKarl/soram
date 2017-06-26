<?php
class M_apply_banner extends CI_Model {
    function __construct(){
        parent::__construct();
    }
    
    function selectApplyBanner(){
        $this->db->where('BN_SEQ', '3');
        return $this->db->get('t_banner')->row();
    }
    
    function updateProcess($data){
        $this->db->where('BN_SEQ', '3');
        return $this->db->update('t_banner', $data);
    }
}
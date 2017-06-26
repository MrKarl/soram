<?php
class M_media_banner extends CI_Model {
    function __construct(){
        parent::__construct();
    }
    
    function selectMediaBanner(){
        $this->db->where('BN_SEQ', '2');
        return $this->db->get('t_banner')->row();
    }
    
    function updateProcess($data){
        $this->db->where('BN_SEQ', '2');
        return $this->db->update('t_banner', $data);
    }
}
<?php
class M_Session extends CI_Model {

    function selectUserOne($login_id , $login_pwd) {

        $this->db->select('MGR_SEQ, MGR_ID, MGR_NM');
        $this->db->where('MGR_ID' , $login_id);
        $this->db->where('MGR_PWD' , $login_pwd);
        $query  = $this->db->get('t_mgr');
        return $this->result = $query->row();

    }

}
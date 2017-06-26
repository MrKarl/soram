<?php
class M_Session extends CI_Model {

    function selectUserOne($login_id , $login_pwd) {

        $this->db->select('MBR_SEQ, MBR_ID, MBR_NM');
        $this->db->where('MBR_ID' , $login_id);
        $this->db->where('MBR_PWD' , $login_pwd);
        $this->db->where('MBR_LEV_YN' , 'N');
        return $this->db->get('t_mbr');

    }

    function selectSearchUserOne($name, $email , $id=""){

        $this->db->select('MBR_ID');
        $this->db->where('MBR_NM' , $name);
        $this->db->where('MBR_EMAIL' , $email);
        $this->db->where('MBR_LEV_YN' , 'N');

        if ($id != ""){
            $this->db->where('MBR_ID' , $id);
        }

        return $this->db->get('t_mbr');
    }

    function updateUserPassword($id , $new_password){
        $this->db->where('MBR_ID' , $id);
        return $result = $this->db->update('t_mbr', array("MBR_PWD" => $new_password ));
    }
}
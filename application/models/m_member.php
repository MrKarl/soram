<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-05-10
 * Time: 오후 3:33
 */

class M_member extends CI_Model{
    function insertProcess($data){
        $this->db->insert("t_mbr", $data);
        return $this->db->insert_id();
    }

    function insertEtcProcess($data_etc){
        return $this->db->insert("t_mbr_added", $data_etc);
    }
    
    function selectUser($user_id){
        $this->db->where("t1.MBR_ID" , $user_id);
        $this->db->join("t_mbr_added t2" , "t1.MBR_SEQ = t2.mbr_seq", 'left');
        $query  = $this->db->get("t_mbr t1");
        return $query->row();
    }


    function updateMember($user_id , $data){
        $this->db->where("MBR_ID" , $user_id);
        return $this->db->update("t_mbr", $data);
    }


    function updateMemberEtc($user_seq , $data){
        $this->db->where("mbr_seq" , $user_seq);
        return $this->db->update("t_mbr_added", $data);
    }


    //1:1상담관리
    function selectConsultingCount($MBR_ID) {
        $query = "select CL_SEQ from t_cnsl where MBR_ID='".$MBR_ID."' and CL_DEL_FLAG='N' and (CL_TTL like '%".$this->data['search_string']."%' or CL_CONT like '%".$this->data['search_string']."%')";
        return $this->db->query($query)->num_rows();
    }

    function selectConsulting($MBR_ID) {
        if ($this->data['page'] == 1 || $this->data['page'] < 0) {
            $this->offset = 0;
        } else {
            $this->offset = $this->data['size'] * ($this->data['page'] - 1);
        }
        $this->limit = $this->data['size'];

        $query = "select * from t_cnsl where MBR_ID='".$MBR_ID."' and CL_DEL_FLAG='N' and (CL_TTL like '%".$this->data['search_string']."%' or CL_CONT like '%".$this->data['search_string']."%') order by CL_SEQ desc limit ".$this->offset.", ".$this->limit;
        return $this->db->query($query)->result_array();
    }

    //1:1상담관리 view
    function selectConsultingView($seq) {
        return $this->db->get_where('t_cnsl', array('CL_SEQ'=>$seq))->row();
    }

    function selectConsultingChangePreview($MBR_ID, $seq){
        $query = "SELECT max(CL_SEQ) as preview FROM t_cnsl WHERE MBR_ID='".$MBR_ID."' and CL_DEL_FLAG='N' and CL_SEQ < " .$seq ;
        return $this->db->query($query);
    }

    function selectConsultingChangeNext($MBR_ID, $seq){
        $query = "SELECT min(CL_SEQ) as next FROM t_cnsl WHERE MBR_ID='".$MBR_ID."' and CL_DEL_FLAG='N' and CL_SEQ > " .$seq ;
        return $this->db->query($query);
    }
}
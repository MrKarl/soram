<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-05-10
 * Time: 오후 4:51
 */

class M_member extends CI_Model{
    function __construct() {
        parent::__construct();
        $this->limit        = 20;
        $this->offset       = 0;

        $this->total        = 0;
        $this->result_array = array();
        $this->result       = FALSE;
        $this->result_msg   = "실패";
    }

    function selectMemberCount(){
        if ($this->data['search_field'] != ""){
            $this->db->like($this->data['search_field'] , $this->data['search_string']);
        } else {
            $where = sprintf("(MBR_ID like '%s' or MBR_NM like '%s' or MBR_CPH like '%s')", "%".$this->data['search_string']."%", "%".$this->data['search_string']."%", "%".$this->data['search_string']."%");
            $this->db->where($where);
        }
        
        if ($this->data['start_date'] != ''){
            $this->db->where("date_format(MBR_RGST_YMDT,'%Y-%m-%d')  >=", $this->data['start_date']);
        }
        if ($this->data['end_date'] != ''){
            $this->db->where("date_format(MBR_RGST_YMDT,'%Y-%m-%d')  <=", $this->data['end_date']);
        }
        if ($this->data['delete'] != ""){
            $this->db->where("MBR_LEV_YN", 'Y');
        }else {
            $this->db->where("MBR_LEV_YN", "N");
        }

        if ($this->data['is_sms'] != ""){
            $this->db->where("MBR_SMS_YN", $this->data['is_sms']);
        }
        
        $this->db->select('MBR_SEQ');
        $this->db->from('t_mbr');
        $this->total = $this->db->count_all_results();
        return  $this->total;
    }

    function selectMember(){
        if ($this->data['page'] == 1 || $this->data['page'] < 0) {
            $this->offset = 0;
        } else {
            $this->offset = $this->data['size'] * ($this->data['page'] - 1);
        }
        
        $this->limit  = $this->data['size'];

        if ($this->data['search_field'] != ""){
            $this->db->like($this->data['search_field'] , $this->data['search_string']);
        } else {
            $where = sprintf("(MBR_ID like '%s' or MBR_NM like '%s' or MBR_CPH like '%s')", "%".$this->data['search_string']."%", "%".$this->data['search_string']."%", "%".$this->data['search_string']."%");
            $this->db->where($where);
        }
        
        if ($this->data['start_date'] != ''){
            $this->db->where("date_format(MBR_RGST_YMDT,'%Y-%m-%d')  >=", $this->data['start_date']);
        }
        if ($this->data['end_date'] != ''){
            $this->db->where("date_format(MBR_RGST_YMDT,'%Y-%m-%d')  <=", $this->data['end_date']);
        }
        if ($this->data['delete'] != ""){
            $this->db->where("MBR_LEV_YN", 'Y');
        }else {
            $this->db->where("MBR_LEV_YN", "N");
        }
        
        if ($this->data['is_sms'] != ""){
            $this->db->where("MBR_SMS_YN", $this->data['is_sms']);
        }

        $this->db->order_by('MBR_SEQ desc');
        $query = $this->db->get('t_mbr', $this->limit , $this->offset );
        return $this->result_array = $query->result_array();
    }

    function selectMemberOne($MBR_SEQ){

        $this->db->where('MBR_SEQ', $MBR_SEQ);

        if ($this->data['delete'] != ""){
            $this->db->where("MBR_LEV_YN", 'Y');
        }

        $query  = $this->db->get('t_mbr');
        return $result  = $query->row();
    }
    
    function updateProcess($data, $MBR_SEQ){
        $this->db->where("MBR_SEQ", $MBR_SEQ);
        return $this->db->update("t_mbr", $data);
    }
    
    function deleteProcess($data, $MBR_SEQ){
        $this->db->where("MBR_SEQ", $MBR_SEQ);
        return $this->db->update("t_mbr", $data);
    }

    function perfactDeleteProcess($MBR_SEQ){
        $this->db->where("MBR_SEQ", $MBR_SEQ);
        return $this->db->delete("t_mbr");
    }
}
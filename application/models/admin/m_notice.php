<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-05-10
 * Time: 오후 4:51
 */

class M_notice extends CI_Model{
    function __construct() {
        parent::__construct();
        $this->limit        = 20;
        $this->offset       = 0;

        $this->total        = 0;
        $this->result_array = array();
        $this->result       = FALSE;
        $this->result_msg   = "실패";
    }

    function selectNoticeCount(){
        if ($this->data['search_field'] != ""){
            $this->db->like($this->data['search_field'] , $this->data['search_string']);
        } else {
            $where = sprintf("(NI_TTL like '%s' or NI_CONT like '%s')", "%".$this->data['search_string']."%", "%".$this->data['search_string']."%");
            $this->db->where($where);
        }

        if ($this->data['start_date'] != ''){
            $this->db->where("date_format(NI_RGST_YMDT,'%Y-%m-%d')  >=", $this->data['start_date']);
        }
        if ($this->data['end_date'] != ''){
            $this->db->where("date_format(NI_RGST_YMDT,'%Y-%m-%d')  <=", $this->data['end_date']);
        }
        if ($this->data['is_exps'] != ""){
            $this->db->where("NI_EXPS_YN", $this->data['is_exps']);
        }
        $this->db->select('NI_SEQ');
        $this->db->from('t_noti');
        $this->total = $this->db->count_all_results();
        return  $this->total;
    }

    function selectNotice(){
        if ($this->data['page'] == 1 || $this->data['page'] < 0) {
            $this->offset = 0;
        } else {
            $this->offset = $this->data['size'] * ($this->data['page'] - 1);
        }

        $this->limit  = $this->data['size'];

        if ($this->data['search_field'] != ""){
            $this->db->like($this->data['search_field'] , $this->data['search_string']);
        } else {
            $where = sprintf("(NI_TTL like '%s' or NI_CONT like '%s')", "%".$this->data['search_string']."%", "%".$this->data['search_string']."%");
            $this->db->where($where);
        }
        
        if ($this->data['start_date'] != ''){
            $this->db->where("date_format(NI_RGST_YMDT,'%Y-%m-%d')  >=", $this->data['start_date']);
        }
        if ($this->data['end_date'] != ''){
            $this->db->where("date_format(NI_RGST_YMDT,'%Y-%m-%d')  <=", $this->data['end_date']);
        }
        if ($this->data['is_exps'] != ""){
            $this->db->where("NI_EXPS_YN", $this->data['is_exps']);
        }

        $this->db->order_by('NI_SEQ desc');
        $query = $this->db->get('t_noti', $this->limit , $this->offset );
        return $this->result_array = $query->result_array();
    }

    function selectNoticeOne($NI_SEQ){

        $this->db->where('NI_SEQ', $NI_SEQ);
        
        $query  = $this->db->get('t_noti');
        return $result  = $query->row();
    }

    function insertProcess($data){
        return $this->db->insert("t_noti", $data);
    }

    function updateProcess($data, $NI_SEQ){
        $this->db->where("NI_SEQ", $NI_SEQ);
        return $this->db->update("t_noti", $data);
    }

    function deleteProcess($NI_SEQ){
        $this->db->where("NI_SEQ", $NI_SEQ);
        return $this->db->delete("t_noti");
    }
}
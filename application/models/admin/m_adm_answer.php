<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2016-05-11
 * Time: 오후 6:38
 */

class M_adm_answer extends CI_Model{
    function __construct() {
        parent::__construct();
        $this->limit        = 20;
        $this->offset       = 0;

        $this->total        = 0;
        $this->result_array = array();
        $this->result       = FALSE;
        $this->result_msg   = "실패";
    }

    function selectAdmAnswerCount(){
        if ($this->data['search_field'] != ""){
            $this->db->like($this->data['search_field'] , $this->data['search_string']);
        } else {
            $where = sprintf("(CA_TTL like '%s' or CA_CONT like '%s')", "%".$this->data['search_string']."%", "%".$this->data['search_string']."%");
            $this->db->where($where);
        }

        if ($this->data['start_date'] != ''){
            $this->db->where("date_format(CA_RGST_YMDT,'%Y-%m-%d')  >=", $this->data['start_date']);
        }
        if ($this->data['end_date'] != ''){
            $this->db->where("date_format(CA_RGST_YMDT,'%Y-%m-%d')  <=", $this->data['end_date']);
        }
        if ($this->data['is_rank'] != ""){
            $this->db->where("CA_SORD", $this->data['is_rank']);
        }

        $this->db->select('idx');
        $this->db->from('t_cnsl_ans');
        $this->total = $this->db->count_all_results();

        return  $this->total;

    }

    function selectAdmAnswer(){
        if ($this->data['page'] == 1 || $this->data['page'] < 0) {
            $this->offset = 0;
        } else {
            $this->offset = $this->data['size'] * ($this->data['page'] - 1);
        }

        $this->limit  = $this->data['size'];

        if ($this->data['search_field'] != ""){
            $this->db->like($this->data['search_field'] , $this->data['search_string']);
        } else {
            $where = sprintf("(CA_TTL like '%s' or CA_CONT like '%s')", "%".$this->data['search_string']."%", "%".$this->data['search_string']."%");
            $this->db->where($where);
        }
        
        if ($this->data['start_date'] != ''){
            $this->db->where("date_format(CA_RGST_YMDT,'%Y-%m-%d')  >=", $this->data['start_date']);
        }
        if ($this->data['end_date'] != ''){
            $this->db->where("date_format(CA_RGST_YMDT,'%Y-%m-%d')  <=", $this->data['end_date']);
        }
        if ($this->data['is_rank'] != ""){
            $this->db->where("CA_SORD", $this->data['is_rank']);
        }

        $this->db->order_by('CA_SEQ desc');
        $query = $this->db->get('t_cnsl_ans', $this->limit , $this->offset );
        return $this->result_array = $query->result_array();
    }

    function selectAdmAnswerOne($CA_SEQ){

        $this->db->where('CA_SEQ', $CA_SEQ);

        $query  = $this->db->get('t_cnsl_ans');
        return $result  = $query->row();
    }

    function insertProcess($data){
        return $this->db->insert("t_cnsl_ans", $data);
    }

    function updateProcess($data, $CA_SEQ){
        $this->db->where("CA_SEQ", $CA_SEQ);
        return $this->db->update("t_cnsl_ans", $data);
    }

    function deleteProcess($CA_SEQ){
        $this->db->where("CA_SEQ", $CA_SEQ);
        return $this->db->delete("t_cnsl_ans");
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2016-05-11
 * Time: 오후 3:46
 */

class M_engqna extends CI_Model{
    function __construct() {
        parent::__construct();
        $this->limit        = 20;
        $this->offset       = 0;

        $this->total        = 0;
        $this->result_array = array();
        $this->result       = FALSE;
        $this->result_msg   = "실패";
    }


    function selectEngQnaCount(){
        if ($this->data['search_field'] == "name"){
            $where = sprintf("(firstname like '%s' or lastname like '%s')", "%".$this->data['search_string']."%", "%".$this->data['search_string']."%");
            $this->db->where($where);
        } else if ($this->data['search_field'] != ""){
            $this->db->like($this->data['search_field'] , $this->data['search_string']);
        } else {
            $where = sprintf("(firstname like '%s' or lastname like '%s' or title like '%s' or content like '%s')", "%".$this->data['search_string']."%", "%".$this->data['search_string']."%", "%".$this->data['search_string']."%", "%".$this->data['search_string']."%");
            $this->db->where($where);
        }

        if ($this->data['start_date'] != ''){
            $this->db->where("date_format(q_date,'%Y-%m-%d')  >=", $this->data['start_date']);
        }
        if ($this->data['end_date'] != ''){
            $this->db->where("date_format(q_date,'%Y-%m-%d')  <=", $this->data['end_date']);
        }
        if ($this->data['is_answer'] != ""){
            $this->db->where("answer_yn", $this->data['is_answer']);
        }
        $this->db->where("del_flag", "N");

        $this->db->select('idx');
        $this->db->from('t_eng_qna');
        $this->total = $this->db->count_all_results();

        return  $this->total;

    }

    function selectEngQna(){
        if ($this->data['page'] == 1 || $this->data['page'] < 0) {
            $this->offset = 0;
        } else {
            $this->offset = $this->data['size'] * ($this->data['page'] - 1);
        }

        $this->limit  = $this->data['size'];

        if ($this->data['search_field'] == "name"){
            $where = sprintf("(firstname like '%s' or lastname like '%s')", "%".$this->data['search_string']."%", "%".$this->data['search_string']."%");
            $this->db->where($where);
        } else if ($this->data['search_field'] != ""){
            $this->db->like($this->data['search_field'] , $this->data['search_string']);
        } else {
            $where = sprintf("(firstname like '%s' or lastname like '%s' or title like '%s' or content like '%s')", "%".$this->data['search_string']."%", "%".$this->data['search_string']."%", "%".$this->data['search_string']."%", "%".$this->data['search_string']."%");
            $this->db->where($where);
        }
        
        if ($this->data['start_date'] != ''){
            $this->db->where("date_format(q_date,'%Y-%m-%d')  >=", $this->data['start_date']);
        }
        if ($this->data['end_date'] != ''){
            $this->db->where("date_format(q_date,'%Y-%m-%d')  <=", $this->data['end_date']);
        }
        if ($this->data['is_answer'] != ""){
            $this->db->where("answer_yn", $this->data['is_answer']);
        }

        $this->db->where("del_flag", "N");

        $this->db->order_by('idx desc');
        $query = $this->db->get('t_eng_qna', $this->limit , $this->offset );
        return $this->result_array = $query->result_array();
    }

    function selectEngQnaOne($idx){

        $this->db->where('idx', $idx);

        $query  = $this->db->get('t_eng_qna');
        return $result  = $query->row();
    }

    function selectTeam(){
        $this->db->order_by("SORT asc");
        $query  = $this->db->get("t_team");
        return $this->result_array  = $query->result_array();
    }

    function updateProcess($data, $idx){
        $this->db->where("idx", $idx);
        return $this->db->update("t_eng_qna", $data);
    }
}
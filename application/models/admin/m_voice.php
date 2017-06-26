<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2016-05-11
 * Time: 오후 7:25
 */

class M_voice extends CI_Model{
    function __construct() {
        parent::__construct();
        $this->limit        = 20;
        $this->offset       = 0;

        $this->total        = 0;
        $this->result_array = array();
        $this->result       = FALSE;
        $this->result_msg   = "실패";
    }


    function selectVoiceCount(){
        if ($this->data['search_field'] != ""){
            $this->db->like($this->data['search_field'] , $this->data['search_string']);
        } else {
            $where = sprintf("(UID like '%s' or TITLE like '%s' or CONTENTS like '%s')", "%".$this->data['search_string']."%", "%".$this->data['search_string']."%", "%".$this->data['search_string']."%");
            $this->db->where($where);
        }

        if ($this->data['start_date'] != ''){
            $this->db->where("date_format(REGDATE,'%Y-%m-%d')  >=", $this->data['start_date']);
        }
        if ($this->data['end_date'] != ''){
            $this->db->where("date_format(REGDATE,'%Y-%m-%d')  <=", $this->data['end_date']);
        }
        if ($this->data['is_answer'] != ""){
            $this->db->where("ANS_YN", $this->data['is_answer']);
        }

        $this->db->select('IDX');
        $this->db->from('t_voice');
        $this->total = $this->db->count_all_results();

        return  $this->total;

    }

    function selectVoice(){
        if ($this->data['page'] == 1 || $this->data['page'] < 0) {
            $this->offset = 0;
        } else {
            $this->offset = $this->data['size'] * ($this->data['page'] - 1);
        }

        $this->limit  = $this->data['size'];

        if ($this->data['search_field'] != ""){
            $this->db->like($this->data['search_field'] , $this->data['search_string']);
        } else {
            $where = sprintf("(UID like '%s' or TITLE like '%s' or CONTENTS like '%s')", "%".$this->data['search_string']."%", "%".$this->data['search_string']."%", "%".$this->data['search_string']."%");
            $this->db->where($where);
        }

        if ($this->data['start_date'] != ''){
            $this->db->where("date_format(REGDATE,'%Y-%m-%d')  >=", $this->data['start_date']);
        }
        if ($this->data['end_date'] != ''){
            $this->db->where("date_format(REGDATE,'%Y-%m-%d')  <=", $this->data['end_date']);
        }
        if ($this->data['is_answer'] != ""){
            $this->db->where("ANS_YN", $this->data['is_answer']);
        }

        $this->db->order_by('IDX desc');
        $query = $this->db->get('t_voice', $this->limit , $this->offset );
        return $this->result_array = $query->result_array();
    }

    function selectVoiceOne($idx){

        $this->db->where('IDX', $idx);

        $query  = $this->db->get('t_voice');
        return $result  = $query->row();
    }

    function selectAnsChoice(){
        $this->db->order_by("SORD asc");
        $query  = $this->db->get("t_voice_ans");
        return $this->result_array  = $query->result_array();
    }

    function updateProcess($data, $IDX){
        $this->db->where("IDX", $IDX);
        return $this->db->update("t_voice", $data);
    }

    function deleteProcess($IDX){
        $this->db->where("IDX", $IDX);
        return $this->db->delete("t_voice");
    }

    function selectAnswer($seq){
        $this->db->where("SEQ", $seq);
        $query  = $this->db->get("t_voice_ans");
        return $this->result    = $query->row();
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-05-10
 * Time: 오후 4:51
 */

class M_thesis extends CI_Model{
    function __construct() {
        parent::__construct();
        $this->limit        = 20;
        $this->offset       = 0;

        $this->total        = 0;
        $this->result_array = array();
        $this->result       = FALSE;
        $this->result_msg   = "실패";
    }

    function selectThesisCount(){
        if ($this->data['search_field'] != ""){
            $this->db->like($this->data['search_field'] , $this->data['search_string']);
        } else {
            $where = sprintf("(title like '%s' or writer like '%s' or content like '%s')", "%".$this->data['search_string']."%", "%".$this->data['search_string']."%", "%".$this->data['search_string']."%");
            $this->db->where($where);
        }

        if ($this->data['start_date'] != ''){
            $this->db->where("date_format(regDate,'%Y-%m-%d')  >=", $this->data['start_date']);
        }
        if ($this->data['end_date'] != ''){
            $this->db->where("date_format(regDate,'%Y-%m-%d')  <=", $this->data['end_date']);
        }
        if ($this->data['is_exps'] != ""){
            $this->db->where("states", $this->data['is_exps']);
        }

        $this->db->select('idx');
        $this->db->from('t_thesis_info');
        $this->total = $this->db->count_all_results();
        return  $this->total;
    }

    function selectThesis(){
        if ($this->data['page'] == 1 || $this->data['page'] < 0) {
            $this->offset = 0;
        } else {
            $this->offset = $this->data['size'] * ($this->data['page'] - 1);
        }

        $this->limit  = $this->data['size'];

        if ($this->data['search_field'] != ""){
            $this->db->like($this->data['search_field'] , $this->data['search_string']);
        } else {
            $where = sprintf("(title like '%s' or writer like '%s' or content like '%s')", "%".$this->data['search_string']."%", "%".$this->data['search_string']."%", "%".$this->data['search_string']."%");
            $this->db->where($where);
        }

        if ($this->data['start_date'] != ''){
            $this->db->where("date_format(regDate,'%Y-%m-%d')  >=", $this->data['start_date']);
        }
        if ($this->data['end_date'] != ''){
            $this->db->where("date_format(regDate,'%Y-%m-%d')  <=", $this->data['end_date']);
        }
        if ($this->data['is_exps'] != ""){
            $this->db->where("states", $this->data['is_exps']);
        }

        $this->db->order_by('idx desc');
        $query = $this->db->get('t_thesis_info', $this->limit , $this->offset );
        return $this->result_array = $query->result_array();
    }

    function selectThesisOne($idx){

        $this->db->where('idx', $idx);

        $query  = $this->db->get('t_thesis_info');
        return $result  = $query->row();
    }

    function insertProcess($data){
        return $this->db->insert("t_thesis_info", $data);
    }

    function updateProcess($data, $idx){
        $this->db->where("idx", $idx);
        return $this->db->update("t_thesis_info", $data);
    }

    function deleteProcess($idx){
        $this->db->where("idx", $idx);
        return $this->db->delete("t_thesis_info");
    }
}
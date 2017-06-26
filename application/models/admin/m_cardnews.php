<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-05-10
 * Time: 오후 4:51
 */

class M_cardnews extends CI_Model{
    function __construct() {
        parent::__construct();
        $this->limit        = 20;
        $this->offset       = 0;

        $this->total        = 0;
        $this->result_array = array();
        $this->result       = FALSE;
        $this->result_msg   = "실패";
    }

    function selectCardnewsCount(){
        if ($this->data['search_field'] != ""){
            $this->db->like($this->data['search_field'] , $this->data['search_string']);
        } else {
            $where = sprintf("(BC_TTL like '%s' or BC_CONT like '%s')", "%".$this->data['search_string']."%", "%".$this->data['search_string']."%");
            $this->db->where($where);
        }

        if ($this->data['start_date'] != ''){
            $this->db->where("date_format(BC_RGST_YMDT,'%Y-%m-%d')  >=", $this->data['start_date']);
        }
        if ($this->data['end_date'] != ''){
            $this->db->where("date_format(BC_RGST_YMDT,'%Y-%m-%d')  <=", $this->data['end_date']);
        }
        if ($this->data['is_exps'] != ""){
            $this->db->where("BC_EXPS_YN", $this->data['is_exps']);
        }

        $this->db->select('BC_SEQ');
        $this->db->from('t_cardnews');
        $this->total = $this->db->count_all_results();
        return  $this->total;
    }

    function selectCardnews(){
        if ($this->data['page'] == 1 || $this->data['page'] < 0) {
            $this->offset = 0;
        } else {
            $this->offset = $this->data['size'] * ($this->data['page'] - 1);
        }

        $this->limit  = $this->data['size'];

        if ($this->data['search_field'] != ""){
            $this->db->like($this->data['search_field'] , $this->data['search_string']);
        } else {
            $where = sprintf("(BC_TTL like '%s' or BC_CONT like '%s')", "%".$this->data['search_string']."%", "%".$this->data['search_string']."%");
            $this->db->where($where);
        }

        if ($this->data['start_date'] != ''){
            $this->db->where("date_format(BC_RGST_YMDT,'%Y-%m-%d')  >=", $this->data['start_date']);
        }
        if ($this->data['end_date'] != ''){
            $this->db->where("date_format(BC_RGST_YMDT,'%Y-%m-%d')  <=", $this->data['end_date']);
        }
        if ($this->data['is_exps'] != ""){
            $this->db->where("BC_EXPS_YN", $this->data['is_exps']);
        }

        $this->db->order_by('BC_SEQ desc');
        $query = $this->db->get('t_cardnews', $this->limit , $this->offset );
        return $this->result_array = $query->result_array();
    }

    function selectCardnewsOne($BC_SEQ){

        $this->db->where('BC_SEQ', $BC_SEQ);

        $query  = $this->db->get('t_cardnews');
        return $result  = $query->row();
    }

    function insertProcess($data){
        return $this->db->insert("t_cardnews", $data);
    }

    function updateProcess($data, $BC_SEQ){
        $this->db->where("BC_SEQ", $BC_SEQ);
        return $this->db->update("t_cardnews", $data);
    }

    function deleteProcess($BC_SEQ){
        $this->db->where("BC_SEQ", $BC_SEQ);
        return $this->db->delete("t_cardnews");
    }
}
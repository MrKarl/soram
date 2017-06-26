<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-05-10
 * Time: 오후 4:51
 */

class M_faq extends CI_Model{
    function __construct() {
        parent::__construct();
        $this->limit        = 20;
        $this->offset       = 0;

        $this->total        = 0;
        $this->result_array = array();
        $this->result       = FALSE;
        $this->result_msg   = "실패";
    }

    function selectFaqCount(){
        if ($this->data['search_field'] != ""){
            $this->db->like($this->data['search_field'] , $this->data['search_string']);
        } else {
            $where = sprintf("(FAQ_TTL like '%s' or FAQ_CONT like '%s')", "%".$this->data['search_string']."%", "%".$this->data['search_string']."%");
            $this->db->where($where);
        }

        if ($this->data['start_date'] != ''){
            $this->db->where("date_format(FAQ_RGST_YMDT,'%Y-%m-%d')  >=", $this->data['start_date']);
        }
        if ($this->data['end_date'] != ''){
            $this->db->where("date_format(FAQ_RGST_YMDT,'%Y-%m-%d')  <=", $this->data['end_date']);
        }
        if ($this->data['is_exps'] != ""){
            $this->db->where("FAQ_EXPS_YN", $this->data['is_exps']);
        }
        if ($this->data['is_category'] != ""){
            $this->db->where("FAQ_TP", $this->data['is_category']);
        }
        
        $this->db->select('FAQ_SEQ');
        $this->db->from('t_faq');
        $this->total = $this->db->count_all_results();
        return  $this->total;
    }

    function selectFaq(){
        if ($this->data['page'] == 1 || $this->data['page'] < 0) {
            $this->offset = 0;
        } else {
            $this->offset = $this->data['size'] * ($this->data['page'] - 1);
        }

        $this->limit  = $this->data['size'];
        $this->db->select('f.FAQ_SEQ, c.CC_NM as category, f.FAQ_TTL, f.FAQ_EXPS_YN, f.FAQ_RGST_YMDT');

        if ($this->data['search_field'] != ""){
            $this->db->like($this->data['search_field'] , $this->data['search_string']);
        } else {
            $where = sprintf("(FAQ_TTL like '%s' or FAQ_CONT like '%s')", "%".$this->data['search_string']."%", "%".$this->data['search_string']."%");
            $this->db->where($where);
        }

        if ($this->data['start_date'] != ''){
            $this->db->where("date_format(FAQ_RGST_YMDT,'%Y-%m-%d')  >=", $this->data['start_date']);
        }
        if ($this->data['end_date'] != ''){
            $this->db->where("date_format(FAQ_RGST_YMDT,'%Y-%m-%d')  <=", $this->data['end_date']);
        }
        if ($this->data['is_exps'] != ""){
            $this->db->where("FAQ_EXPS_YN", $this->data['is_exps']);
        }
        if ($this->data['is_category'] != ""){
            $this->db->where("FAQ_TP", $this->data['is_category']);
        }

        $this->db->join('t_comm_cd c', 'c.CC_CD = f.FAQ_TP', 'left');
        $this->db->order_by('FAQ_SEQ desc');
        $query = $this->db->get('t_faq f', $this->limit , $this->offset );
        return $this->result_array = $query->result_array();
    }

    function selectFaqOne($FAQ_SEQ){

        $this->db->where('FAQ_SEQ', $FAQ_SEQ);

        $query  = $this->db->get('t_faq');
        return $result  = $query->row();
    }

    function selectCategory($CC_CD){
        $this->db->like('CC_CD', $CC_CD, 'after');
        $this->db->where('CC_USE_YN', 'Y');
        $query  = $this->db->get('t_comm_cd');
        return $this->result_array  = $query->result_array();
    }

    function insertProcess($data){
        return $this->db->insert("t_faq", $data);
    }

    function updateProcess($data, $FAQ_SEQ){
        $this->db->where("FAQ_SEQ", $FAQ_SEQ);
        return $this->db->update("t_faq", $data);
    }

    function deleteProcess($FAQ_SEQ){
        $this->db->where("FAQ_SEQ", $FAQ_SEQ);
        return $this->db->delete("t_faq");
    }
}
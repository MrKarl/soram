<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-05-10
 * Time: 오후 4:51
 */

class M_popup extends CI_Model{
    function __construct() {
        parent::__construct();
        $this->limit        = 20;
        $this->offset       = 0;

        $this->total        = 0;
        $this->result_array = array();
        $this->result       = FALSE;
        $this->result_msg   = "실패";
    }

    function selectPopupCount(){
        if ($this->data['search_field'] != ""){
            $this->db->like($this->data['search_field'] , $this->data['search_string']);
        } else {
            $where = sprintf("(PP_TTL like '%s' or PP_CONT like '%s')", "%".$this->data['search_string']."%", "%".$this->data['search_string']."%");
            $this->db->where($where);
        }
        
        if ($this->data['start_date'] != ''){
            $this->db->where("date_format(PP_RGST_YMDT,'%Y-%m-%d')  >=", $this->data['start_date']);
        }
        if ($this->data['end_date'] != ''){
            $this->db->where("date_format(PP_RGST_YMDT,'%Y-%m-%d')  <=", $this->data['end_date']);
        }
        if ($this->data['is_exps'] != ""){
            $this->db->where("PP_EXPS_YN", $this->data['is_exps']);
        }
        
        $this->db->select('PP_SEQ');
        $this->db->from('t_popup');
        $this->total = $this->db->count_all_results();
        return  $this->total;
    }

    function selectPopup(){
        if ($this->data['page'] == 1 || $this->data['page'] < 0) {
            $this->offset = 0;
        } else {
            $this->offset = $this->data['size'] * ($this->data['page'] - 1);
        }

        $this->limit  = $this->data['size'];

        if ($this->data['search_field'] != ""){
            $this->db->like($this->data['search_field'] , $this->data['search_string']);
        } else {
            $where = sprintf("(PP_TTL like '%s' or PP_CONT like '%s')", "%".$this->data['search_string']."%", "%".$this->data['search_string']."%");
            $this->db->where($where);
        }
        
        if ($this->data['start_date'] != ''){
            $this->db->where("date_format(PP_RGST_YMDT,'%Y-%m-%d')  >=", $this->data['start_date']);
        }
        if ($this->data['end_date'] != ''){
            $this->db->where("date_format(PP_RGST_YMDT,'%Y-%m-%d')  <=", $this->data['end_date']);
        }
        if ($this->data['is_exps'] != ""){
            $this->db->where("PP_EXPS_YN", $this->data['is_exps']);
        }

        $this->db->order_by('PP_SEQ desc');
        $query = $this->db->get('t_popup', $this->limit , $this->offset );
        return $this->result_array = $query->result_array();
    }

    function selectPopupOne($PP_SEQ){

        $this->db->where('PP_SEQ', $PP_SEQ);

        $query  = $this->db->get('t_popup');
        return $result  = $query->row();
    }

    function selectCategory($CC_CD){
        $this->db->like('CC_CD', $CC_CD, 'after');
        $this->db->where('CC_USE_YN', 'Y');
        $query  = $this->db->get('t_comm_cd');
        return $this->result_array  = $query->result_array();
    }

    function insertProcess($data){
        return $this->db->insert("t_popup", $data);
    }

    function updateProcess($data, $PP_SEQ){
        $this->db->where("PP_SEQ", $PP_SEQ);
        return $this->db->update("t_popup", $data);
    }

    function deleteProcess($PP_SEQ){
        $this->db->where("PP_SEQ", $PP_SEQ);
        return $this->db->delete("t_popup");
    }
}
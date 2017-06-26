<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-05-10
 * Time: 오후 4:51
 */

class M_book extends CI_Model{
    function __construct() {
        parent::__construct();
        $this->limit        = 20;
        $this->offset       = 0;

        $this->total        = 0;
        $this->result_array = array();
        $this->result       = FALSE;
        $this->result_msg   = "실패";
    }

    function selectBookApplyCount(){
        if ($this->data['search_field'] != ""){
            $this->db->like($this->data['search_field'] , $this->data['search_string']);
        } else {
            $where = sprintf("(CL_NM like '%s' or CL_CONT like '%s' or CL_CPH like '%s')", "%".$this->data['search_string']."%", "%".$this->data['search_string']."%", "%".$this->data['search_string']."%");
            $this->db->where($where);
        }

        if ($this->data['start_date'] != ''){
            $this->db->where("date_format(CL_RGST_YMDT,'%Y-%m-%d')  >=", $this->data['start_date']);
        }
        if ($this->data['end_date'] != ''){
            $this->db->where("date_format(CL_RGST_YMDT,'%Y-%m-%d')  <=", $this->data['end_date']);
        }
        if ($this->data['is_exps'] != ""){
            $this->db->where("CL_ANS_YN", $this->data['is_exps']);
        }

        $this->db->where("CL_DEL_FLAG", "N");
        $this->db->select('CL_SEQ');
        $this->db->from('t_cnsl2');
        $this->total = $this->db->count_all_results();
        return  $this->total;
    }

    function selectBookApply(){
        if ($this->data['page'] == 1 || $this->data['page'] < 0) {
            $this->offset = 0;
        } else {
            $this->offset = $this->data['size'] * ($this->data['page'] - 1);
        }

        $this->limit  = $this->data['size'];

        if ($this->data['search_field'] != ""){
            $this->db->like($this->data['search_field'] , $this->data['search_string']);
        } else {
            $where = sprintf("(CL_NM like '%s' or CL_CONT like '%s' or CL_CPH like '%s')", "%".$this->data['search_string']."%", "%".$this->data['search_string']."%", "%".$this->data['search_string']."%");
            $this->db->where($where);
        }

        if ($this->data['start_date'] != ''){
            $this->db->where("date_format(CL_RGST_YMDT,'%Y-%m-%d')  >=", $this->data['start_date']);
        }
        if ($this->data['end_date'] != ''){
            $this->db->where("date_format(CL_RGST_YMDT,'%Y-%m-%d')  <=", $this->data['end_date']);
        }
        if ($this->data['is_exps'] != ""){
            $this->db->where("CL_ANS_YN", $this->data['is_exps']);
        }

        $this->db->where("CL_DEL_FLAG", "N");
        $this->db->order_by('CL_SEQ desc');
        $query = $this->db->get('t_cnsl2 t', $this->limit , $this->offset );
        return $this->result_array = $query->result_array();
    }

    function selectBookApplyOne($CL_SEQ){

        $this->db->where('CL_SEQ', $CL_SEQ);

        $query  = $this->db->get('t_cnsl2');
        return $result  = $query->row();
    }

    function selectCategory($CC_CD){
        $this->db->like('CC_CD', $CC_CD, 'after');
        $this->db->where('CC_USE_YN', 'Y');
        $query  = $this->db->get('t_comm_cd');
        return $this->result_array  = $query->result_array();
    }

    function insertProcess($data){
        return $this->db->insert("t_cnsl2", $data);
    }

    function updateProcess($data, $CL_SEQ){
        $this->db->where("CL_SEQ", $CL_SEQ);
        return $this->db->update("t_cnsl2", $data);
    }
}
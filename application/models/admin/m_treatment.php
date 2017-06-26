<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-05-10
 * Time: 오후 4:51
 */

class M_treatment extends CI_Model{
    function __construct() {
        parent::__construct();
        $this->limit        = 20;
        $this->offset       = 0;

        $this->total        = 0;
        $this->result_array = array();
        $this->result       = FALSE;
        $this->result_msg   = "실패";
    }

    function selectTreatmentCount(){
        if ($this->data['search_field'] != ""){
            $this->db->like($this->data['search_field'] , $this->data['search_string']);
        } else {
            $where = sprintf("(TT_TTL like '%s' or TT_NM like '%s')", "%".$this->data['search_string']."%", "%".$this->data['search_string']."%");
            $this->db->where($where);
        }

        if ($this->data['start_date'] != ''){
            $this->db->where("date_format(TT_RGST_YMDT,'%Y-%m-%d')  >=", $this->data['start_date']);
        }
        if ($this->data['end_date'] != ''){
            $this->db->where("date_format(TT_RGST_YMDT,'%Y-%m-%d')  <=", $this->data['end_date']);
        }

        if ($this->data['is_exps'] != ""){
            $this->db->where("TT_EXPS_YN", $this->data['is_exps']);
        }
        $this->db->select('TT_SEQ');
        $this->db->from('t_trtmt_new');
        $this->total = $this->db->count_all_results();

        return  $this->total;

    }

    function selectTreatment(){
        if ($this->data['page'] == 1 || $this->data['page'] < 0) {
            $this->offset = 0;
        } else {
            $this->offset = $this->data['size'] * ($this->data['page'] - 1);
        }

        $this->limit  = $this->data['size'];

        if ($this->data['search_field'] != ""){
            $this->db->like($this->data['search_field'] , $this->data['search_string']);
        } else {
            $where = sprintf("(TT_TTL like '%s' or TT_NM like '%s')", "%".$this->data['search_string']."%", "%".$this->data['search_string']."%");
            $this->db->where($where);
        }
        
        if ($this->data['start_date'] != ''){
            $this->db->where("date_format(TT_RGST_YMDT,'%Y-%m-%d')  >=", $this->data['start_date']);
        }
        if ($this->data['end_date'] != ''){
            $this->db->where("date_format(TT_RGST_YMDT,'%Y-%m-%d')  <=", $this->data['end_date']);
        }
        if ($this->data['is_exps'] != ""){
            $this->db->where("TT_EXPS_YN", $this->data['is_exps']);
        }

        $this->db->select('c.TT_SEQ, c.TT_CNR_TP, c.TT_TTL, c.TT_NM, IF(c.TT_VOD_MP4 != "", 1, 0) as is_vod, c.TT_MAIN_EXPS_YN, c.TT_EXPS_YN, c.TT_READ_CNT, c.TT_RGST_YMDT, t.CC_CD, t.CC_NM',false);

        $this->db->join('t_comm_cd t', 't.CC_CD = c.TT_CNR_TP', 'left');
//        $this->db->order_by('is_vod desc, c.TT_SEQ desc');
        $this->db->order_by('c.TT_RGST_YMDT desc, c.TT_SEQ desc');
        $query = $this->db->get('t_trtmt_new c', $this->limit , $this->offset );
        return $this->result_array = $query->result_array();
    }

    function selectTreatmentOne($TT_SEQ){

        $this->db->where('TT_SEQ', $TT_SEQ);

        $query  = $this->db->get('t_trtmt_new');
        return $result  = $query->row();
    }

    function insertProcess($data){
        return $this->db->insert("t_trtmt_new", $data);
    }

    function updateProcess($data, $TT_SEQ){
        $this->db->where("TT_SEQ", $TT_SEQ);
        return $this->db->update("t_trtmt_new", $data);
    }

    function deleteProcess($TT_SEQ){
        $this->db->where("TT_SEQ", $TT_SEQ);
        return $this->db->delete("t_trtmt_new");
    }

    function selectCategory($CC_CD){
        $this->db->like('CC_CD', $CC_CD, 'after');
        $this->db->where('CC_USE_YN', 'Y');
        $query  = $this->db->get('t_comm_cd');
        return $this->result_array  = $query->result_array();
    }
}
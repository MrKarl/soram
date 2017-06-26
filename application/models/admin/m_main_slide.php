<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-05-10
 * Time: 오후 4:51
 */

class M_main_slide extends CI_Model{
    function __construct() {
        parent::__construct();
        $this->limit        = 20;
        $this->offset       = 0;

        $this->total        = 0;
        $this->result_array = array();
        $this->result       = FALSE;
        $this->result_msg   = "실패";
    }

    function selectMainSlideCount(){
        if ($this->data['search_field'] != ""){
            $this->db->like($this->data['search_field'] , $this->data['search_string']);
        } else {
            $where = sprintf("(MI_TTL like '%s' or MI_NM like '%s')", "%".$this->data['search_string']."%", "%".$this->data['search_string']."%");
            $this->db->where($where);
        }

        if ($this->data['start_date'] != ''){
            $this->db->where("date_format(MI_RGST_YMDT,'%Y-%m-%d')  >=", $this->data['start_date']);
        }
        if ($this->data['end_date'] != ''){
            $this->db->where("date_format(MI_RGST_YMDT,'%Y-%m-%d')  <=", $this->data['end_date']);
        }
        if ($this->data['is_exps'] != ""){
            $this->db->where("MI_EXPS_YN", $this->data['is_exps']);
        }

        $this->db->select('MI_SEQ');
        $this->db->from('t_mbnr');
        $this->total = $this->db->count_all_results();
        return  $this->total;
    }

    function selectMainSlide(){
        if ($this->data['page'] == 1 || $this->data['page'] < 0) {
            $this->offset = 0;
        } else {
            $this->offset = $this->data['size'] * ($this->data['page'] - 1);
        }

        $this->limit  = $this->data['size'];

        if ($this->data['search_field'] != ""){
            $this->db->like($this->data['search_field'] , $this->data['search_string']);
        } else {
            $where = sprintf("(MI_TTL like '%s' or MI_NM like '%s')", "%".$this->data['search_string']."%", "%".$this->data['search_string']."%");
            $this->db->where($where);
        }

        if ($this->data['start_date'] != ''){
            $this->db->where("date_format(MI_RGST_YMDT,'%Y-%m-%d')  >=", $this->data['start_date']);
        }
        if ($this->data['end_date'] != ''){
            $this->db->where("date_format(MI_RGST_YMDT,'%Y-%m-%d')  <=", $this->data['end_date']);
        }
        if ($this->data['is_exps'] != ""){
            $this->db->where("MI_EXPS_YN", $this->data['is_exps']);
        }

        $this->db->join('t_comm_cd t', 't.CC_CD = c.MI_CNR_TP', 'left');
        $this->db->order_by('MI_SEQ desc');
        $query = $this->db->get('t_mbnr c', $this->limit , $this->offset );
        return $this->result_array = $query->result_array();
    }

    function selectMainSlideOne($MI_SEQ){

        $this->db->where('MI_SEQ', $MI_SEQ);

        $query  = $this->db->get('t_mbnr');
        return $result  = $query->row();
    }

    function selectCategory($CC_CD){
        $this->db->like('CC_CD', $CC_CD, 'after');
        $this->db->where('CC_USE_YN', 'Y');
        $query  = $this->db->get('t_comm_cd');
        return $this->result_array  = $query->result_array();
    }

    function selectEtcCategory($CCC_CD){
        $this->db->like('CCC_CD', $CCC_CD, 'after');
        $this->db->where('CCC_USE_YN', 'Y');
        $query  = $this->db->get('t_comm_cat_cd');
        return $this->result_array  = $query->result_array();
    }


    function selectTeam(){
        $this->db->order_by("SORT asc");
        $query  = $this->db->get("t_team");
        return $this->result_array  = $query->result_array();
    }

    function selectHighSort(){
        $this->db->select('count(MI_SEQ) as high', false);
        $query  = $this->db->get('t_mbnr');
        return $this->result    = $query->row();
    }

    function insertProcess($data){
        return $this->db->insert("t_mbnr", $data);
    }

    function updateProcess($data, $MI_SEQ){
        $this->db->where("MI_SEQ", $MI_SEQ);
        return $this->db->update("t_mbnr", $data);
    }

    function deleteProcess($MI_SEQ){
        $this->db->where("MI_SEQ", $MI_SEQ);
        return $this->db->delete("t_mbnr");
    }

    function selectMainSlideAll(){
        $this->db->join('t_comm_cd t', 't.CC_CD = c.MI_CNR_TP', 'left');
        $this->db->order_by('c.MI_SORT asc');
        $query  = $this->db->get('t_mbnr c');
        return $this->result_array  = $query->result_array();
    }

    function updateSort($MI_SORT, $MI_SEQ){
        $this->db->set('MI_SORT', $MI_SORT);
        $this->db->where('MI_SEQ', $MI_SEQ);
        return $this->db->update('t_mbnr');
    }


}
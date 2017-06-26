<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-05-10
 * Time: 오후 4:51
 */

class M_staff extends CI_Model{
    function __construct() {
        parent::__construct();
        $this->limit        = 20;
        $this->offset       = 0;

        $this->total        = 0;
        $this->result_array = array();
        $this->result       = FALSE;
        $this->result_msg   = "실패";
    }

    function selectStaffCount(){
        if ($this->data['search_field'] != ""){
            $this->db->like($this->data['search_field'] , $this->data['search_string']);
        } else {
            $where = sprintf("(STF_NM like '%s' or STF_JOB like '%s')", "%".$this->data['search_string']."%", "%".$this->data['search_string']."%");
            $this->db->where($where);
        }

        if ($this->data['start_date'] != ''){
            $this->db->where("date_format(STF_RGST_YMDT,'%Y-%m-%d')  >=", $this->data['start_date']);
        }
        if ($this->data['end_date'] != ''){
            $this->db->where("date_format(STF_RGST_YMDT,'%Y-%m-%d')  <=", $this->data['end_date']);
        }

        if ($this->data['is_exps'] != ""){
            $this->db->where("STF_EXPS_YN", $this->data['is_exps']);
        }

        $this->db->select('STF_SEQ');
        $this->db->from('t_stf');
        $this->total = $this->db->count_all_results();

        return  $this->total;

    }

    function selectStaff(){
        if ($this->data['page'] == 1 || $this->data['page'] < 0) {
            $this->offset = 0;
        } else {
            $this->offset = $this->data['size'] * ($this->data['page'] - 1);
        }

        $this->limit  = $this->data['size'];

        if ($this->data['search_field'] != ""){
            $this->db->like($this->data['search_field'] , $this->data['search_string']);
        } else {
            $where = sprintf("(STF_NM like '%s' or STF_JOB like '%s')", "%".$this->data['search_string']."%", "%".$this->data['search_string']."%");
            $this->db->where($where);
        }

        if ($this->data['start_date'] != ''){
            $this->db->where("date_format(STF_RGST_YMDT,'%Y-%m-%d')  >=", $this->data['start_date']);
        }
        if ($this->data['end_date'] != ''){
            $this->db->where("date_format(STF_RGST_YMDT,'%Y-%m-%d')  <=", $this->data['end_date']);
        }
        if ($this->data['is_exps'] != ""){
            $this->db->where("STF_EXPS_YN", $this->data['is_exps']);
        }
        
        $this->db->join('t_comm_cd t', 't.CC_CD = c.STF_TYPE', 'left');
        $this->db->order_by('STF_SEQ desc');
        $query = $this->db->get('t_stf c', $this->limit , $this->offset );
        return $this->result_array = $query->result_array();
    }

    function selectStaffOne($STF_SEQ){

        $this->db->where('STF_SEQ', $STF_SEQ);

        $query  = $this->db->get('t_stf');
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
        $this->db->select('count(STF_SEQ) as high', false);
        $query  = $this->db->get('t_stf');
        return $this->result    = $query->row();
    }

    function insertProcess($data){
        return $this->db->insert("t_stf", $data);
    }

    function updateProcess($data, $STF_SEQ){
        $this->db->where("STF_SEQ", $STF_SEQ);
        return $this->db->update("t_stf", $data);
    }

    function deleteProcess($STF_SEQ){
        $this->db->where("STF_SEQ", $STF_SEQ);
        return $this->db->delete("t_stf");
    }

    function selectStaffAll(){
        $this->db->join('t_comm_cd t', 't.CC_CD = c.STF_TYPE', 'left');
        $this->db->order_by('c.STF_SORT asc');
        $query  = $this->db->get('t_stf c');
        return $this->result_array  = $query->result_array();
    }

    function updateSort($STF_SORT, $STF_SEQ){
        $this->db->set('STF_SORT', $STF_SORT);
        $this->db->where('STF_SEQ', $STF_SEQ);
        return $this->db->update('t_stf');
    }

    function selectBook($type){
        $this->db->where('BK_TYPE', $type);
        $query  = $this->db->get('t_book');
        return $this->result_array = $query->result_array();
    }

    function selectLetter($type){
        $this->db->where('LT_TYPE', $type);
        $query  = $this->db->get('t_letter');
        return $this->result_array = $query->result_array();
    }
    
    function insertEtcProcess($data, $table_name){
        return $this->db->insert($table_name, $data);
    }
    
    function updateEtcProcess($data, $SEQ, $type, $table_name){
        $this->db->where($type , $SEQ);
        return $this->db->update($table_name, $data);
    }
    
    function deleteEtcProcess($SEQ, $type, $t_type){
        if($t_type == "t_book"){
            $this->db->where("BK_SEQ" , $SEQ);
            $this->db->where("BK_TYPE" , $type);
        }elseif($t_type == "t_letter"){
            $this->db->where("LT_SEQ", $SEQ);
            $this->db->where("LT_TYPE" , $type);
        }
        
        return $this->db->delete($t_type);
    }

    function selectCode(){
        $this->db->like('CC_CD', 'FA', 'after');
        $this->db->order_by('CC_CD asc');
        $query  = $this->db->get('t_comm_cd');
        return $this->result_array  = $query->result_array();
    }

    function selectEtcCode(){
        $this->db->like('CCC_CD', 'FA', 'after');
        $this->db->order_by('CCC_CD asc');
        $query  = $this->db->get('t_comm_cat_cd');
        return $this->result_array  = $query->result_array();
    }

    function insertCode($data){
        return $this->result = $this->db->insert('t_comm_cd', $data);
    }

    function updateCode($data, $idx){
        $this->db->where('CC_CD', $idx);
        return $this->db->update('t_comm_cd', $data);
    }

    function deleteCode($idx){
        $this->db->where('CC_CD', $idx);
        return $this->db->delete('t_comm_cd');
    }
    
}
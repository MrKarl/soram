<?php
/**
 * Created by PhpStorm.
 * User: AdmiRTstrator
 * Date: 2016-05-10
 * Time: 오후 4:51
 */

class M_news2 extends CI_Model{
    function __construct() {
        parent::__construct();
        $this->limit        = 20;
        $this->offset       = 0;

        $this->total        = 0;
        $this->result_array = array();
        $this->result       = FALSE;
        $this->result_msg   = "실패";
    }

    function selectNews2Count(){
        if ($this->data['search_field'] != ""){
            $this->db->like($this->data['search_field'] , $this->data['search_string']);
        } else {
            $where = sprintf("(RT_TTL like '%s' or RT_CONT like '%s')", "%".$this->data['search_string']."%", "%".$this->data['search_string']."%");
            $this->db->where($where);
        }

        if ($this->data['start_date'] != ''){
            $this->db->where("date_format(RT_RGST_YMDT,'%Y-%m-%d')  >=", $this->data['start_date']);
        }
        if ($this->data['end_date'] != ''){
            $this->db->where("date_format(RT_RGST_YMDT,'%Y-%m-%d')  <=", $this->data['end_date']);
        }
        if ($this->data['is_exps'] != ""){
            $this->db->where("RT_EXPS_YN", $this->data['is_exps']);
        }

        $this->db->select('RT_SEQ');
        $this->db->from('t_rprt');
        $this->total = $this->db->count_all_results();
        return  $this->total;
    }

    function selectNews2(){
        if ($this->data['page'] == 1 || $this->data['page'] < 0) {
            $this->offset = 0;
        } else {
            $this->offset = $this->data['size'] * ($this->data['page'] - 1);
        }

        $this->limit  = $this->data['size'];

        if ($this->data['search_field'] != ""){
            $this->db->like($this->data['search_field'] , $this->data['search_string']);
        } else {
            $where = sprintf("(RT_TTL like '%s' or RT_CONT like '%s')", "%".$this->data['search_string']."%", "%".$this->data['search_string']."%");
            $this->db->where($where);
        }
        
        if ($this->data['start_date'] != ''){
            $this->db->where("date_format(RT_RGST_YMDT,'%Y-%m-%d')  >=", $this->data['start_date']);
        }
        if ($this->data['end_date'] != ''){
            $this->db->where("date_format(RT_RGST_YMDT,'%Y-%m-%d')  <=", $this->data['end_date']);
        }
        if ($this->data['is_exps'] != ""){
            $this->db->where("RT_EXPS_YN", $this->data['is_exps']);
        }

        $this->db->order_by('RT_SEQ desc');
        $query = $this->db->get('t_rprt', $this->limit , $this->offset );
        return $this->result_array = $query->result_array();
    }

    function selectNews2One($RT_SEQ){

        $this->db->where('RT_SEQ', $RT_SEQ);

        $query  = $this->db->get('t_rprt');
        return $result  = $query->row();
    }

    function insertProcess($data){
        return $this->db->insert("t_rprt", $data);
    }

    function updateProcess($data, $RT_SEQ){
        $this->db->where("RT_SEQ", $RT_SEQ);
        return $this->db->update("t_rprt", $data);
    }

    function deleteProcess($RT_SEQ){
        $this->db->where("RT_SEQ", $RT_SEQ);
        return $this->db->delete("t_rprt");
    }
}
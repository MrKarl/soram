<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_consult extends CI_Model {
    function __construct()
    {
        parent::__construct();
        $this->tablename="t_cnsl";
        $this->tableans="t_cnsl_ans";
        $this->tablesms="t_sms_menu";
        $this->tableteam="t_team";
    }

    function selectConsultCount($is_answer, $search_field, $search_string, $start_date, $end_date) {


        //검색 조건
        if($is_answer != ""){
            $this->db->where("CL_ANS_YN", $is_answer);
        }

        if($search_field != ""){
            $this->db->like($search_field, $search_string);
        } else {
            $where = sprintf("(CL_NM like '%s' or CL_TTL like '%s' or CL_CONT like '%s')", "%".$search_string."%", "%".$search_string."%", "%".$search_string."%");
            $this->db->where($where);
        }

        if ($start_date != ''){
            $this->db->where("date_format(CL_RGST_YMDT,'%Y-%m-%d')  >=", $start_date);
        }
        if ($end_date != ''){
            $this->db->where("date_format(CL_RGST_YMDT,'%Y-%m-%d')  <=", $end_date);
        }

        $this->db->where("CL_DEL_FLAG", $this->data['delete']);

        $this->db->select('idx');
        $this->db->from($this->tablename);
        $this->total = $this->db->count_all_results();

        return $this->total;
    }

    function selectConsult($size = 1 , $page = 1, $is_answer, $search_field, $search_string, $start_date, $end_date) {
        if ($page == 1 || $page < 0) {
            $this->offset = 0;
        } else {
            $this->offset = $size * ($page - 1);
        }
        $this->limit  = $size;

        //검색 조건
        if($is_answer != ""){
            $this->db->where("CL_ANS_YN", $is_answer);
        }

        if($search_field != ""){
            $this->db->like($search_field, $search_string);
        } else {
            $where = sprintf("(CL_NM like '%s' or CL_TTL like '%s' or CL_CONT like '%s')", "%".$search_string."%", "%".$search_string."%", "%".$search_string."%");
            $this->db->where($where);
        }
        
        if ($start_date != ''){
            $this->db->where("date_format(CL_RGST_YMDT,'%Y-%m-%d')  >=", $start_date);
        }
        if ($end_date != ''){
            $this->db->where("date_format(CL_RGST_YMDT,'%Y-%m-%d')  <=", $end_date);
        }

        $this->db->where("CL_DEL_FLAG", $this->data['delete']);
        
        $this->db->order_by('CL_SEQ desc');
        $query = $this->db->get('t_cnsl t', $this->limit , $this->offset);
        return $this->result_array = $query->result_array();
    }

    function selectConsultOne($seq){

        if ($seq != '') {
            $this->db->where('CL_SEQ', $seq);
            $this->db->select("t.*, c.CC_NM as advence, d.CC_NM as center_name");
            $this->db->order_by('CL_SEQ desc');
            $this->db->join('t_comm_cd c', 'c.CC_CD IN("KAAA%") and c.CC_SORT = t.CL_advence', 'left');
            $this->db->join('t_comm_cd d', 'd.CC_CD IN("KAAA%") and d.CC_SORT = t.CL_TARGET_TEAM_IDX', 'left');
            $query = $this->db->get('t_cnsl t');
            return $query->row();
        }

    }

    //답변 작성
    function updateProcess($data, $CL_SEQ){
        $this->db->where("CL_SEQ", $CL_SEQ);
        return $this->db->update("t_cnsl", $data);
    }


    function get_delete($CL_SEQ){
        $conn=$this->adodb->Connect();

        //$qry = "delete from ".$this->tablename." where CL_SEQ = ? ";
        $qry = "update ".$this->tablename." set cl_del_flag=? where cl_seq=?";
        $conn->Execute($qry,array("Y",$CL_SEQ));
    }

    //관리자 SMS답변 리스트
    function selectSMS(){
        $this->db->where("SM_TP" , "CAAAAAAC");
        $this->db->where("SM_EXPS_YN" , "Y");

        $this->db->order_by("SM_RGST_YMDT desc");

        $query  = $this->db->get("t_sms_menu");
        return $this->result_array  = $query->result_array();
    }


    //관리자 답변 리스트
    function selectAnswerList(){
        $this->db->order_by("CA_RGST_YMDT desc");
        $query  = $this->db->get("t_cnsl_ans");
        return $this->result_array  = $query->result_array();
    }


    //상담 진행 상황
    function selectEntryCode($entry){
        $this->db->where("entry", $entry);
        $query  = $this->db->get("entry_code");
        return $this->result_array  = $query->result_array();

    }
    
    function selectCategory($CC_CD){
        $this->db->like('CC_CD', $CC_CD, 'after');
        $query = $this->db->get('t_comm_cd');
        return $this->result_array  = $query->result_array();
    }

    //답변글 선택시
    function selectAnswer($seq){
        $this->db->where("CA_SEQ", $seq);
        $query  = $this->db->get("t_cnsl_ans");
        return $this->result    = $query->row();
    }

    function get_answer($seq){
        $conn=$this->adodb->Connect();

        $qry = "select CA_SEQ, CA_SORD, CA_TTL, CA_CONT, CA_RGST_YMDT, CA_CHC_CNT ";
        $qry = $qry."from ".$this->tableans." where CA_SEQ = ? ";

        return $conn->GetRow($qry,array($seq));
    }

    //진료팀
    function selectTeam(){
        $this->db->order_by("SORT asc");
        $query  = $this->db->get("t_team");
        return $this->result_array  = $query->result_array();
    }

}
?>

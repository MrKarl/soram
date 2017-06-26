<?php
class M_medical extends CI_Model {

    //언론보도
    function selectMediaCount() {
        $query = "select RT_SEQ from t_rprt where RT_EXPS_YN='Y' and (RT_TTL like '%".$this->data['search_string']."%' or RT_CONT like '%".$this->data['search_string']."%')";
        return $this->db->query($query)->num_rows();
    }

    function selectMedia() {
        if ($this->data['page'] == 1 || $this->data['page'] < 0) {
            $this->offset = 0;
        } else {
            $this->offset = $this->data['size'] * ($this->data['page'] - 1);
        }
        $this->limit = $this->data['size'];

        $query = "select * from t_rprt where RT_EXPS_YN='Y' and (RT_TTL like '%".$this->data['search_string']."%' or RT_CONT like '%".$this->data['search_string']."%') order by RT_SEQ desc limit ".$this->offset.", ".$this->limit;
        return $this->db->query($query)->result_array();
    }

    //언론보도 view
    function selectMediaView($seq) {
        $query = "update t_rprt set RT_READ_CNT=RT_READ_CNT+1 where RT_EXPS_YN='Y' and RT_SEQ=".$seq;
        $this->db->query($query);
        return $this->db->get_where('t_rprt', array('RT_SEQ'=>$seq))->row();
    }

    function selectMediaViewPrev($seq) {
        $query = "select ifnull( (select max(RT_SEQ) from t_rprt where RT_EXPS_YN='Y' and RT_SEQ<".$seq."), (select min(RT_SEQ) from t_rprt where RT_EXPS_YN='Y') ) as RT_SEQ from t_rprt where RT_EXPS_YN='Y'";
        return $this->db->query($query)->row();
    }

    function selectMediaViewNext($seq) {
        $query = "select ifnull( (select min(RT_SEQ) from t_rprt where RT_EXPS_YN='Y' and RT_SEQ>".$seq."), (select max(RT_SEQ) from t_rprt where RT_EXPS_YN='Y') ) as RT_SEQ from t_rprt where RT_EXPS_YN='Y'";
        return $this->db->query($query)->row();
    }

    function selectChangePreview($seq){

        $query = "SELECT max(BC_SEQ) as preview FROM t_brdc WHERE BC_EXPS_YN ='Y' and BC_SEQ < " .$seq ;
        return $this->db->query($query);

    }

    function selectChangeNext($seq){

        $query = "SELECT min(BC_SEQ) as next FROM t_brdc WHERE Bc_EXPS_YN ='Y' and BC_SEQ > " .$seq ;
        return $this->db->query($query);

    }

    function selectMediaChangePreview($seq){

        $query = "SELECT max(RT_SEQ) as preview FROM t_rprt WHERE RT_EXPS_YN ='Y' and RT_SEQ < " .$seq ;
        return $this->db->query($query);

    }

    function selectMediaChangeNext($seq){

        $query = "SELECT min(RT_SEQ) as next FROM t_rprt WHERE RT_EXPS_YN ='Y' and RT_SEQ > " .$seq ;
        return $this->db->query($query);

    }


    //방송
    function selectTvCount(){
        if ($this->data['search_string'] != ""){

            $this->db->like("BC_TTL" , $this->data['search_string']);
        }

        $this->db->where("BC_EXPS_YN", "Y");
        $this->db->select('BC_SEQ');
        $this->db->from('t_brdc');
        $this->total = $this->db->count_all_results();

        return  $this->total;

    }

    function selectTv(){
        if ($this->data['page'] == 1 || $this->data['page'] < 0) {
            $this->offset = 0;
        } else {
            $this->offset = $this->data['size'] * ($this->data['page'] - 1);
        }

        $this->limit  = $this->data['size'];

        if ($this->data['search_string'] != ""){
            $this->db->like("BC_TTL" , $this->data['search_string']);
        }

        $this->db->where("BC_EXPS_YN", "Y");

        $this->db->order_by('BC_SEQ desc');
        $query = $this->db->get('t_brdc', $this->limit , $this->offset );
        return $this->result_array = $query->result_array();
    }

    function selectTvOne($seq){
        $this->db->where('BC_SEQ', $seq);
        $this->db->where("BC_EXPS_YN", "Y");
        $query = $this->db->get('t_brdc');
        return $query->row();
    }



    //의료진 공용
    function selectStaff(){

        $this->db->like('STF_TYPE', $this->data['type']  , 'after');
        $this->db->where("STF_EXPS_YN", "Y");
        $this->db->order_by("STF_SORT asc");
        $query = $this->db->get('t_stf');
        return $query->result_array();

    }

    //전담 간호사
    function selectNurse(){
        return self::selectStaff();
    }

    //의료 지원팀 고객만족
    function selectSupport(){
        return self::selectStaff();
    }
    //의료 지원팀 지원실
    function selectSupport2(){
        return self::selectStaff();
    }

    //전담의료진
    function selectDedicated(){
        return self::selectStaff();
    }
    //첫번째 의료진
    function selectDedicatedOne($STF_SEQ = ""){

        if ($STF_SEQ != ""){
            $this->db->where("STF_SEQ", $STF_SEQ);
        }
        $this->db->like('STF_TYPE', $this->data['type']  , 'after');
        $this->db->where("STF_EXPS_YN", "Y");
        $this->db->order_by('STF_SORT' , 'asc');
        $query = $this->db->get('t_stf' , 1);
        return $query->row();
    }

    function selectBook($type){
        $this->db->where("BK_TYPE", $type);
        $query  = $this->db->get("t_book");
        return $this->result_array  = $query->result_array();
    }

    function selectLetter($type){
        $this->db->where("LT_TYPE", $type);
        $query  = $this->db->get("t_letter");
        return $this->result_array  = $query->result_array();
    }

    function selectVideo($type){
        $this->db->where("BC_TYPE".$type."_YN" , "Y");
        $this->db->order_by("BC_SEQ desc");
        $query  = $this->db->get("t_brdc");
        return $this->result_array  = $query->result_array();
    }

    function updateCnt($seq){
        $this->db->set("BC_READ_CNT", "BC_READ_CNT+1", false);
        $this->db->where("BC_SEQ", $seq);
        return $this->db->update('t_brdc');
    }


}
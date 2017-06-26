<?php
class M_reference extends CI_Model {

    function selectAnnounceCount(){


        if ($this->data['search_string'] != ""){

            $this->db->like( "PT_TTL" , $this->data['search_string']);
        }

        $this->db->where("PT_EXPS_YN", "Y");
        $this->db->select('PT_SEQ');
        $this->db->from('t_prt');
        $this->total = $this->db->count_all_results();

        return  $this->total;

    }

    function selectAnnounce(){


        if ($this->data['page'] == 1 || $this->data['page'] < 0) {
            $this->offset = 0;
        } else {
            $this->offset = $this->data['size'] * ($this->data['page'] - 1);
        }

        $this->limit  = $this->data['size'];

        if ($this->data['search_string'] != ""){

            $this->db->like( "PT_TTL" , $this->data['search_string']);
        }

        $this->db->where("PT_EXPS_YN", "Y");

        $this->db->order_by('PT_SEQ desc');
        $query = $this->db->get('t_prt', $this->limit , $this->offset );
        return $this->result_array = $query->result_array();
    }

    function selectAnnounceOne($seq){
        $this->db->where('PT_SEQ', $seq);
        $this->db->where("PT_EXPS_YN", "Y");
        $query = $this->db->get('t_prt');
        return $query->row();
    }


    function selectAnnouncePreview($seq){

        $query = "SELECT max(PT_SEQ) as preview FROM t_prt WHERE PT_EXPS_YN ='Y' and PT_SEQ < " .$seq ;
        return $this->db->query($query);

    }

    function selectAnnounceNext($seq){

        $query = "SELECT min(PT_SEQ) as next FROM t_prt WHERE PT_EXPS_YN ='Y' and PT_SEQ > " .$seq ;
        return $this->db->query($query);

    }




    function selectChangeCount(){


        if ($this->data['type'] == "BAABAAAC"){
            $this->db->where( "TT_CNR_TP" , $this->data['type']);
        }elseif($this->data['type'] == "BAABAAFG"){
            $this->db->where( "TT_CNR_TP" , $this->data['type']);
        }elseif($this->data['type'] == "BAABAAAA"){
            $this->db->where( "TT_CNR_TP" , $this->data['type']);
        }elseif($this->data['type'] == "BAABAAAD"){
            $this->db->where( "TT_CNR_TP" , $this->data['type']);
        }elseif($this->data['type'] == "BAABAAAB"){
            $this->db->where( "TT_CNR_TP" , 'BAABAAAB');
            $this->db->or_where( "TT_CNR_TP" ,'BAABAAAE');
            $this->db->or_where( "TT_CNR_TP" ,'BAABAAAF');
        }elseif($this->data['type'] == "etc"){
            $data = array('BAABAAAC','BAABAAFG','BAABAAAA','BAABAAAD','BAABAAAB','BAABAAAE','BAABAAAF');
            $this->db->where_not_in( "TT_CNR_TP" ,$data);
        }




        if ($this->data['search_string'] != ""){

            $this->db->like( "TT_TTL" , $this->data['search_string']);
            $this->db->or_like( "TT_NM" , $this->data['search_string']);
        }

        $this->db->where("TT_EXPS_YN", "Y");
        $this->db->select('TT_SEQ');
        $this->db->from('t_trtmt_new');
        $this->total = $this->db->count_all_results();

        return  $this->total;

    }

    function selectChange(){

        if ($this->data['type'] == "BAABAAAC"){
            $this->db->where( "TT_CNR_TP" , $this->data['type']);
        }elseif($this->data['type'] == "BAABAAFG"){
            $this->db->where( "TT_CNR_TP" , $this->data['type']);
        }elseif($this->data['type'] == "BAABAAAA"){
            $this->db->where( "TT_CNR_TP" , $this->data['type']);
        }elseif($this->data['type'] == "BAABAAAD"){
            $this->db->where( "TT_CNR_TP" , $this->data['type']);
        }elseif($this->data['type'] == "BAABAAAB"){
            $this->db->where( "TT_CNR_TP" , 'BAABAAAB');
            $this->db->or_where( "TT_CNR_TP" ,'BAABAAAE');
            $this->db->or_where( "TT_CNR_TP" ,'BAABAAAF');
        }elseif($this->data['type'] == "etc"){
            $data = array('BAABAAAC','BAABAAFG','BAABAAAA','BAABAAAD','BAABAAAB','BAABAAAE','BAABAAAF');
            $this->db->where_not_in( "TT_CNR_TP" ,$data);
        }



        if ($this->data['page'] == 1 || $this->data['page'] < 0) {
            $this->offset = 0;
        } else {
            $this->offset = $this->data['size'] * ($this->data['page'] - 1);
        }

        $this->limit  = $this->data['size'];

        if ($this->data['search_string'] != ""){

            $this->db->like( "n.TT_TTL" , $this->data['search_string']);
            $this->db->or_like( "n.TT_NM" , $this->data['search_string']);
        }
        $this->db->select("n.TT_SEQ, n.TT_TTL, n.TT_CNR_TP, n.TT_NM, n.TT_THMB_IMG, c.CC_CD, c.CC_NM, IF(n.TT_VOD_MP4 != '', 1, 0) as is_vod ", false);
        $this->db->where("n.TT_EXPS_YN", "Y");
        $this->db->join("t_comm_cd c" , "n.TT_CNR_TP = c.CC_CD" , 'left');
//        $this->db->order_by('is_vod desc, n.TT_SEQ desc');
        $this->db->order_by('n.TT_RGST_YMDT desc, n.TT_SEQ desc');
        $query = $this->db->get('t_trtmt_new n', $this->limit , $this->offset );
        return $this->result_array = $query->result_array();
    }

    function selectChangeOne($seq){
        $this->db->where('TT_SEQ', $seq);
        $this->db->where("TT_EXPS_YN", "Y");
        $query = $this->db->get('t_trtmt_new');
        return $query->row();
    }

    function updateReadCount($seq){
        $query = "update t_trtmt_new set TT_READ_CNT=TT_READ_CNT+1 where TT_SEQ=".$seq;
        $this->db->query($query);
    }

    function selectChangeMainVOD() {
        $this->db->where("TT_MAIN_EXPS_YN", "Y");
        $this->db->order_by("TT_RGST_YMDT desc");
        return $this->db->get('t_trtmt_new')->row();
    }


    function selectChangePreview($seq){

        $query = "SELECT max(TT_SEQ) as preview FROM t_trtmt_new WHERE TT_EXPS_YN ='Y' and TT_SEQ < " .$seq ;
        return $this->db->query($query);

    }

    function selectChangeNext($seq){

        $query = "SELECT min(TT_SEQ) as next FROM t_trtmt_new WHERE TT_EXPS_YN ='Y' and TT_SEQ > " .$seq ;
        return $this->db->query($query);

    }


    function selectThesisCount(){
        $this->db->where("states", "Y");
        $this->db->select('idx');
        $this->db->from('t_thesis_info');
        $this->total = $this->db->count_all_results();

        return  $this->total;

    }

    function selectThesis(){

        if ($this->data['page'] == 1 || $this->data['page'] < 0) {
            $this->offset = 0;
        } else {
            $this->offset = $this->data['size'] * ($this->data['page'] - 1);
        }

        $this->limit  = $this->data['size'];


        $this->db->where("states", "Y");
        $this->db->order_by('idx desc');
        $query = $this->db->get('t_thesis_info', $this->limit , $this->offset );
        return $this->result_array = $query->result_array();
    }

    function selectThesisOne($idx){
        $this->db->where("states", "Y");
        $this->db->where('idx', $idx);
        $query  = $this->db->get('t_thesis_info');
        return $result  = $query->row();
    }

    // 언론보도 view
    function selectThesisView($idx) {
        $query = "update t_thesis_info set readCount=readCount+1 where states='Y' and idx=".$idx;
        $this->db->query($query);
        return $this->db->get_where('t_thesis_info', array('idx'=>$idx))->row();
    }

    function selectThesisChangePreview($idx) {
        $query = "SELECT max(idx) as preview FROM t_thesis_info WHERE states='Y' and idx < " .$idx ;
        return $this->db->query($query);
    }

    function selectThesisChangeNext($idx) {
        $query = "SELECT min(idx) as next FROM t_thesis_info WHERE states='Y' and idx > " .$idx ;
        return $this->db->query($query);
    }


    function selectThesis2Count(){
        $this->db->where("USE_YN", "Y");
        $this->db->select('idx');
        $this->db->from('t_thesis2');
        $this->total = $this->db->count_all_results();

        return  $this->total;

    }

    function selectThesis2(){

        if ($this->data['page'] == 1 || $this->data['page'] < 0) {
            $this->offset = 0;
        } else {
            $this->offset = $this->data['size'] * ($this->data['page'] - 1);
        }

        $this->limit  = $this->data['size'];


        $this->db->where("USE_YN", "Y");
        $this->db->order_by('idx desc');
        $query = $this->db->get('t_thesis2', $this->limit , $this->offset );
        return $this->result_array = $query->result_array();
    }

    function selectThesis2One($idx){
        $this->db->where("USE_YN", "Y");
        $this->db->where('idx', $idx);
        $query  = $this->db->get('t_thesis2');
        return $result  = $query->row();
    }

}
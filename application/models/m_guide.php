<?php
class M_guide extends CI_Model {
    
    // 공지사항
    function selectNoticeCount() {
        if( $this->data['search_field'] == "all" || $this->data['search_field'] == "" ) {
            $query = "select NI_SEQ from t_noti where NI_EXPS_YN='Y' and (NI_TTL like '%".$this->data['search_string']."%' or NI_CONT like '%".$this->data['search_string']."%')";
        } else {
            $query = "select NI_SEQ from t_noti where NI_EXPS_YN='Y' and ".$this->data['search_field']." like '%".$this->data['search_string']."%'";
        }

        return $this->db->query($query)->num_rows();
    }

    function selectNotice() {
        if ($this->data['page']  == 1 || $this->data['page']  < 0) {
            $this->offset = 0;
        } else {
            $this->offset = $this->data['size']  * ($this->data['page']  - 1);
        }
        $this->limit  = $this->data['size'] ;

        if( $this->data['search_field'] == "all" || $this->data['search_field'] == "" ) {
            $query = "select * from t_noti where NI_EXPS_YN='Y' and (NI_TTL like '%".$this->data['search_string']."%' or NI_CONT like '%".$this->data['search_string']."%') order by NI_SEQ desc limit ".$this->offset.", ".$this->limit;
        } else {
            $query = "select * from t_noti where NI_EXPS_YN='Y' and ".$this->data['search_field']." like '%".$this->data['search_string']."%' order by NI_SEQ desc limit ".$this->offset.", ".$this->limit;
        }

        return $this->db->query($query)->result_array();
    }

    // 공지사항 view
    function selectNoticeView($seq) {
        $query = "update t_noti set NI_READ_CNT=NI_READ_CNT+1 where NI_EXPS_YN='Y' and NI_SEQ=".$seq;
        $this->db->query($query);
        return $this->db->get_where('t_noti', array('NI_SEQ'=>$seq))->row();
    }

    function selectNoticeChangePreview($seq) {
        $query = "SELECT max(NI_SEQ) as preview FROM t_noti WHERE NI_EXPS_YN ='Y' and NI_SEQ < " .$seq ;
        return $this->db->query($query);
    }

    function selectNoticeChangeNext($seq) {
        $query = "SELECT min(NI_SEQ) as next FROM t_noti WHERE NI_EXPS_YN ='Y' and NI_SEQ > " .$seq ;
        return $this->db->query($query);
    }

    // 소람이야기
    function selectStoryCount() {
        if( $this->data['search_field'] == "all" || $this->data['search_field'] == "" ) {
            $query = "select ST_SEQ from t_story where ST_EXPS_YN='Y' and (ST_TTL like '%".$this->data['search_string']."%' or ST_CONT like '%".$this->data['search_string']."%')";
        } else {
            $query = "select ST_SEQ from t_story where ST_EXPS_YN='Y' and ".$this->data['search_field']." like '%".$this->data['search_string']."%'";
        }

        return $this->db->query($query)->num_rows();
    }

    function selectStory() {
        if ($this->data['page']  == 1 || $this->data['page']  < 0) {
            $this->offset = 0;
        } else {
            $this->offset = $this->data['size']  * ($this->data['page']  - 1);
        }
        $this->limit  = $this->data['size'] ;

        if( $this->data['search_field'] == "all" || $this->data['search_field'] == "") {
            $query = "select * from t_story where ST_EXPS_YN='Y' and (ST_TTL like '%".$this->data['search_string']."%' or ST_CONT like '%".$this->data['search_string']."%') order by ST_SEQ desc limit ".$this->offset.", ".$this->limit;
        } else {
            $query = "select * from t_story where ST_EXPS_YN='Y' and ".$this->data['search_field']." like '%".$this->data['search_string']."%' order by ST_SEQ desc limit ".$this->offset.", ".$this->limit;
        }

        return  $this->db->query($query)->result_array();
    }

    // 소람이야기 view
    function selectStoryView($seq) {
        $query = "update t_story set ST_READ_CNT=ST_READ_CNT+1 where ST_EXPS_YN='Y' and ST_SEQ=".$seq;
        $this->db->query($query);
        return $this->db->get_where('t_story', array('ST_SEQ'=>$seq))->row();
    }

    function selectStoryChangePreview($seq) {
        $query = "SELECT max(ST_SEQ) as preview FROM t_story WHERE ST_EXPS_YN ='Y' and ST_SEQ < " .$seq ;
        return $this->db->query($query);
    }

    function selectStoryChangeNext($seq) {
        $query = "SELECT min(ST_SEQ) as next FROM t_story WHERE ST_EXPS_YN ='Y' and ST_SEQ > " .$seq ;
        return $this->db->query($query);
    }
    

    function selectFaqCount(){

        if ($this->data['search_string']) {
            if ($this->data['search_field'] == "all") {
                $this->db->like('f.FAQ_TTL', $this->data['search_string']);
                $this->db->or_like('f.FAQ_CONT', $this->data['search_string']);
            } else if ($this->data['search_field'] != "") {
                $this->db->like($this->data['search_field'], $this->data['search_string']);
            }
        }
        if ($this->data['faq_type']  != ''){
            $this->db->where('f.FAQ_TP' , $this->data['faq_type']);
        }
        $this->db->where('f.FAQ_EXPS_YN' , 'Y');

        $this->db->select('f.FAQ_SEQ');
        $this->db->join('t_comm_cd c' , 'f.FAQ_TP = c.CC_CD' ,'left');
        $this->db->from('t_faq f');
        $this->total = $this->db->count_all_results();

        return $this->total;

    }

    function selectFaq(){

        if ($this->data['page']  == 1 || $this->data['page']  < 0) {
            $this->offset = 0;
        } else {
            $this->offset = $this->data['size']  * ($this->data['page']  - 1);
        }
        $this->limit  = $this->data['size'] ;

        if ($this->data['search_string']) {
            if ($this->data['search_field'] == "all") {
                $this->db->like('f.FAQ_TTL', $this->data['search_string']);
                $this->db->or_like('f.FAQ_CONT', $this->data['search_string']);
            } else if ($this->data['search_field'] != "") {
                $this->db->like($this->data['search_field'], $this->data['search_string']);
            }
        }
        if ($this->data['faq_type']  != ''){
            $this->db->where('f.FAQ_TP' , $this->data['faq_type']);
        }

        $this->db->select('f.* , c.CC_NM');
        $this->db->order_by('f.FAQ_SEQ desc');
        $this->db->join('t_comm_cd c' ,  'f.FAQ_TP = c.CC_CD' ,'left');
        $this->db->where('f.FAQ_EXPS_YN' , 'Y');
        $query = $this->db->get('t_faq f',  $this->limit , $this->offset);

        return $this->result_array = $query->result_array();

    }


    function selectVoiceCount(){
        if ($this->data['search_string']) {
            if ($this->data['search_field'] == "all") {
                $this->db->like('TITLE', $this->data['search_string']);
                $this->db->or_like('CONTENTS', $this->data['search_string']);
            } else if ($this->data['search_field'] != "") {
                $this->db->like($this->data['search_field'], $this->data['search_string']);
            }
        }
        $this->db->select('IDX');
        $this->db->from('t_voice');
        $this->total = $this->db->count_all_results();

        return $this->total;
    }

    function selectVoice(){
        if ($this->data['page']  == 1 || $this->data['page']  < 0) {
            $this->offset = 0;
        } else {
            $this->offset = $this->data['size']  * ($this->data['page']  - 1);
        }
        $this->limit  = $this->data['size'] ;

        if ($this->data['search_string']) {
            if ($this->data['search_field'] == "all") {
                $this->db->like('TITLE', $this->data['search_string']);
                $this->db->or_like('CONTENTS', $this->data['search_string']);
            } else if ($this->data['search_field'] != "") {
                $this->db->like($this->data['search_field'], $this->data['search_string']);
            }
        }
        $this->db->order_by('REGDATE desc');
        $query = $this->db->get('t_voice',  $this->limit , $this->offset);

        return $this->result_array = $query->result_array();
    }

    //고객의 소리 view
    function selectVoiceView($idx) {
        return $this->db->get_where('t_voice', array('IDX'=>$idx))->row();
    }

    function selectVoiceViewPrev($idx) {
        $query = "select ifnull( (select max(IDX) from t_voice where IDX<".$idx."), (select min(IDX) from t_voice) ) as IDX from t_voice";
        return $this->db->query($query)->row();
    }

    function selectVoiceViewNext($idx) {
        $query = "select ifnull( (select min(IDX) from t_voice where IDX>".$idx."), (select max(IDX) from t_voice) ) as IDX from t_voice";
        return $this->db->query($query)->row();
    }

    function insertNewsApply($data){
        return $result = $this->db->insert('t_immnt', $data);
    }


    function selectConsultingCount(){

        //검색 조건

        if ($this->data['search_string']) {
            if ($this->data['search_field'] == "all") {
                $this->db->like('CL_NM', $this->data['search_string']);
                $this->db->or_like('CL_TTL', $this->data['search_string']);
                $this->db->or_like('CL_CONT', $this->data['search_string']);
            } else if ($this->data['search_field'] != "") {
                $this->db->like($this->data['search_field'], $this->data['search_string']);
            }
        }


        $this->db->where("CL_DEL_FLAG", "N");


        $this->db->select('idx');
        $this->db->from('t_cnsl');
        $this->total = $this->db->count_all_results();

        return $this->total;


    }

    function selectConsulting(){

        if ($this->data['page']  == 1 || $this->data['page']  < 0) {
            $this->offset = 0;
        } else {
            $this->offset = $this->data['size']  * ($this->data['page']  - 1);
        }
        $this->limit  = $this->data['size'] ;
        //검색 조건


        if ($this->data['search_string']) {
            if ($this->data['search_field'] == "all") {
                $this->db->like('CL_NM', $this->data['search_string']);
                $this->db->or_like('CL_TTL', $this->data['search_string']);
                $this->db->or_like('CL_CONT', $this->data['search_string']);
            } else if ($this->data['search_field'] != "") {
                $this->db->like($this->data['search_field'], $this->data['search_string']);
            }
        }

        $this->db->where("CL_DEL_FLAG", "N");

        $this->db->order_by('CL_SEQ desc');
        $query = $this->db->get('t_cnsl t', $this->limit , $this->offset);
        return $this->result_array = $query->result_array();

    }

    function insertCousultingProcess($data){
        return $result = $this->db->insert('t_cnsl', $data);
    }

    function selectCousultingOne(){

        $this->db->where("CL_SEQ", $this->data["consulting_seq"]);
        $this->db->where("CL_PWD", $this->data["consulting_pwd"]);
        $query = $this->db->get('t_cnsl');
        return $query->row();
    }


    function insertVioce($data){

        return $result = $this->db->insert('t_voice', $data);
    }

    function selectZipcode(){

        $query = "select ifnull(ZC_CD,'') as ZC_CD, ifnull(ZC_SIDO,'') as ZC_SIDO, ifnull(ZC_GUGUN,'') as ZC_GUGUN, ifnull(ZC_DONG,'') as ZC_DONG, ifnull(ZC_RI,'') as ZC_RI, ifnull(ZC_BUNJI,'') as ZC_BUNJI
                  from t_zipcd
                  where (ZC_GUGUN like '%".$this->data['dong']."%' or ZC_DONG like '%".$this->data['dong']."%' or ZC_RI like '%".$this->data['dong']."%' ) order by ZC_SEQ asc
        ";
        return $this->db->query($query);
    }
	
	// 비급여 진료비 조회
    function selectUninsuredCount() {
		if( $this->data['search_string'] == "") {
			$query = "select '' ";
		} else {
            $query = "select idx from nopay where exps_yn='Y' and name like '%".$this->data['search_string']."%' ";
		}

        return $this->db->query($query)->num_rows();
    }
	
    function selectUninsured() {
        if ($this->data['page']  == 1 || $this->data['page']  < 0) {
            $this->offset = 0;
        } else {
            $this->offset = $this->data['size']  * ($this->data['page']  - 1);
        }
        $this->limit  = $this->data['size'] ;

		if( $this->data['search_string'] == "") {
			$query = "select '' ";
		} else {
		$query = "select * from nopay where exps_yn='Y' and name like '%".$this->data['search_string']."%' order by idx desc limit ".$this->offset.", ".$this->limit;
		}
		
        return $this->db->query($query)->result_array();
    }
}
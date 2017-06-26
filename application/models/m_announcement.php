<?php
class M_reference extends CI_Model {

    function selectChangeCount(){
        if ($this->data['search_field'] != ""){

            $this->db->like($this->data['search_field'] , $this->data['search_string']);
        }

        $this->db->where("PT_EXPS_YN", "Y");
        $this->db->select('PT_SEQ');
        $this->db->from('t_prt');
        $this->total = $this->db->count_all_results();

        return  $this->total;

    }

    function selectChange(){
        if ($this->data['page'] == 1 || $this->data['page'] < 0) {
            $this->offset = 0;
        } else {
            $this->offset = $this->data['size'] * ($this->data['page'] - 1);
        }

        $this->limit  = $this->data['size'];

        if ($this->data['search_field'] != ""){
            $this->db->like($this->data['search_field'] , $this->data['search_string']);
        }

        $this->db->where("PT_EXPS_YN", "Y");

        $this->db->order_by('PT_SEQ desc');
        $query = $this->db->get('t_prt', $this->limit , $this->offset );
        return $this->result_array = $query->result_array();
    }

    function selectChangeOne($seq){
        $this->db->where('PT_SEQ', $seq);
        $this->db->where("PT_EXPS_YN", "Y");
        $query = $this->db->get('t_prt');
        return $query->row();
    }


}
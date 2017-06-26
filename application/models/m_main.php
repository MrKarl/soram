<?php
class M_main extends CI_Model {
    function __construct() {
        parent::__construct();
    }

    function selectPopup() {
        $this->db->where("PP_STRT_YMD <=", date("Y-m-d"));
        $this->db->where("PP_END_YMD >=", date("Y-m-d"));
        $this->db->where("PP_EXPS_YN", "Y");

        return $this->db->get('t_popup')->result_array();
    }

    function selectSlideBetter() {
        $this->db->join('t_comm_cd t', 't.CC_CD = c.TI_CNR_TP', 'left');
        $this->db->where('TI_EXPS_YN', 'Y');
        $this->db->order_by('TI_SORT asc');
        $this->db->order_by('TI_RGST_YMDT asc');

        return $this->db->get('t_tbnr c')->result_array();
    }

    function selectSlideMain() {
        $this->db->where('MI_EXPS_YN', 'Y');
        $this->db->order_by('MI_SORT asc');
        $this->db->order_by('MI_RGST_YMDT asc');

        return $this->db->get('t_mbnr')->result_array();
    }
    
    function selectConsultPopup() {
        $this->db->where('CP_START_YMD <=', date("Y_m_d"));
        $this->db->where('CP_END_YMD >=', date("Y-m-d"));
        $this->db->where('CP_EXPS_YN', 'Y');
        
        return $this->db->get('t_consult_popup')->row();
    }

    function insertProcess($data) {
        return $this->db->insert('t_cnsl', $data);
    }
    
    function selectMedicalBanner() {
        $this->db->where('BN_SEQ', '1');
        return $this->db->get('t_banner')->row();
    }

    function selectMediaBanner() {
        $this->db->where('BN_SEQ', '2');
        return $this->db->get('t_banner')->row();
    }
    
    function selectApplyBanner() {
        $this->db->where('BN_SEQ', '3');
        return $this->db->get('t_banner')->row();
    }
}
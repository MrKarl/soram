<?php
class Main_popup extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('admin/m_main_popup');
    }

    function index(){
        $this->data['result']             = $this->m_main_popup->selectConsultPopup();
        $this->load->view('admin/consult_popup/index', $this->data);
    }

    function registProcess(){
        $this->yield                = FALSE;
        
        $CP_START_YMD               = $this->input->post('CP_START_YMD');
        $CP_EMD_YMD                 = $this->input->post('CP_END_YMD');
        $CP_EXPS_YN                 = $this->input->post('CP_EXPS_YN');

        $data                       = array("CP_START_YMD"=>$CP_START_YMD, "CP_END_YMD"=>$CP_EMD_YMD, "CP_EXPS_YN"=>$CP_EXPS_YN);
        echo $this->m_main_popup->updateProcess($data);
    }
}
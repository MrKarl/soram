<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-04-22
 * Time: 오후 1:16
 */

class Main extends CI_Controller{
    function __construct(){
        parent::__construct();
        /*$this->yield    = FALSE;*/
        $this->load->model('m_main');
    }

    function index(){
        $this->data['result']           = $this->m_main->selectPopup();
        $this->data['better']           = $this->m_main->selectSlideBetter();
        $this->data['main']             = $this->m_main->selectSlideMain();
        $this->data['consult_popup']    = $this->m_main->selectConsultPopup();    
        $this->data['medical_banner']   = $this->m_main->selectMedicalBanner();
        $this->data['media_banner']     = $this->m_main->selectMediaBanner();
        $this->data['apply_banner']     = $this->m_main->selectApplyBanner();

        $this->data['login_check']      = $this->input->get('login_pop');

        $this->load->view('main/index', $this->data);
    }
    
    
    function tracking(){
      	$this->yield    = FALSE;
        $this->load->view('main/footer');
    }


    function check_referer(){
        $host = 'http://'.getenv('HTTP_HOST');
        if($host == substr(getenv('HTTP_REFERER'),0,strlen($host)))
            return 1;
        else
            return 0;
    }

    function registProcess(){
        $this->yield                    = FALSE;

        $CL_NM                          = $this->input->post('CL_NM');
        $CL_TTL                         = $CL_NM." 님의 문의 입니다.";
        $CL_CPH                         = $this->input->post('CL_CPH');
        $CL_CNR                         = $this->input->post('CL_CNR');
        $CL_AREA                        = $this->input->post('CL_AREA');
        $CL_CONT                        = $this->input->post('CL_CONT');
        $CL_COMPANY                     = "1:1(메인팝업)";

        $data                           = array('CL_NM'=>$CL_NM, 'CL_TTL'=>$CL_TTL, 'CL_CPH'=>$CL_CPH, 'CL_CNR'=>$CL_CNR, 'CL_AREA'=>$CL_AREA, 'CL_CONT'=>$CL_CONT,
                                                    'CL_COMPANY'=>$CL_COMPANY, "CL_RGST_YMDT"=>date('Y-m-d H:i:s') , "USER_IP" => $this->input->ip_address());

        if ($this->check_referer() == 1 && $CL_NM != "")
            echo $this->m_main->insertProcess($data);
    }
}

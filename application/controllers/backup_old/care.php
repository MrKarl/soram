<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-04-22
 * Time: ���� 12:01
 */

class Care extends CI_Controller{

    function __construct(){
        parent::__construct();
    }
    #폐암
    function lung(){
        $this->data['media_result']     = $this->common->selectMedia('care_lung');
        $this->load->view('care/lung', $this->data);
    }
    #유방암
    function breast(){
        $this->data['media_result']     = $this->common->selectMedia('care_breast');
        $this->load->view('care/breast', $this->data);
    }
    #위암
    function stomach(){
        $this->data['media_result']     = $this->common->selectMedia('care_stomach');
        $this->load->view('care/stomach', $this->data);
    }
    #대장암
    function colorectal(){
        $this->data['media_result']     = $this->common->selectMedia('care_colorectal');
        $this->load->view('care/colorectal', $this->data);
    }
    #간,담,췌장암
    function liver(){
        $this->data['media_result']     = $this->common->selectMedia('care_liver');
        $this->load->view('care/liver', $this->data);
    }
    #자궁경부암
    function cervical(){
        $this->data['media_result']     = $this->common->selectMedia('care_cervical');
        $this->load->view('care/cervical', $this->data);
    }
    #난소암
    function ovarian(){
        $this->load->view('care/ovarian');
    }
    #뇌종양
    function brain(){
        $this->load->view('care/brain');
    }
    #전립선암
    function prostate(){
        $this->load->view('care/prostate');
    }
    #갑상선암
    function thyroid(){
        $this->load->view('care/thyroid');
    }
    #자궁이형성증
    function uterine(){
        $this->load->view('care/uterine');
    }
    #장생피화생 만성위축성위염
    function gastritis(){
        $this->load->view('care/gastritis');
    }
    #구강, 설암
    function headnneck(){
        $this->load->view('care/headnneck');
    }
    #편도, 후두암
    function tonsillar(){
        $this->load->view('care/tonsillar');
    }
    #흉선암/종격동암
    function thymic(){
        $this->load->view('care/thymic');
    }
    #식도암
    function esophageal(){
        $this->load->view('care/esophageal');
    }
    #림프암(비호지킨)
    function lymphoma(){
        $this->load->view('care/lymphoma');
    }
    #혈액암/백혈병
    function acute(){
        $this->load->view('care/acute');
    }
    #신장암
    function renal(){
        $this->load->view('care/renal');
    }
    #방광암
    function bladder(){
        $this->load->view('care/bladder');
    }
    #육종암
    function sarcoma(){
        $this->load->view('care/sarcoma');
    }

}
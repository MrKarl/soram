<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-05-09
 * Time: 오전 11:48
 */

class Heal extends CI_Controller{

    function __construct(){
        parent::__construct();
    }
    #소람약침
    function acupuncture(){
        $this->data['media_result']     = $this->common->selectMedia('heal_acupuncture');
        $this->load->view('heal/acupuncture', $this->data);
    }
    #소람한약
    function hanyack(){
        $this->data['media_result']     = $this->common->selectMedia('heal_hanyack');
        $this->load->view('heal/hanyack', $this->data);
    }
    #비훈치료
    function nose_steam(){
        $this->data['media_result']     = $this->common->selectMedia('heal_nose_steam');
        $this->load->view('heal/nose_steam', $this->data);
    }
    #온열치료
    function heat(){
        $this->data['media_result']     = $this->common->selectMedia('heal_heat');
        $this->load->view('heal/heat', $this->data);
    }
    #특별치료
    function special(){
        $this->data['media_result']     = $this->common->selectMedia('heal_special');
        $this->load->view('heal/special', $this->data);
    }
    #면역치료
    function immunity(){
        $this->data['media_result']     = $this->common->selectMedia('heal_immunity');
        $this->load->view('heal/immunity', $this->data);
    }
    #고주파 온열암치료
    function high_frequency(){
        $this->data['media_result']     = $this->common->selectMedia('heal_high_frequency');
        $this->load->view('heal/high_frequency', $this->data);
    }
    #치료장비
    function equipment(){
        $this->data['media_result']     = $this->common->selectMedia('heal_equipment');
        $this->load->view('heal/equipment', $this->data);
    }
    #집중치료
    function intensive_care(){
        $this->data['media_result']     = $this->common->selectMedia('heal_intensive_care');
        $this->load->view('heal/intensive_care', $this->data);
    }
    #특화치료
    function specialized_treatment(){
        $this->data['media_result']     = $this->common->selectMedia('heal_specialized_treatment');
        $this->load->view('heal/specialized_treatment', $this->data);
    }
    #입원치료
    function admission(){
        $this->data['media_result']     = $this->common->selectMedia('heal_admission');
        $this->load->view('heal/admission', $this->data);
    }
    #입원치료식
    function food(){
        $this->data['media_result']     = $this->common->selectMedia('heal_food');
        $this->load->view('heal/food', $this->data);
    }
    #섭생상담
    function foodlife(){
        $this->data['media_result']     = $this->common->selectMedia('heal_foodlife');
        $this->load->view('heal/foodlife', $this->data);
    }
}


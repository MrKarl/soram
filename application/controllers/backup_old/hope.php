<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-04-22
 * Time: ���� 12:01
 */

class Hope extends CI_Controller{

    function __construct(){
        parent::__construct();
        $login_check = $this->session->userdata("MBR_ID");
        if($login_check == ""){

            $referer    = explode('/',$this->uri->uri_string());
            $area       = '';

            if($referer[count($referer)-1] == "lung"){
                $area = "area1";
            }elseif($referer[count($referer)-1] == "breast"){
                $area = "area2";
            }elseif($referer[count($referer)-1] == "colorectal"){
                $area = "area3";
            }elseif($referer[count($referer)-1] == "liver"){
                $area = "area4";
            }elseif($referer[count($referer)-1] == "etc"){
                $area = "area5";
            }

            redirect("/hopeIntro?login_pop=Y&area=".$area, "refresh");
        }
    }

    function lung(){
        $this->data['media_result']     = $this->common->selectMedia('hope_lung');
        $this->load->view('hope/lung', $this->data);
    }

    function breast(){
        $this->data['media_result']     = $this->common->selectMedia('hope_breast');
        $this->load->view('hope/breast', $this->data);
    }


    function colorectal(){
        $this->data['media_result']     = $this->common->selectMedia('hope_colorectal');
        $this->load->view('hope/colorectal', $this->data);
    }

    function liver(){
        $this->data['media_result']     = $this->common->selectMedia('hope_liver');
        $this->load->view('hope/liver', $this->data);
    }

    function etc(){
        $this->data['media_result']     = $this->common->selectMedia('hope_etc');
        $this->load->view('hope/etc', $this->data);
    }
}
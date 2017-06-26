<?php
class Tracking extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->yield                    = FALSE;
    }

    //모바일 전화
    function call() {

        $this->load->view('tracking/call');
    }

    function book(){
        $this->load->view('tracking/book');
    }


    function consulting(){
        $this->load->view('tracking/consulting');
    }
}
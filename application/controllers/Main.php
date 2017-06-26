<?php

class Main extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->yield                    = FALSE;
    }

    public function index() {
		$this->load->view('common/header');
        $this->load->view('common/nav');
        $this->load->view('main/main');
		$this->load->view('common/footer');
    }
}
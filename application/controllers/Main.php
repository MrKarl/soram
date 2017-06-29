<?php

class Main extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->yield                    = FALSE;
    }

    public function index() {
        $data = array(
            'section' => 'main'
        );

        $this->load->view('common/header');
        $this->load->view('common/nav', $data);
        $this->load->view('main/main');
		$this->load->view('common/footer');
    }
}
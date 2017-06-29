<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cancer extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->yield                    = FALSE;
    }

	public function index() {
        $data = array(
            'section' => 'cancer'
        );

        $this->load->view('common/header');
        $this->load->view('common/nav', $data);
        $this->load->view('cancer/cancer');
        $this->load->view('common/footer');
    }    
}

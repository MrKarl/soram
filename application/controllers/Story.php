<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Story extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->yield                    = FALSE;
    }
    
	public function index()
	{
		$this->load->view('common/header');
		$this->load->view('common/nav');
		$this->load->view('story/story');
		$this->load->view('common/footer');
	}
}

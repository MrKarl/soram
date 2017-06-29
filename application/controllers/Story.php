<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Story extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->yield                    = FALSE;
    }
    
	public function index()
	{
		$storyID = $this->input->get("story", TRUE);
		$data = array(
            'section' => 'story'
        );

		$this->load->view('common/header');
		$this->load->view('common/nav', $data);

		if ($storyID) {
			$data['storyID'] = $storyID;
			$this->load->view('story/storyDetail', $data);
		} else {
			$this->load->view('story/story');	
		}
		
		$this->load->view('common/footer');
	}
}

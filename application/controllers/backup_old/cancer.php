<?php
/**
 * Created by Notepad++
 * User: rill
 * Date: 2017-04-19
 * Time: ???? 16:27
 */

class cancer extends CI_Controller{

    function __construct(){
        parent::__construct();
    }
    #½ÅÀå¾Ï
    function side_effect(){
        $this->load->view('cancer/side_effect');
    }
    #¹æ±¤¾Ï
    function early(){
        $this->load->view('cancer/early');
    }
    #À°Á¾¾Ï
    function metastatic_relapse(){
        $this->load->view('cancer/metastatic_relapse');
    }

}
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
    #�����
    function side_effect(){
        $this->load->view('cancer/side_effect');
    }
    #�汤��
    function early(){
        $this->load->view('cancer/early');
    }
    #������
    function metastatic_relapse(){
        $this->load->view('cancer/metastatic_relapse');
    }

}
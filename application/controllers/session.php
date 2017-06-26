<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Session extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('m_session');
        $this->load->model('m_member');
        $this->load->helper('security');

        $this->yield                    = FALSE;
    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function login() {
		$login_id             = $this->input->post('login_id');
        $login_pwd            = $this->input->post('login_pwd');

        $result              = $this->m_session->selectUserOne($login_id, md5($login_pwd));

        if ($result->num_rows() > 0){
            $row = $result->row();
            $data = array( 'MBR_ID'  => $row->MBR_ID, 'MBR_NM' => $row->MBR_NM , "MBR_SEQ" =>  $row->MBR_SEQ);
            $this->session->set_userdata($data);
            echo 1;
        } else {
            echo 0;
        }
	}


	public function signup() {
        $MBR_ID         = $this->input->post("user_id");
        $MBR_PWD        = do_hash($this->input->post("user_pw"),'md5');
        $MBR_NM         = $this->input->post("user_name");
        $MBR_CPH        = $this->input->post("mobile");
        $MBR_EMAIL      = $this->input->post("email");
        $MBR_SMS_YN     = $this->input->post("sns_check");
        $MBR_RGST_YMDT  = date("Y-m-d H:i:s");
        $MBR_LEV_YN     = "N";
        $MBR_PHONE      = $this->input->post("telephone");
        $MBR_EMAIL_YN   = $this->input->post("email_check");

        $applyer        = $this->input->post("applyer");
        $region         = $this->input->post("region");
        $interest       = $this->input->post("interest");
        $route          = $this->input->post("route");
        
        $id_check       = $this->idCheck($MBR_ID);
        
        if($id_check){
            $data           = array("MBR_ID"=>$MBR_ID, "MBR_PWD"=>$MBR_PWD, "MBR_NM"=>$MBR_NM, "MBR_CPH"=>$MBR_CPH, "MBR_EMAIL"=>$MBR_EMAIL, "MBR_SMS_YN"=>$MBR_SMS_YN, "MBR_RGST_YMDT"=>$MBR_RGST_YMDT, "MBR_LEV_YN"=>$MBR_LEV_YN, "MBR_PHONE"=>$MBR_PHONE, "MBR_EMAIL_YN"=>$MBR_EMAIL_YN);

            $result         = $this->m_member->insertProcess($data);

            $data_etc       = array("mbr_seq"=>$result, "applyer"=>$applyer, "region"=>$region, "interest"=>$interest, "route"=>$route);

            $result_etc     = $this->m_member->insertEtcProcess($data_etc);

            echo $result_etc;
            exit;
        } else {
            echo "id_overlap";
        }
	}


	function idCheck($user_id){
        $result         = $this->m_member->selectUser($user_id);

        if(count($result) > 0){
            return false;
        }else{
            return true;
        }
    }
}

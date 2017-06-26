<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-04-22
 * Time: 오후 1:16
 */

class Session extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('m_session');
        $this->yield                    = FALSE;

        if (!self::check_referer()){
            exit;
        }
    }


    function check_referer(){
        $host = 'http://'.getenv('HTTP_HOST');
        if($host == substr(getenv('HTTP_REFERER'),0,strlen($host)))
            return 1;
        else
            return 0;
    }


    //로그인
    function loginProcess(){


        $login_id             = $this->input->post('login_id');
        $login_pwd            = $this->input->post('login_pwd');

        $result              = $this->m_session->selectUserOne($login_id, md5($login_pwd));

        if ($result->num_rows() > 0){
            $row = $result->row();
            $data = array( 'MBR_ID'  => $row->MBR_ID, 'MBR_NM' => $row->MBR_NM , "MBR_SEQ" =>  $row->MBR_SEQ);
            $this->session->set_userdata($data);
            echo 1;
        }else{
            echo 0;
        }

    }

    //로그아웃
    function logoutProcess(){
        $data = array('MBR_ID' => '' , 'MBR_NM' => '' , 'MBR_SEQ' => '');
        $this->session->unset_userdata($data);
        echo 1;
    }


    //아이디 찾기
    function searchId(){
        $name             = $this->input->post('name');
        $email            = $this->input->post('email');

        $result              = $this->m_session->selectSearchUserOne($name, $email);
        if ($result->num_rows() > 0){
            $row = $result->row();
            echo $row->MBR_ID;
        }else{
            echo 0;
        }

    }

    //비밀 번호 찾기
    function searchPwd(){



        $name             = $this->input->post('name');
        $email            = $this->input->post('email');
        $id               = $this->input->post('id');

        $result              = $this->m_session->selectSearchUserOne($name, $email , $id);
        if ($result->num_rows() > 0){

            //임시 비밀번호
            $new_password = substr(uniqid(),0,6);
            if ($id != "") {
                $this->m_session->updateUserPassword($id, md5($new_password));
            }
            //메일발송 빠짐
//            $data = array("password" => $new_password , "id" =>  $id , "email" => $email);
//            $this->emailSend($data);

            echo $new_password;

        }else{
            echo 0;
        }



    }

    //이메일 발송
    function emailSend($data){

        $email = $data["email"];

        $this->load->library('parser');
        $data           = array("main_url"=>$this->config->item('base_url') , "password"=>$data["password"] , "id" => $data["id"]  );
        $contents       = $this->parser->parse('newsletter/searchPassword.html',$data,true);

        $this->common->sendMail('admin@soram.kr', '소람병원 관리자', $email , '고객님의 임시 비밀번호 입니다', $contents);
    }




}

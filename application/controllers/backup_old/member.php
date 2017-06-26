<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-05-09
 * Time: 오후 12:47
 */

class Member extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('m_member');
        $this->load->helper('security');

        $this->data['page']             = $this->input->get_post('page')? $this->input->get_post('page') : 1;
        $this->data['size']             = $this->input->get_post('size')? $this->input->get_post('page') : 10;
        $this->data['search_string']    = trim($this->input->get_post('search_string'));


        $this->data['base_url']         = current_url(). "?search_string=" . $this->data['search_string'];
        $this->data['cur_page']         = $this->data['page'];
        $this->data['row_cnt']          = 0;
    }

    function agreement(){
        $this->load->view('member/agreement');
    }
    function join(){
        $this->load->view('member/join');
    }

    function idCheck($user_id){
        $result         = $this->m_member->selectUser($user_id);

        if(count($result) > 0){
            return false;
        }else{
            return true;
        }
    }

    function insertProcess(){
        $this->yield    = FALSE;

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
        }else{
            echo "id_overlap";
        }
        
        

        
    }

    function success(){
        $this->load->view('member/success');
    }


    function modify(){

        $MBR_ID = $this->session->userdata("MBR_ID");

        $this->data["result"]        = $this->m_member->selectUser($MBR_ID);


        if(count($this->data["result"] ) > 0){

            $this->load->view('member/modify' , $this->data);
        }else{
            echo "<script>alert('로그인 후 이용바랍니다');location.href='/'</script>";
        }


        if ($MBR_ID != ""){
               $this->load->view('member/modify');
        }else{
            echo "<script>alert('로그인 후 이용바랍니다');location.href='/'</script>";
        }


    }

    function updateProcess(){
        $this->yield    = FALSE;

        $MBR_ID     = $this->session->userdata("MBR_ID");
        $MBR_SEQ    = $this->session->userdata("MBR_SEQ");


        if ($MBR_ID != ""){

            $MBR_PWD        = do_hash($this->input->post("user_pw"),'md5');
            $MBR_CPH        = $this->input->post("mobile");
            $MBR_EMAIL      = $this->input->post("email");
            $MBR_SMS_YN     = $this->input->post("sns_check");
            //$MBR_LEV_YN     = "N";
            $MBR_PHONE      = $this->input->post("telephone");
            $MBR_EMAIL_YN   = $this->input->post("email_check");

            $applyer        = $this->input->post("applyer");
            $region         = $this->input->post("region");
            $interest       = $this->input->post("interest");
            $route          = $this->input->post("route");


            $data           = array("MBR_PWD"=>$MBR_PWD, "MBR_CPH"=>$MBR_CPH, "MBR_EMAIL"=>$MBR_EMAIL, "MBR_SMS_YN"=>$MBR_SMS_YN, "MBR_PHONE"=>$MBR_PHONE, "MBR_EMAIL_YN"=>$MBR_EMAIL_YN);
            $this->m_member->updateMember($MBR_ID , $data);
            $data_etc       = array("applyer"=>$applyer, "region"=>$region, "interest"=>$interest, "route"=>$route);
            $this->m_member->updateMemberEtc($MBR_SEQ ,$data_etc);
            echo 1;
        }else{
            echo "<script>alert('로그인 후 이용바랍니다');location.href='/'</script>";
        }
    }

    function leave(){

        $MBR_ID     = $this->session->userdata("MBR_ID");
        if ($MBR_ID != ""){
            $data = array('MBR_ID' => '' , 'MBR_NM' => '', 'MBR_SEQ' => '');
            $this->session->unset_userdata($data);
            $data           = array("MBR_LEV_YN"=>"Y");
            $this->m_member->updateMember($MBR_ID , $data);
            redirect("/");

        }else{
            echo "<script>alert('로그인 후 이용바랍니다');location.href='/'</script>";
        }

    }

    //1:1상담관리
    function consulting(){

        $MBR_ID = $this->session->userdata("MBR_ID");

        $this->data["result"]        = $this->m_member->selectUser($MBR_ID);
        

        if(count($this->data["result"] ) > 0){
            
            $this->data['tot_row']          = $this->m_member->selectConsultingCount($MBR_ID);
            $this->data['cur_num']          = $this->data['tot_row'] - $this->data['size'] * ($this->data['cur_page']-1);
            $this->paging->init($this->data);
            $this->data['paging']           = $this->paging->create_front_page($this->data['size'], $this->data['page']);
            $this->data['result']           = $this->m_member->selectConsulting($MBR_ID);

            $this->load->view('member/consulting' , $this->data);
            
        }else{
            echo "<script>alert('로그인 후 이용바랍니다');location.href='/'</script>";
        }


        if ($MBR_ID != ""){
            $this->load->view('member/consulting');
        }else{
            echo "<script>alert('로그인 후 이용바랍니다');location.href='/'</script>";
        }
        
    }

    //1:1상담관리 view
    function consulting_view(){

        $MBR_ID = $this->session->userdata("MBR_ID");

        $this->data["result"]        = $this->m_member->selectUser($MBR_ID);


        if(count($this->data["result"] ) > 0){

            $seq                            = $this->input->get_post('seq');
            $this->data['result']           = $this->m_member->selectConsultingView($seq);


            $preview                        = $this->m_member->selectConsultingChangePreview($MBR_ID, $seq);
            $next                           = $this->m_member->selectConsultingChangeNext($MBR_ID, $seq);
            if($preview->num_rows() > 0) {
                $row = $preview->row();
                $this->data['preview'] = $row->preview;
            }

            if($next->num_rows() > 0) {
                $row = $next->row();
                $this->data['next'] = $row->next;
            }

            $this->load->view('member/consulting_view', $this->data);

        }else{
            echo "<script>alert('로그인 후 이용바랍니다');location.href='/'</script>";
        }


        if ($MBR_ID != ""){
            $this->load->view('member/consulting');
        }else{
            echo "<script>alert('로그인 후 이용바랍니다');location.href='/'</script>";
        }

    }

    
}
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Consult extends CI_Controller {
	function __construct()
	{
		parent::__construct();


        $admin = $this->session->userdata("idx");
        if($admin == ""){
            redirect("admin/session", "refresh");
        }

        error_reporting(E_ALL);
        ini_set("display_errors", 1);
		
        $this->load->model("admin/m_consult");
        $this->load->model("admin/m_sms");
        $this->data['page']             = $this->input->get_post('page')? $this->input->get_post('page') : 1;
        $this->data['size']             = $this->input->get_post('size')? $this->input->get_post('size') : 20;
        $this->data['start_date']       = $this->input->get_post('start_date');
        $this->data['end_date']         = $this->input->get_post('end_date');
        $this->data['is_answer']        = $this->input->get_post('is_answer');
        $this->data['delete']           = $this->input->get_post('delete')? $this->input->get_post('delete') : "N";
        $this->data['search_field']     = $this->input->get_post('search_field');
        $this->data['search_string']    = $this->input->get_post('search_string');
        $this->data['base_url']         = current_url() ."?delete=" . $this->data['delete'] . "&is_answer=" . $this->data['is_answer'] . "&search_string=" . $this->data['search_string'] . "&start_date=" . $this->data['start_date'] . "&end_date=" . $this->data['end_date'];
        $this->data['cur_page']         = $this->data['page'];
        $this->data['row_cnt']          = 0;

        //$this->output->enable_profiler(true);
	}

	var $data=null;

	public function index(){
		$m=0; //1depth
		$s=0;//2depth

		/*$limit=$this->input->get("listcount");
		if (!$limit) $limit=10;

		$offset=$this->input->get("offset");
		if (!$offset) $offset=0;*/

		//left 데이터 가져오기
		/*$tmp=Common::getNaviArr($this->config->item("menu"),$m,$s);
		$this->data['menu']=$tmp['menu'];
		$this->data['location']=$tmp['location'];*/


		$this->data["tot_row"]          = $this->m_consult->selectConsultCount($this->data['is_answer'], $this->data['search_field'], $this->data['search_string'],$this->data['start_date'],$this->data['end_date']);
        $this->data['cur_num']          = $this->data['tot_row'] - $this->data['size'] *($this->data['cur_page']-1);
        $this->paging->init($this->data);
        $this->data['paging']           = $this->paging->create_page($this->data['size'], $this->data['page']);
		$this->data["result"]           = $this->m_consult->selectConsult($this->data['size'], $this->data['cur_page'], $this->data['is_answer'], $this->data['search_field'], $this->data['search_string'],$this->data['start_date'],$this->data['end_date']);


		$this->load->view('admin/consult/consult_list',$this->data);
	}
    //상세페이지
	public function view(){
		$m=0; //1depth
		$s=0;//2depth


		$this->data['seq']      = $this->input->get_post("seq");

        $this->data['result']   = $this->m_consult->selectConsultOne($this->data['seq']);

        //답변글 선택
        $this->data["ans"]      = $this->m_consult->selectAnswerList();
        //관리자SMS
        $this->data["sms"]      = $this->m_consult->selectSMS();
        //상담 진행 상황
        $this->data['entry']    = $this->m_consult->selectCategory("KAAA");
        //진료팀
        $this->data["teams"]    = $this->m_consult->selectTeam();



        $this->load->view("admin/consult/consult_view", $this->data);

		//left 데이터 가져오기
		/*$tmp=Common::getNaviArr($this->config->item("menu"),$m,$s);
		$this->data['menu']=$tmp['menu'];
		$this->data['location']=$tmp['location'];*/

		//값이있을경우만 가져오기
		//$this->data["rs"] = $rs = $this->m_consult->get_view($seq);





		/*$params = getenv("QUERY_STRING");
		$this->data['qs'] = Common::remove_qs($params,"seq");

		if($seq){
			$this->data["action"] = "/backend/consult/edit?".$this->data['qs'];
			$this->data["strmode"] = "수정";
		}else{
			$this->data["action"] = "/backend/consult/write";
			$this->data["strmode"] = "등록";
		}

		$this->load->view('backend/reservation/consult_view.tpl',$this->data);*/
	}

    //답변글 선택시
    public function answer(){
        $this->yield        = FALSE;
        $seq                = $this->input->post("seq");

        $result             = $this->m_consult->selectAnswer($seq);

        echo $result->CA_CONT;
    }

    public function registProcess(){
        $this->yield        = FALSE;

        $CL_SEQ             = $this->input->post("CL_SEQ");
        $CA_SEQ             = $this->input->post("CA_SEQ");
        $CL_advence         = $this->input->post("CL_advence");
        $CL_ANS             = $this->input->post("CL_ANS");
        $CL_csTeam          = $this->input->post("CL_csTeam");
        $CL_ANS_NM          = $this->input->post("CL_ANS_NM");
        $CL_ANS_TEAM        = $this->input->post("CL_ANS_TEAM");
        $CL_ANS_YN          = $this->input->post("CL_ANS_YN");
        $data               = array("CA_SEQ"=>$CA_SEQ, "CL_advence"=>$CL_advence, "CL_ANS"=> $CL_ANS, "CL_csTeam"=>$CL_csTeam, "CL_ANS_NM"=>$CL_ANS_NM, "CL_ANS_TEAM"=>$CL_ANS_TEAM);

        if($CL_ANS_YN == "N"){
			$data['CL_ANS_YN']		= 'Y';
            $data['CL_ANS_YMDT']    = date('Y-m-d H:i:s');
        }
        $result             = $this->m_consult->updateProcess($data, $CL_SEQ);

        echo $result;
    }

	/*public function edit(){
		$this->load->library('form_validation');
	    $this->form_validation->set_rules('CL_ANS', '답변', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			echo validation_errors();
			exit();
		}

		$CL_SEQ=$this->input->post("CL_SEQ");
		$SM_SEQ=$this->input->post("SM_SEQ");
		$CA_SEQ=$this->input->post("CA_SEQ");
		$CL_advence=$this->input->post("CL_advence");
		$CL_ANS=$this->input->post("CL_ANS");
		$CL_csTeam=$this->input->post("CL_csTeam");
		$CL_ANS_NM=$this->input->post("CL_ANS_NM");
		$CL_ANS_TEAM=$this->input->post("CL_ANS_TEAM");
		$ConsultCheck1=$this->input->post("ConsultCheck1");
		$ConsultCheck2=$this->input->post("ConsultCheck2");
		$ConsultCheck3=$this->input->post("ConsultCheck3");
		$ConsultCheck4=$this->input->post("ConsultCheck4");
		$ConsultCheck5=$this->input->post("ConsultCheck5");
		$ConsultCheck6=$this->input->post("ConsultCheck6");



		//문의데이터 가져오기
		$rs = $this->m_consult->get_view($CL_SEQ);


		if (!$rs['ConsultCheck4']) $tmp=0;
		else $tmp=$rs['ConsultCheck4'];

		$this->m_consult->get_edit($SM_SEQ, $CA_SEQ, $CL_advence, $CL_ANS, $CL_csTeam, $_SESSION['admin_name'], $CL_ANS_TEAM, $ConsultCheck1,$ConsultCheck2,$ConsultCheck3,$ConsultCheck4,$ConsultCheck5,$ConsultCheck6,$CL_SEQ);

		$params = getenv("QUERY_STRING");
		$this->data['qs'] = Common::remove_qs($params,"seq");

		Common::AlertAndGo("등록되었습니다.","/backend/consult/view/?seq=$CL_SEQ&".$this->data['qs']);
	}*/

	public function send_mail() {
		$seq=$this->input->post("seq");
		$msg=$this->input->post("msg");
		$cancer=$this->input->post("cancer");

		$consult=$this->m_consult->get_view($seq);

		$cancer_arr=array(
"기타(더 보기 시 암정보 페이지로 이동)
홈페이지의 암클리닉 메뉴를 통해 각종 암과 관련된 다양한 정보를 제공하고 있습니다.",
"위암
조기위암이랑 암이 점막층과 점막하층에 국한된 초기 단계에 해당하는 위암을 뜻하며, 진행성 위암은 점막하층을 지나 근육층 및 그 이상의 단계로 진행한 위암을 뜻합니다.",
"간암
간 자체는 혈관과 림프관 등이 풍부하고 그물처럼 잘 발달되어 있어 간 내 암 전이가 잘 일어나므로 처음 진단 시에 이미 여러 군데서 암이 발견될 수 있습니다.
한편 간세포선종, 국소결절과증식, 혈관종, 간낭종 등은 악성종양인 암과 달리 세포증식을 스스로 억제하는 기능이 있어 무한정 커지지는 않는 양성종양에 해당됩니다. 간에 생기는 양성종양은 대부분 남성보다 여성에 많으며 타 장기로 전이하지 않습니다.",
"폐암
폐암이란 폐에 생긴 악성 종양을 말하며, 암세포가 폐를 구성하는 조직에서 발생한 원발성 폐암과 암세포가 다른 기관에서 생겨나 혈관이나 림프관을 타고 폐로 이동해 증식하는 전이성 폐암으로 나뉩니다.
정상적인 세포가 반복적인 자극이나 발암물질에 노출되면 세포수가 비정상적으로 증가하는 과 증식과정을 거치게 되고, 기능을 상실한 세포나 비정상적인 배열을 보이는 세포가 과잉성장을 하는 이형성 단계를 거듭하면 세포의 정상적인 경계를 벗어나 성장하는 신생물인 암이 됩니다.",
"대장암
결장과 직장에 생기는 악성 종양을 말하며, 암이 발생하는 위치에 따라 결장에 생기는 암을 결장암, 직장에 생기는 암을 직장암이라고 하고, 이를 통칭하여 대장암 혹은 결장직장암이라고 합니다.",
"담도/담낭암
담도(쓸개관)암과 담낭(쓸개)암은 각각 담도와 담낭에서 생기는 암세포로 이루어진 종괴로 담도/담낭 세포에서 발생하는 선암종이 거의 대부분을 차지하고 있습니다.",
"췌장암
췌장암은 일반적으로 치료가 매우 어렵고 예후가 좋지 않은 암으로 여겨집니다. 췌장암의 2년 생존율은 10% 내외에 불과하고 증상이 느껴져 병원을 찾더라도 이미 병이 진행되어 수술조차 할 수 없는 경우가 80~90%에 달하기 때문입니다. 
조기에 잘 전이되는 편이며 췌장암 덩어리에는 섬유화 조직이 많아 항암제가 암조직에 잘 도달하지 못하고 방사선치료 효과도 떨어집니다. 또한 다른 암에 비해 종양유전자 변이가 다양하고 환자 개개인 간에 암의 유전적 변이가 서로 달라 효과적인 치료제 개발 또한 쉽지 않은 상황입니다.",
"유방암
현재 유방암은 전 세계적으로 급증하고 있는 암종 중 하나로서 미국 여성 7명중 1명이 유방암에 걸리고 33명중 1명은 유방암으로 사망한다. 상대적으로 유방암 발병이 드물었던 우리나라를 비롯한 아시아권 또한 식습관이 서구화 됨에 따라 유방암 급증의 양상을 보이고 있습니다.",
"난소암
여성 생식과 호르몬 분비에 중요한 역할을 담당하는 난소에서 발생하는 암을 가리킵니다. 난소암은 암이 발생하는 조직에 따라 크게 상피세포암, 배세포종양, 그리고 성삭 기질 종양으로 구분됩니다.
난소암의 90% 이상이 난소 표면의 상피세포에서 발생하는 상피성 난소암 입니다.",
"자궁경부암
자궁의 입구인 자궁경부에 발생하는 여성 생식기 암입니다.
자궁경부 표면의 정상 상피세포에서 시작하여 미세한 현미경학적인 변화가 발생하는 자궁경부 상피내이형성증(정상조직과 암조직의 중간)을 거쳐, 상피내에만 암세포가 존재하는 자궁경부상내피암(자궁경부암 0기)으로 진행하게되고, 이 단계에서도 발견하여 치료하지 못하면 다시 침윤성 자궁경부암으로 진행하게 됩니다.",
"갑상선암
갑상선에 혹이 생긴 것을 갑상선 결절이라 하며, 갑상선 결절은 크게 양성 결절과 악성 결절(암)로 나뉩니다. 악성결절을 총칭하여 갑상선암이라고 하는데, 악성 결절을 치료하지 않고 방치할 경우 다른 곳으로 암세포가 퍼져서 생명을 잃을 우려가 있습니다.",
"뇌종양
넓은 의미에서 뇌종양이란 두개골 안, 즉 두개강에 생기는 종양을 말하며 뇌실질 또는 뇌, 뇌막,뇌혈관 또는 신경 등 뇌 구조물에 발생하는 모든 종양이 뇌종양의 개념에 포함된다.
원발성 뇌종양은 두 부류로 나뉘는데, 주변의 신경조직을 침윤하는 신경교증과 뇌조직을 침윤하지 않고 압박하는 비교종성 종양으로 나뉩니다.",
"혈액암
골수의 정상 혈액세포가 어떠한 원인으로 인해 암세포로 전환된 것이 백혈병 세포인데, 이것은 끝없이 증식하여 정상 혈액 세포가 자라날 공간을 차지하게 되고 다라서 적혈구, 백혈구 및 혈소판의 수가 줄어들게 됩니다.
골수에서 말초 혈액으로 나온 백혈병 세포들은 혈액을 따라 전신에 퍼지게 되고 간이나 비장, 림프선 뿐 아니라 뇌, 척수와 같은 중추신경계를 침범할 수있 습니다.",
"흑색종
피부에 발생하는 흑색종은 주로 기저층에 산재하여 있는 멜라닌세포에서 발생합니다. 악성흑색종이란 멜라닌세포의 악성 종양으로서 멜라닌세포가 존재하는 곳에는 어느 부위에나 발생할 수 있으나 피부에 가장 많이 발생합니다.
흑색종은 이 멜라닌세포 또는 모반세포(점의세포)의 악성형질변환으로 정의할 수 있으며 악성도가 높습니다.",
"림프종
전신의 림프절 혹은 림프기관(비장, 편도선 등)에서 발생하는 암 입니다.
암으로 호지킨병과 비호지킨 림프종으로 대별되며 호즈킨병에서는 보통 머리나 목 부위에서 림프절 종대가 잘 생깁니다. 이 림프절은 서서히 자라고 통증이 없으며 단단합니다."
);


		switch($cancer) {
			case 1:$code="HAAAAAAA";break;
			case 2:$code="HAAAAAAB";break;
			case 3:$code="HAAAAAAC";break;
			case 4:$code="HAAAAAAD";break;
			case 5:$code="HAAAAAAE";break;
			case 6:$code="HAAAAAAF";break;
			case 7:$code="HAAAAAAG";break;
			case 8:$code="HAAAAAAH";break;
			case 9:$code="HAAAAAAI";break;
			case 10:$code="HAAAAAAK";break;
			case 11:$code="HAAAAAAO";break;
			case 12:$code="HAAAAAAP";break;
			case 13:$code="HAAAAAAQ";break;
			case 14:$code="HAAAAAAR";break;
			default:$code="";break;
		}

		$exists_arr=array(1,2,3,6,7,10,11);

		$rs=$this->m_consult->get_view($seq);


		//========= 메일 발송 =======================================
		$fp = fopen("./mailform/consult.htm", "r");
		$mailhtml = fread($fp,1024*8);
		fclose($fp);

		$mailhtml = str_replace("[HTTPURL]", URL, $mailhtml );
		$mailhtml = str_replace("[TITLE]", $rs["CL_TTL"], $mailhtml );
		$mailhtml = str_replace("[CONTENTS]", nl2br($rs["CL_CONT"]), $mailhtml );
		$mailhtml = str_replace("[ANSWER]", nl2br($msg), $mailhtml );
		$mailhtml = str_replace("[CANCER]", nl2br(Common::truncate($cancer_arr[$cancer],180)), $mailhtml );

		if (in_array($cancer,$exists_arr)) {
			$link=URL."/clinic/cancer_info?code=".$code;
		} else {
			$link=URL;
		}
		$mailhtml = str_replace("[MORE_LINK]", $link, $mailhtml);
	
		$to_address  = $rs["CL_EMAIL"]; //받는이
		$from_name = "소람한방병원"; //보내는이 이름
		$from_address = FROM_MAIL; //보내는이
		$subject = "1:1 상담 답변입니다.";

		send_mail($to_address,$from_name,$from_address,$subject,$mailhtml,2);
		//========= 메일 발송 =======================================


		echo("SUCCESS");exit();
	}

	/*public function send_sms() {
		$seq=$this->input->post("seq");
		$sm_seq=$this->input->post("sm_seq");

		if (!$sm_seq) {
			echo("FAIL");exit();
		}


		$sms=$this->m_sms->get_menu_send_sms($sm_seq);
		$consult=$this->m_consult->get_view($seq);

		$this->m_sms->insert_sms($consult['CL_CPH'],FROM_PHONE,$sms['SM_MSG']);

		echo("SUCCESS");exit();
	}*/
    //삭제
    public function deleteProcess(){
        $this->yield        = FALSE;

        $CL_SEQ             = $this->input->post("CL_SEQ");

        if($CL_SEQ != ""){
            $data           = array("CL_DEL_FLAG"=>"Y");
            $result         = $this->m_consult->updateProcess($data, $CL_SEQ);

            echo $result;
        }
    }

	public function delete(){
		$seq=$this->input->get("seq");
		if(empty($seq)){
			Common::AlertAndGo("잘못된 접근입니다.","/backend/consult");
			exit();
		}

		$this->m_consult->get_delete($seq);
		Common::AlertAndGo(" 삭제되었습니다.","/backend/consult");
	}


}
<?php
	class RegisterControl extends CI_Controller
	{
		public function __construct()
		{	
			parent::__construct();
			$this->pageHeader='Member';		
			$this->page_redirect="registerControl";							
			$this->load->model("account_m","am");
			$this->userLog="Admin";
		}
		function index(){
			$row=$this->am->account_code();
			if($row==TRUE){ $data["acc_code"] = $row->acc_code;}
			$data['action'] = "{$this->page_redirect}/add";		
			$data['pageHeader'] = $this->pageHeader;
			$data['cancel'] = "{$this->page_redirect}/acc_log";	
			if($this->session->language=="eng"){
				$this->load->view("layout_site/herder_and_nav");
			}else{
				$this->load->view("layout_site/herder_and_nav_kh");
			} 	
			$this->load->view('layout_site/left'); 
			$this->load->view('register/register',$data);
			/*$this->load->view('layout_site/advertising');*/
			$this->load->view('layout_site/footer');
		}// redirect to register page

		function add()
		{	
			/*$this->form_validation->set_rules('txtAccPass',' password','required');	
			$this->form_validation->set_rules('txtConPasswd','Confirm','required');*/
			$this->form_validation->set_rules('txtAccName','Name','required');	
			/*$this->form_validation->set_rules('txtDOB','Date Of Birth','required');
			$this->form_validation->set_rules('txtAddr','Address','required');
			$this->form_validation->set_rules('txtEmail','Email','required');	
			$this->form_validation->set_rules('txtDesc','Description','required');
			$this->form_validation->set_rules('txtPhone','Number','required');	*/
			if($this->form_validation->run()==false){
				/*$this->load->view("admin/member_log");*/
				$this->index();
			}else{
				$result = $this->am->add();
				if(!$result==""){
					$this->load->view("acc_log");
				}
			}
		}//register new member 
	}
?>
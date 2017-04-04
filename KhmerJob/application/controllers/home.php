<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Home extends CI_Controller 
	{
		 function __construct(){
			parent::__construct();
			$this->load->model('front/account_m','acc');
			$this->load->model('front/contact_us_m','ct');
			$this->load->model('front/about_us_m','au');
			$this->load->model('front/ads_setup_m',"ads");
			$this->load->model('front/promotion_m',"pt");
			$this->load->model('front/FAQ_m');
			/*$this->load->model('fornt/post_cv','pcv');*/
		}
		function session(){
			if(isset($_POST["kh"])){
            $this->session->language = "kh";
            }else{
                $this->session->language = "eng";
            }
            $this->index();
		}
		public function	switch_language(){
			if($this->session->language=="kh"){
				$this->load->view("layout_site/herder_and_nav_kh");
			}else{
				$this->load->view("layout_site/herder_and_nav");
			} 	
		}
		public function index(){
			$this->switch_language();
			$this->load->view('layout_site/cv_job_skill'); 
			$this->load->view('layout_site/search_filter'); 
			$this->load->view('content_home_page');
			$this->load->view('layout_site/advertising'); 
			$this->load->view('layout_site/footer');
		}
		public function head_left(){
			$this->switch_language();      
			$this->load->view('layout_site/left'); 
		}
		public function right_foot(){
			$this->load->view('layout_site/right');
			$this->load->view('layout_site/footer');
		}

		public function cv(){
			$this->switch_language(); 
			/*$this->load->view('layout_site/search_filter'); */     
			$this->load->view('cv/cv');
			$this->load->view('layout_site/advertising');
			$this->load->view('layout_site/footer');
		}

		public function cv_post(){
			if(isset($this->session->acc_log)){
				$this->head_left();
				$this->load->view('cv/cv_post');
				$this->right_foot();	
			}else{
				$this->load->view("acc_log");
			}
		}
		public function job(){
			$this->switch_language();       
			$this->load->view('layout_site/cv_job_skill'); 
			/*$this->load->view('layout_site/search_filter'); */
			$this->load->view('job/job');
			//$this->load->view('layout_site/advertising'); 
			$this->load->view('layout_site/footer');
		}
		public function skill(){
			$this->switch_language(); 
			/*$this->load->view('layout_site/register_logout');*/
			$this->load->view('layout_site/search_filter');
			$this->load->view('skill/skill');
			$this->right_foot();
		}
		public function service(){
			$this->switch_language();      
			$this->load->view('layout_site/cv_job_skill'); 
			$this->load->view('layout_site/search_filter'); 
			$this->load->view('service');
			//$this->load->view('layout_site/advertising'); 
			$this->load->view('layout_site/footer');      
		}
		public function promotion(){
			$data["promotion"]=$this->pt->index();

			$this->switch_language();      
			$this->load->view('layout_site/cv_job_skill'); 
			$this->load->view('layout_site/search_filter'); 

			if($data["promotion"]==TRUE){ 	
			$this->load->view('promotion',$data);
			//$this->load->view('layout_site/advertising'); 
			}
			$this->load->view('layout_site/footer');
		}
		/*public function advertising(){
			$data["ads"]=$this->ads->index();
			if($data["ads"]==TRUE){
				$this->load->view("layout_site/advertising",$data);
			}
		}*/
		public function advertisement(){
			$data["ads"]=$this->ads->index();
			$this->switch_language();  
			$this->load->view('layout_site/cv_job_skill'); 
			$this->load->view('layout_site/search_filter');
			if($data["ads"]==TRUE){
			}
			$this->load->view('layout_site/advertising');
			$this->load->view('layout_site/footer');  
		}

		public function validation()
		{
			$this->form_validation->set_rules('oPrty','Priorirty','required');
	        $this->form_validation->set_rules('oPD','priority Duration','required');
	        $this->form_validation->set_value('oPM','Position Matched','required');
	        $this->form_validation->set_value('oCategory','Category','required');
	        $this->form_validation->set_value('txtName','Priorirty','required');
	        $this->form_validation->set_value('txtAddr','priority Duration','required');
	        $this->form_validation->set_value('txtfacebook','Facebook','required');
	        $this->form_validation->set_value('txtTwiter','Twiter','required');
	        $this->form_validation->set_value('txtEmail','Email','required');
	        $this->form_validation->set_value('txtG1','G+1','required');
	        $this->form_validation->set_value('txtDOB','Date Of Birht','required');
	        $this->form_validation->set_value('txtPOB','Pleace Of Birth','required');
	        $this->form_validation->set_value('txtNationality','Nationality','required');
	        $this->form_validation->set_value('txtMarital','Marital','required');
	        $this->form_validation->set_value('oGD','Gender','required');
	        $this->form_validation->set_value('taWE','Work Experience','required');
	        $this->form_validation->set_value('atEducation','Education','required');
	        $this->form_validation->set_value('taLanguage','Language','required');
	        $this->form_validation->set_value('taOskill','Orther Skill','required');
	        $this->form_validation->set_value('taSCT','Short Course Training','required');
	        $this->form_validation->set_value('taHobby','Hobby','required');
	        $this->form_validation->set_value('taReference','Reference','required');
	        $this->form_validation->set_value('taAbout','About Me','required');
		      
		}
		public function acc_log()
		{		 
			if(isset($_POST["btn_log"]))
				{ 
				$a= $this->form_validation->set_rules('txtEmail','Email','required');
				/*$this->form_validation->set_rules('txtPassword','Password','required');*/
				if($this->form_validation->run()==false){
					$this->load->view("acc_log");
				}else{
					$email = $this->input->post('txtEmail');
					$pass = $this->input->post('txtPassword');
					$result = $this->acc->validateemail($email);
					if($result==0)
					{
						$data["msg"] = "Incorrect Username";
						$this->load->view('acc_log',$data);	
					}else
					{
						$result = $this->acc->validatePassword($pass);
						if($result!=0)
						{
							$this->session->acc_log = $email;
							$this->session->acc_log;
							$this->head_left();
							$this->acc->index();
							$this->load->view("cv/cv_post");
							$this->right_foot();
						}else
						{
							$data['msg'] = "Incorrect Password!!!";
							$this->load->view("acc_log",$data);
						}
					}
				}
			}
			
		}
		public function action()
		{		
				$this->validation();
				if(!$this->form_validation->run()==false){
					$data['oPrty']= $this->input->post('oPrty');
					$data['oPD'] = $this->input->post('oPD');
					$data['oPM']  =	$this->input->post('oPM');
					$data['oCategory'] = $this->input->post('oCategory');
					$data['oYearEp'] = $this->input->post('oYearEp');
					$data['txtName'] = $this->input->post('txtName');
					$data['Tel'] = $this->input->post('Tel');
					$data['txtAddr'] = $this->input->post('txtAddr');
					$data['txtfacebook'] = $this->input->post('txtfacebook');
					$data['txtTwiter'] = $this->input->post('txtTwiter');
					$data['txtEmail'] = $this->input->post('txtEmail');
					$data['txtG1'] = $this->input->post('txtG1');
					$data['txtDOB'] = $this->input->post('txtDOB');
					$data['txtPOB'] = $this->input->post('txtPOB');
					$data['txtMarital'] = $this->input->post('txtMarital');
					$data['txtNationality'] = $this->input->post('txtNationality');
					$data['oGD'] = $this->input->post('oGD');
					$data['taWE'] = $this->input->post('taWE');
					$data['atEducation'] = $this->input->post('atEducation');
					$data['taComputer'] = $this->input->post('taComputer');
					$data['taLanguage']	= $this->input->post('taLanguage');
					$data['taOskill'] = $this->input->post('taOskill');
					$data['taSCT'] = $this->input->post('taSCT');
					$data['oES'] = $this->input->post('oES');
					$data['taHobby'] = $this->input->post('taHobby');
					$data['taReference'] = $this->input->post('taReference');
					$data['taAbout'] = $this->input->post('taAbout');
				
					if(isset($_POST["btnSubmit"]))
					{
						$this->pcv->add($data);

					}else if(isset($_POST["btnPriview"])){
						$this->switch_language();
						$this->load->view('layout_site/left'); 
						$this->load->view("cv/priview",$data);
						$this->load->view('layout_site/advertising');
						$this->load->view('layout_site/footer');
					}else if(isset($_POST["btnPrint"]))
					{	
						$this->load->view("cv/print_cv");
					}
			}else{
				
			}
		}
		function prints()
		{
			echo "string";
			$this->load->view("cv/print_cv");
		}
		
		public function about(){
			$data["about"]=$this->au->index();
			$this->head_left();
			if($data["about"]==TRUE){
			$this->load->view('about',$data);
			}
			$this->right_foot();
		}
		public function contact_us(){
			$data["contacts"] = $this->ct->index();
			$this->head_left();	
			if($data["contacts"]==TRUE){
			$this->load->view('contact_us',$data);
			}
			$this->load->view('layout_site/advertising');
			$this->load->view('layout_site/footer');
		}		
		public function FAQ(){
			$data["FAQ"] = $this->FAQ_m->index();
			$this->head_left();
			if($data["FAQ"]==TRUE){
				
				$this->load->view('FAQ',$data);
			}
			$this->right_foot();
		}
	public function logout(){
		session_destroy();
		$this->index();
	}
		
	}
	
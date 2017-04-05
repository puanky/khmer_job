<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Job_c extends CI_Controller 
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
				$this->load->view("template_frontend/herder_and_nav_kh");
			}else{
				$this->load->view("template_frontend/herder_and_nav");
			} 	
		}
		public function index(){
			$this->switch_language();
			$this->load->view('template_frontend/cv_job_skill'); 
			$this->load->view('template_frontend/search_filter'); 
			$this->load->view('content_home_page');
			$this->load->view('template_frontend/advertising'); 
			$this->load->view('template_frontend/footer');
		}
		public function post_job()
		{
			$this->switch_language();
			//$this->load->view('template_frontend/cv_job_skill'); 
			$this->load->view("job/post_job");
			$this->load->view('template_frontend/footer');
		}
		public function head_left(){
			$this->switch_language();      
			$this->load->view('template_frontend/left'); 
		}
		public function right_foot(){
			$this->load->view('template_frontend/right');
			$this->load->view('template_frontend/footer');
		}

		public function cv(){
			$this->switch_language(); 
			/*$this->load->view('template_frontend/search_filter'); */     
			$this->load->view('cv/cv');
			$this->load->view('template_frontend/advertising');
			$this->load->view('template_frontend/footer');
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
	}
	
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Home extends CI_Controller 
	{
		public function __construct()
		{
			parent::__construct();
			
		}
		
		public function index()
		{
			
			$this->load->view('template_frontend/herder_and_nav');       
			$this->load->view('template_frontend/cv_job_skill'); 
			$this->load->view('template_frontend/search_filter'); 
			$this->load->view('content_home_page');
			$this->load->view('template_frontend/advertising'); 
			$this->load->view('template_frontend/footer');    

		}
		#=============== function index ================================

		public function service()
		{

			$this->load->view('template_frontend/herder_and_nav');       
			$this->load->view('template_frontend/cv_job_skill'); 
			$this->load->view('template_frontend/search_filter'); 
			$this->load->view('service');
			$this->load->view('template_frontend/footer');  

		}
		#=============== function service ===============================

		public function contact()
		{

			$this->load->view('template_frontend/herder_and_nav');       
			$this->load->view('template_frontend/cv_job_skill'); 
			$this->load->view('template_frontend/search_filter'); 
			$this->load->view('contact_us'); 
			$this->load->view('template_frontend/footer'); 

		}
		#=============== function contact ===============================

		public function promotion()
		{

			$this->load->view('template_frontend/herder_and_nav');       
			$this->load->view('template_frontend/cv_job_skill'); 
			$this->load->view('template_frontend/search_filter'); 
			$this->load->view('promotion');
			$this->load->view('template_frontend/footer');  

		}
		#=============== function promotion ==============================

		public function advertisement()
		{

			$this->load->view('template_frontend/herder_and_nav');       
			$this->load->view('template_frontend/cv_job_skill'); 
			$this->load->view('template_frontend/search_filter'); 
			$this->load->view('advertisement');
			$this->load->view('template_frontend/footer'); 

		}
		#=============== function advertisement ===========================

		public function job()
		{

			$this->load->view('template_frontend/herder_and_nav');       
			$this->load->view('job/job');
			$this->load->view('template_frontend/advertising'); 
			$this->load->view('template_frontend/footer');

		}
		#=============== function job =====================================

		public function postjob()
		{

			$this->load->view('template_frontend/herder_and_nav');       
			$this->load->view('template_frontend/left'); 
			$this->load->view('job/post_job');
			$this->load->view('template_frontend/right'); 
			$this->load->view('template_frontend/footer');

		}
		#=============== function postjob ================================

		public function jobdetail()
		{

			$this->load->view('template_frontend/herder_and_nav');  
			$this->load->view('job/job_detail');
			$this->load->view('template_frontend/register_and_login'); 
			$this->load->view('template_frontend/advertising'); 
			$this->load->view('template_frontend/footer');
			
		}
		#=============== function jobdetail =============================

		public function jobcategory()
		{

			$this->load->view('template_frontend/herder_and_nav');  
			$this->load->view('job/job_category');
			//$this->load->view('template_frontend/register_and_login'); 
			$this->load->view('template_frontend/advertising'); 
			$this->load->view('template_frontend/footer');
			
		}
		#=============== function jobcategory =============================

		public function skill()
		{

			$this->load->view('template_frontend/herder_and_nav');       
			$this->load->view('skill/skill');
			$this->load->view('template_frontend/advertising'); 
			$this->load->view('template_frontend/footer');

		}
		#=============== function jobcategory =============================

		public function postskill()
		{

			$this->load->view('template_frontend/herder_and_nav');       
			$this->load->view('template_frontend/left'); 
			$this->load->view('skill/post_skill');
			$this->load->view('template_frontend/right'); 
			$this->load->view('template_frontend/footer');

		}
		#=============== function postskill =============================

		public function skillcategory()
		{

			$this->load->view('template_frontend/herder_and_nav');  
			$this->load->view('skill/skill_category');
			//$this->load->view('template_frontend/register_and_login'); 
			$this->load->view('template_frontend/advertising'); 
			$this->load->view('template_frontend/footer');
			
		}
		#=============== function skillcategory =============================

		public function skilldetail()
		{

			$this->load->view('template_frontend/herder_and_nav');  
			$this->load->view('skill/skill_detail');
			$this->load->view('template_frontend/register_and_login'); 
			$this->load->view('template_frontend/advertising'); 
			$this->load->view('template_frontend/footer');
			
		}
		#=============== function skilldetail =============================

	}// Class
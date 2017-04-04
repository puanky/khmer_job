<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class User_account extends CI_Controller 
	{
		public function __construct()
		{
			parent::__construct();
			
		}
		
		public function index()
		{
			$this->load->view('layout_site/herder_and_nav'); 
			$this->load->view('layout_site/left');      
			$this->load->view('user_account');  
			$this->load->view('layout_site/footer');      
		}
		public function about(){
			    
		}
		
		
	}

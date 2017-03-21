<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Homekh extends CI_Controller 
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('Home_m','hm');
			$this->load->model('Product_M','pm');
		}

		public function index()
		{
			$data["mq"]=$this->hm->marquee();
			$data["advertisement"]=$this->hm->adv();
			$data['category_kh']=$this->hm->categorykh();
			$data["slide_once"]=$this->hm->slideshow_once(); // fist Slide
			$data["slide_multi"]=$this->hm->slideshow();     // Next Slide

			$this->load->view('layout_site/header_top', $data); // Header top
			$this->load->view('layout_site/nav_kh', $data);        // Navigation
			$this->load->view('layout_site/slideshow', $data);  // Slideshow
			$this->load->view('home_v', $data);   // Category and Bastseller
			$this->load->view('layout_site/footer');         
		}

		public function categorykh()
		{
			$data['advertisement']=$this->hm->adv();
			$data['category_kh']=$this->hm->categorykh();
			//$data['itemNum'] = $this->itemNum;
			
			$this->load->view('layout_site/header_top');
			$this->load->view('layout_site/nav_kh',$data);
			$this->load->view('layout_site/category_v', $data);
			$this->load->view('layout_site/footer');
		}
	}
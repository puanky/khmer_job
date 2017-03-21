<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Blog extends CI_Controller 
	{
		private $limit = 3;
		public function __construct()
		{
			parent::__construct();
			// $this->load->model('Home_m','hm');
			 $this->load->model('Blog_m','bm');
			 $this->load->library('pagination');
		}

		public function index()
		{
			
				$keyword=$this->input->post('keyword');
			
	        $data['blog']=$this->bm->search($keyword, $this->limit); // Search blog
			$data['popular_blog']=$this->bm->popular_blog();

			$total_rows=$this->bm->count();
    

	        $config['total_rows']=$total_rows;
	        $config['per_page']=$this->limit;
	        $config['uri_segment']=3;
	        $config['base_url']=site_url("blog/index");
        
	        $this->pagination->initialize($config);
	        $data['page_link']=$this->pagination->create_links();

			$this->load->view('layout_site/style');
			$this->load->view('blog', $data, compact($data));
			$this->load->view('layout_site/footer');
		
	        // $this->load->view('result_view',$data);
		}

		public function blog_detail($bl_id)
		{

			if($bl_id!="") 
			{
				//$keyword1=$this->input->post('keyword');
				$data["blog_comment"]=$this->bm->blog_comment($bl_id);
				$data['de_blog']=$this->bm->blog_detail($bl_id);
				$data['popular_blog']=$this->bm->popular_blog();
				$this->bm->comment();
				$this->load->view('layout_site/style');
				$this->load->view('blog_detail', $data);
				$this->load->view('layout_site/footer');
			}
		}

		#================== blog detail =========================


		// public function add_comment()
		// {

			
				
		// 		$this->bm->add();
		// 		redirect('blog/blog_detail/'.$this->segment(3));
		
		// }

		#=================== add comment ============================

		// public function add_comment()
		// {
		// 	if($bl_id!="") 
		// 	{
		// 		//$keyword1=$this->input->post('keyword');

		// 		$data['de_blog']=$this->bm->blog_detail($bl_id);
		// 		$data['popular_blog']=$this->bm->popular_blog();
		// 		$this->load->view('layout_site/style');
		// 		$this->load->view('blog_detail', $data);
		// 		$this->load->view('layout_site/footer');
		// 	}
		// }

		// public function search_keyword()
		// {
		// 	// $keyword=$this->input->post('keyword');

	 //  //       $data['blog']=$this->bm->search($keyword);
	 //  //       //$data["blog"]=$this->bm->index();
		// 	// $data["popular_blog"]=$this->bm->popular_blog();
		// 	// $this->load->view('layout_site/style');

		// 	$this->load->view('blog', $data);

		// 	$this->load->view('layout_site/footer');
	 //        // $this->load->view('result_view',$data);
		// }
	}
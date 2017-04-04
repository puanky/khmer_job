<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class marqueeController extends CI_Controller
{
	var $pageHeader,$page_redirect,$action,$cancel;
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('AdvertiseModel','am');
		$this->load->model('categoryModel','cm');
		$this->page_redirect = "admin/marquee";
		$this->action="marquee/add";
		$this->pageHeader="marquee";
		$this->cancel = "marquee";
	}

	public function index()
	{
		$data['pageHeader'] = $this->pageHeader;
		
		$data['tbl_hdr'] = array('Description');
		$i = 0;
		$row = $this->am->get_marquee();

		if($row==true)
		{
			foreach ($row as $value) 
			{
				$data['tbl_body'][$i] = array(
												$value->key_data1,
												
												$value->key_id
																						
											);
				$i++;
			}
		}
		
		$data["action_url"] = array($this->page_redirect.'/add',
									$this->page_redirect.'/edit',
									$this->page_redirect.'/delete') ;
		$this->load->view('template/header');
		$this->load->view('template/left');
		$this->load->view('admin/page_view',$data);
		$this->load->view('template/footer');

	}

	public function createCtrl()
	{
		$ctrl = array(
						
						array(
								"type"			=>	"textarea",
								"name"			=>	"txtDesc",
								"id"			=>	"txtDesc",
								"class"			=> 	"form-control",
								"label"			=> 	"Description",
								
							)
			);
		return $ctrl;
	}
	public function editCtrl($id)
	{
		$query = $this->am->get_marquee($id);

		$ctrl = array(
						
						array(
								"type"			=>	"textarea",
								"name"			=>	"txtDesc",
								"id"			=>	"txtDesc",
								"value"			=>	$query->key_data1,
								"class"			=> 	"form-control",
								"label"			=> 	"Description"
							)
			);
		return $ctrl;
	}
	public function add_marquee()
	{
		if(isset($_POST['btnSubmit']))
		{
			$this->am->insert_marquee();
			redirect("marquee");
		}
		else
		{
			$data['action'] = "marquee/add";
			$data['pageHeader'] = $this->pageHeader;
			$data['ctrl'] = $this->createCtrl();
			$data['cancel'] = $this->cancel;
			$this->load->view('template/header');
			$this->load->view('template/left');
			$this->load->view('admin/page_add',$data);
			$this->load->view('template/footer');
		}
	}
	public function edit_marquee($id="")
	{
		if($id!="")
		{
			if (isset($_POST['btnSubmit'])) 
			{
				$this->am->update_marquee($id);
				redirect("marquee");
			}else
			{
				$data['action'] = "marquee/edit/".$id;
				$data['pageHeader'] = $this->pageHeader;
				$data['ctrl'] = $this->editCtrl($id);
				$data['cancel'] = $this->cancel;
				$this->load->view('template/header');
				$this->load->view('template/left');
				$this->load->view('admin/page_edit',$data);
				$this->load->view('template/footer');
			}
		}
	}
	public function delete_marquee($id)
	{
		if(isset($id)&&$id!="")
		{
			$this->am->deleteaMrquee($id);
			redirect("marquee");
		}
	}
}
?>
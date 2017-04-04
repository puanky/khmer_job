<?php
	class blogController extends CI_Controller
	{
		var $pageHeader,$panelTitle,$cancelString;
		public function __construct()
		{
			parent::__construct();

			$this->pageHeader='Blog';
			$this->panelTitle='Blog';
			$this->cancelString = 'blog';
			$this->load->model('Blog_m','bm');
		}

		public function index($bl_id="")
		{
			
			$this->load->view('template/header');
			$this->load->view('template/left');
			$page="admin/blogController";
			$data['pageHeader'] = $this->pageHeader;					
			$data["action_url"]=array("{$page}/add","{$page}/edit","{$page}/delete"/*,"{$page}/change_password"*/);
			$data["tbl_hdr"]=array("Blog name","Description","User create","Date create","User update","Date update",);		
			$row=$this->bm->index($bl_id);		
			$i=0;		
			foreach($row as $value):			
				$data["tbl_body"][$i]=array(
											$value->title,
											substr($value->bl_desc, 0, 20)."...",
											$value->user_crea,								
											$value->date_crea,
											$value->user_updt,
											$value->date_updt,
											$value->bl_id
										);
				$i=$i+1;
			endforeach;								
				$this->load->view('admin/page_view',$data);
				$this->load->view('template/footer');
		} 

		# ============== select brand =========================

		public function add()
		{
			if(isset($_POST['btnSubmit']))
		{	
			$this->bm->insert_blog();
			redirect("admin/blogController");	
		}else
		{
			$data['action'] = "admin/blogController/add";
			$data['pageHeader'] = $this->pageHeader;
			$data['ctrl'] = $this->createCtrl();
			$data['cancel'] = "blog";
			$data['multipart'] = true;
			$this->load->view('template/header');
			$this->load->view('template/left');
			$this->load->view('admin/page_add',$data);
			$this->load->view('template/footer');
		}
		} 

		# ===================== add brand =================


		public function edit($id="")
		{
			
					$row= $this->bm->get_blog($id);
					$data['ctrl'] = $this->editCtrl($id);
					
					$data['action'] = '';
					$data['pageHeader'] = $this->pageHeader;
					$data['panelTitle'] = $this->panelTitle;
					$data['cancel'] = $this->cancelString;
				
				if(isset($_POST['btnSubmit']))
				{
					echo "<script>alert('');</script>;";
					$this->bm->update_blog($id);
					redirect('admin/blogController');
					
				}
			
			else
				{
					$this->load->view('template/header');
					$this->load->view('template/left');
					$this->load->view('admin/page_edit',$data);
					$this->load->view('template/footer');
				}
		
		}

		# ============= edit brand ===================

		public function delete($id="")
		{
			if ($id!="") 
			{
				$this->bm->delete_blog($id);
				redirect('admin/blogController');
			}
		}
		

		# ================ delete Brand ===============

		public function editCtrl($id=""){

		$query = $this->bm->get_blog($id);
		$pos = array("enable"=>"Enable","disable"=>"Disable");
		$ctrl = array(
				array(
							"type"	=>	"text",
							"name"	=>	"txtblogName",
							"id"	=>	"txtblogName",
							"class"	=>	"form-control",
							"placeholder"	=>	"Enter Ad Name here...",
							"value"	=>	set_value("txtAdName",$query->title),
							"label"	=>	"Blog Name",
							"required"	=> "required"
						),
					
					array(
							'type'	=>	'dropdown',
							'name'	=>	'ddlstatus',
							'id'	=>	'ddlstatus',
							'option'=>	$pos,
							'selected'	=> $query->status,
							'class'	=>	'class="form-control"',
							'label'	=>	'Position'
						),
					
					array(
								'type'	=>	'textarea',
								'name'	=>	'txtDesc',
								'id'	=>	'txtDesc',
								'class'	=>	'form-control',
								'value'	=>	set_value("txtDesc",$query->bl_desc),
								'label'	=>	'Description'
						)
			);
		return $ctrl;
	}
		

	public function createCtrl()
	{
		$pos = array("enable"=>"Enable","disable"=>"Disable");
		$ctrl = array(
					array(
							"type"	=>	"text",
							"name"	=>	"txtblogName",
							"id"	=>	"txtblogName",
							"class"	=>	"form-control",
							"placeholder"	=>	"Enter Blog Name here...",
							"label"	=>	"Blog Name",
							"required"	=> "required"
						),
					
					array(
							'type'	=>	'dropdown',
							'name'	=>	'ddlstatus',
							'id'	=>	'ddlstatus',
							'option'=>	$pos,
							'class'	=>	'class="form-control"',
							'label'	=>	'Status'
						),
					
					array(
								'type'	=>	'upload',
								'name'	=>	'txtUpload',
								'id'	=>	'txtUpload',
								'img'	=>	'',
								'label'	=>	'Image'
						),
					array(
								'type'	=>	'textarea',
								'name'	=>	'txtDesc',
								'id'	=>	'txtDesc',
								'class'	=>	'form-control',
								'label'	=>	'Description'
						)
				);
		return $ctrl;
	}

		# ================ Create Control form =======================

	} // Class
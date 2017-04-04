<?php
	class exrateController extends CI_Controller
	{
		var $pageHeader,$panelTitle,$cancelString;
		public function __construct()
		{
			parent::__construct();

			$this->pageHeader='Exchange Rate';
			$this->panelTitle='Exchange Rate';
			$this->cancelString = 'exrate';
			$this->load->model('Exrate_m','em');
			$this->load->model('Blog_m','bm');
		}

		public function index($id="")
		{
			
			$this->load->view('template/header');
			$this->load->view('template/left');
			$page="admin/exrateController";
			$data['pageHeader'] = $this->pageHeader;					
			$data["action_url"]=array("{$page}/add","{$page}/edit","{$page}/delete"/*,"{$page}/change_password"*/);
			$data["tbl_hdr"]=array("Rate","User create","Date create","User update","Date update",);		
			$row=$this->em->index($id);		
			$i=0;		
			foreach($row as $value):			
				$data["tbl_body"][$i]=array(
											$value->key_data,
											
											$value->user_crea,								
											$value->date_crea,
											$value->user_updt,
											$value->date_updt,
											$value->key_id
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
			$this->em->insertExrate();
			redirect("admin/exrateController");	
		}else
		{
			$data['action'] = "admin/exrateController/add";
			$data['pageHeader'] = $this->pageHeader;
			$data['ctrl'] = $this->createCtrl();
			$data['cancel'] = "exrate";
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
				$this->em->remove($id);
				redirect('admin/exrateController');
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
							"name"	=>	"txtExRate",
							"id"	=>	"txtExRate",
							"class"	=>	"form-control",
							"placeholder"	=>	"Enter Exchange Rate here...",
							"label"	=>	"Exchange Rate",
							"required"	=> "required"
						),
					
					// array(
					// 		'type'	=>	'dropdown',
					// 		'name'	=>	'ddlstatus',
					// 		'id'	=>	'ddlstatus',
					// 		'option'=>	$pos,
					// 		'class'	=>	'class="form-control"',
					// 		'label'	=>	'Status'
					// 	),
					
					// array(
					// 			'type'	=>	'upload',
					// 			'name'	=>	'txtUpload',
					// 			'id'	=>	'txtUpload',
					// 			'img'	=>	'',
					// 			'label'	=>	'Image'
					// 	),
					// array(
					// 			'type'	=>	'textarea',
					// 			'name'	=>	'txtDesc',
					// 			'id'	=>	'txtDesc',
					// 			'class'	=>	'form-control',
					// 			'label'	=>	'Description'
					// 	)
				);
		return $ctrl;
	}

		# ================ Create Control form =======================

	} // Class
<?php
class Member_c extends CI_Controller
{
	var $pageHeader,$page_redirect;	
	public function __construct()
	{
		parent::__construct();
		$this->pageHeader='Member';
		$this->page_redirect="admin/member_c";								
		$this->load->model("member_m");
	}
	public function index()
	{		
		$this->load->view('template/header');
		$this->load->view('template/left');		
		$data['pageHeader'] = $this->pageHeader;
		$data["action_url"]=array(0=>"{$this->page_redirect}/add",1=>"{$this->page_redirect}/edit",2=>"{$this->page_redirect}/delete"/*,"{$this->page_redirect}/change_password"*/);							
		$data["tbl_hdr"]=array("Member Code","Name","Address","Phone","Email","Register Date","Status","Description","Valid code");		
		$row=$this->member_m->index();		
		$i=0;
		if($row==TRUE)
		{
			foreach($row as $value):
			$data["tbl_body"][$i]=array(
										$value->mem_code,
										$value->mem_name,										
										$value->mem_addr,
										$value->mem_phone,
										$value->mem_email,
										date("d-m-Y",strtotime($value->reg_date)),																											
										$value->mem_status==1?"Enable" : "Disable",
										$value->mem_desc,																																																	
										$value->valid_code,																				
										$value->mem_id
									);
			$i=$i+1;
		endforeach;
		}											
		$this->load->view('admin/page_view',$data);
		$this->load->view('template/footer');
	}
	public function validation()
	{		
		$this->form_validation->set_rules('txtMemberName','Member name','trim|required');		
		$this->form_validation->set_rules('txtMemberPhone','Member phone','trim|required|regex_match[/^[0-9\-\+]{9,15}+$/]');
		$this->form_validation->set_rules('txtMemberEmail','Member Email','trim|required|valid_email');
		$this->form_validation->set_rules('txtRegisterDate','Register Date','required');								
		if($this->form_validation->run()==TRUE){return TRUE;}
		else{return FALSE;}
	}	
	public function add()
	{		
		$option = array('1'=>'Enable','0'=>'Disable');
		$data['ctrl'] = $this->createCtrl($row="",$option);		
		$data['action'] = "{$this->page_redirect}/add_value";
		$data['pageHeader'] = $this->pageHeader;		
		$data['cancel'] = $this->page_redirect;
		$this->load->view('template/header');
		$this->load->view('template/left');
		$this->load->view('admin/page_add',$data);
		$this->load->view('template/footer');		
	}
	public function add_value()
	{
		if(isset($_POST["btnSubmit"]))
		{
			
			if($this->validation()==TRUE)
				{									
					$row=$this->member_m->add();															              
	                if($row==TRUE)
	                {	                		                	
						redirect("{$this->page_redirect}/");	
	                }	                                																			
				}
			else{$this->add();}		
		}
	}
	public function edit($id="")
	{		
		if($id!="")
		{

			$row=$this->member_m->index($id);			
			if($row==TRUE)
			{														
				$option = array('1'=>'Enable','0'=>'Disable');								
				$data['ctrl'] = $this->createCtrl($row,$option);		
				$data['action'] = "{$this->page_redirect}/edit_value/{$id}";
				$data['pageHeader'] = $this->pageHeader;		
				$data['cancel'] = $this->page_redirect;
				$this->load->view('template/header');
				$this->load->view('template/left');
				$this->load->view("admin/page_edit",$data);
				$this->load->view('template/footer');
			}
		}
		else{return FALSE;}
	}
	public function edit_value($id="")
	{		
		if(isset($_POST["btnSubmit"]))
		{						
			if($this->validation()==TRUE)
			{	
				$row=$this->member_m->edit($id);	
				if($row==TRUE)
	            {	                		                	
					redirect("{$this->page_redirect}/");	
	            }																												 																				            	                	                                												
			}
			else 
			{	
				$this->edit($id);													
			}			
		}
	}	

	public function delete($id="")
	{
		if($id!="")
		{
			$row=$this->member_m->delete($id);
			if($row==TRUE){redirect("{$this->page_redirect}/");}
		}
		else{return FALSE;}
	}
	public function createCtrl($row="",$option)
		{	
			if($row!="")
			{			
					$row1=$row->mem_code;
					$row2=$row->mem_name;														
					$row3=$row->mem_phone;
					$row4=$row->mem_email;										
					$row5=$row->reg_date;
					$row6=$row->valid_code;
					$row7=$row->mem_status;
					$row8=$row->mem_addr;
					$row9=$row->mem_desc;
					$row10=$row->mem_status;									
			}											
			//$ctrl = array();
			$ctrl = array(
							array(
									'type'=>'text',
									'name'=>'txtMemberCode',
									'id'=>'txtMemberCode',									
									'value'=>$row==""? set_value("txtMemberCode") : $row1,					
									'placeholder'=>'Enter Member code here...',									
									'class'=>'form-control',
									'label'=>'Member code'																								
								),
							array(
									'type'=>'text',
									'name'=>'txtMemberName',
									'id'=>'txtMemberName',
									'value'=>$row==""? set_value("txtMemberName") : $row2,
									'placeholder'=>'Enter Member name here...',										
									'class'=>'form-control',
									'label'=>'Member name'
								),							
							array(
								'type'=>'text',
								'name'=>'txtMemberPhone',
								'id'=>'txtMemberPhone',
								'value'=>$row==""? set_value("txtMemberPhone") : $row3,
								'placeholder'=>'Enter Member phone here...',																																																										
								'class'=>'form-control',
								'label'=>'Member phone',									
							),							
							array(
								'type'=>'text',
								'name'=>'txtMemberEmail',
								'id'=>'txtMemberEmail',
								'value'=>$row==""? set_value("txtMemberEmail") : $row4,
								'placeholder'=>'Enter Member email here...',																																																											
								'class'=>'form-control',
								'label'=>'Member email',									
							),
							array(
								'type'=>'text',
								'name'=>'txtRegisterDate',
								'id'=>'txtRegisterDate',
								'value'=>$row==""? set_value("txtRegisterDate") : $row5,
								'placeholder'=>'Enter Register date here...',																																																			
								'class'=>'form-control datetimepicker',
								'label'=>'Register date',									
							),
							array(
								'type'=>'text',
								'name'=>'txtValidCode',
								'id'=>'txtValidCode',
								'value'=>$row==""? set_value("txtValidCode") : $row6,
								'placeholder'=>'Enter Valid Code here...',																																																			
								'class'=>'form-control',
								'label'=>'Valid Code',									
							),							
							array(
									'type'=>'dropdown',
									'name'=>'ddlStatus',									
									'option'=>$option,
									'selected'=>$row==""? NULL : $row10,
									'class'=>'class="form-control"',
									'label'=>'Status',									
								),
							array(
									'type'=>'textarea',
									'name'=>'txtAddr',
									'value'=>$row==""? set_value("txtAddr") : $row8,
									'label'=>'Address'
								),
							array(
									'type'=>'textarea',
									'name'=>'txtDesc',
									'value'=>$row==""? set_value("textarea") : $row9,
									'label'=>'Description'
								),
							);
			return $ctrl;
		}
}
?>
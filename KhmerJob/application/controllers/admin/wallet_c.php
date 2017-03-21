<?php
class Wallet_c extends CI_Controller
{
	var $pageHeader,$page_redirect;	
	public function __construct()
	{
		parent::__construct();
		$this->pageHeader='Wallet';
		$this->page_redirect="admin/wallet_c";								
		$this->load->model("wallet_m");
	}
	public function index()
	{		
		$this->load->view('template/header');
		$this->load->view('template/left');		
		$data['pageHeader'] = $this->pageHeader;					
		$data["action_url"]=array(0=>"{$this->page_redirect}/add",1=>"{$this->page_redirect}/edit",2=>"{$this->page_redirect}/delete"/*,"{$this->page_redirect}/change_password"*/);
		$data["tbl_hdr"]=array("Member name","Account code","Wallet code","Description","Status","User creat","Date create","User update","Date update");		
		$row=$this->wallet_m->index();		
		$i=0;
		if($row==TRUE)
		{
			foreach($row as $value):
			$data["tbl_body"][$i]=array(
										$value->mem_name,
										$value->acc_code,										
										$value->wal_code,										
										$value->wal_desc,
										$value->wal_status==1?"Enable" : "Disable",										
										$value->user_crea,										
										date("d-m-Y",strtotime($value->date_crea)),
										$value->user_updt,
										$value->date_updt==NULL?NULL:date("d-m-Y",strtotime($value->date_updt)),										
										$value->wal_id																				
									);
			$i=$i+1;
		endforeach;
		}											
		$this->load->view('admin/page_view',$data);
		$this->load->view('template/footer');
	}
	public function validation()
	{	
		$this->form_validation->set_rules('ddlAccCode','Member name','required');										
		$this->form_validation->set_rules('txtWalCode','Wallet code','trim|required');			
		if($this->form_validation->run()==TRUE){return TRUE;}
		else{return FALSE;}
	}	
	public function add($error="")
	{
		$option = array('1'=>'Enable','0'=>'Disable');
		$data['error']=$error;
		$row=$this->wallet_m->select_account();				
		if($row==TRUE)
		{
			$option1[NULL]	=	"Choose One";
			foreach($row as $value):						
			$option1[$value->acc_id]=$value->mem_name;				
			endforeach;
		}					
		$data['ctrl'] = $this->createCtrl($row="",$option,$option1);		
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
				$row=$this->wallet_m->add();
				if($row==TRUE)
                {	                		                	
					redirect("{$this->page_redirect}/");     	
                }
                else $this->add("This Account have already !");														              	                	                                																			
			}
			else{$this->add();}			
		}
	}
	public function edit($id="",$error="")
	{	
		if($id!="")
		{			
			$row=$this->wallet_m->index($id);			
			if($row==TRUE)
			{					
				$option = array('1'=>'Enable','0'=>'Disable');
				$data['error']=$error;
				$row1=$this->wallet_m->select_account();				
				if($row1==TRUE)
				{
					$option1[NULL]	=	"Choose One";
					foreach($row1 as $value):						
					$option1[$value->acc_id]=$value->mem_name;				
					endforeach;
				}								
				$data['ctrl'] = $this->createCtrl($row,$option,$option1);		
				$data['action'] = "{$this->page_redirect}/edit_value/{$id}";
				$data['pageHeader'] = $this->pageHeader;		
				$data['cancel'] = $this->page_redirect;
				$this->load->view('template/header');
				$this->load->view('template/left');
				$this->load->view("admin/page_edit",$data);
				$this->load->view('template/footer');
			}						
		}		
	}
	public function edit_value($id="")
	{
		
		if(isset($_POST["btnSubmit"]))
		{							           			
			if($this->validation()==TRUE)
			{										
				$row=$this->wallet_m->edit($id);	
				if($row==TRUE)
	            {             		                	
					redirect("{$this->page_redirect}/");	
	            }
	            else echo $this->edit($id,"This Account have already !");								
									 																				            	                	                                												
			}
			else{$this->edit($id,$error="");}			
		}
	}	

	public function delete($id="")
	{
		if($id!="")
		{
			$row=$this->wallet_m->delete($id);
			if($row==TRUE){redirect("{$this->page_redirect}/");}
		}
		else{return FALSE;}
	}
	public function createCtrl($row="",$option,$option1)
		{				
			if($row!="")
			{										
				$row1=$row->wal_code;
				$row2=$row->wal_status;
				$row3=$row->wal_desc;									
				$row4=$row->acc_id;				
			}											
			//$ctrl = array();
			$ctrl = array(														
							array(
									'type'=>'dropdown',
									'name'=>'ddlAccCode',									
									'option'=>$option1,
									'selected'=>$row==""?NULL:$row4,
									'class'=>'class="form-control"',
									'label'=>'Member name',									
								),
							array(
									'type'=>'text',
									'name'=>'txtWalCode',
									'id'=>'txtWalCode',
									'value'=>$row==""? set_value("txtWalCode") : $row1,
									'placeholder'=>'Enter Wallet code here...',									
									'class'=>'form-control',
									'label'=>'Wallet code'
								),
							array(
									'type'=>'dropdown',
									'name'=>'ddlStatus',									
									'option'=>$option,
									'selected'=>$row==""?NULL:$row2,
									'class'=>'class="form-control"',
									'label'=>'Status',									
								),																			
							array(
									'type'=>'textarea',
									'name'=>'txtDesc',
									'value'=>$row==""? set_value("txtDesc") : $row3,
									'label'=>'Description'
								)
					);
			return $ctrl;
		}
}
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class AccountController extends CI_Controller
{
	var $pageHeader,$page_redirect,$action,$cancel;
	function __construct()
	{
		parent::__construct();
		$this->page_redirect = "account";
		$this->action="account/add";
		$this->pageHeader="Account";
		$this->cancel = "account";
		$this->load->model("accountModel","am");
		$this->load->model("locationModel","lm");
	}

	function index()
	{
		$data['pageHeader'] = $this->pageHeader;
		$data['tbl_hdr'] = array('Acc.Code','Member Name','Gender','Acc. Type','Acc. Image');

		$query = $this->am->get_account();
		$i=0;
		if(!empty($query))
		{
			foreach ($query as $key => $value) {
			$sex = $value->sex=="M"?"Male":"Female";
			$data["tbl_body"][$i] = array(
											$value->acc_code,
											$value->mem_name,
											$sex,
											$value->acc_type,
											"<img class='img-thumbnail' src='assets/uploads/".$value->acc_img."' style='width:43px;' />",
											$value->acc_id
				);
			$i++;
			}
		}else
		{
			$data["tbl_body"][$i] = array();
		}
		

		$data['action_url'] = array($this->page_redirect.'/add',
									$this->page_redirect.'/edit',
									$this->page_redirect.'/delete') ;
		$this->load->view('template/header');
		$this->load->view('template/left');
		$this->load->view('admin/page_view',$data);
		$this->load->view('template/footer');
	}


	function add_account()
	{
		if(isset($_POST['btnSubmit']))
		{	
			$this->am->insert_account();
			redirect("account");	
		}else
		{
			$data['action'] = $this->action;
			$data['multipart'] = true;
			$data['pageHeader'] = $this->pageHeader;
			$data['ctrl'] = $this->createCtrl();
			$data['cancel'] = $this->cancel;
			$this->load->view('template/header');
			$this->load->view('template/left');
			$this->load->view('admin/page_add',$data);
			$this->load->view('template/footer');
		}
		
	}

	function createCtrl()
	{
		$query = $this->am->loadMember();

		foreach ($query as $key => $value) {
			$option1[0] = 'Choose One';
			$option1[$value->mem_id] = $value->mem_name;
		}
		$location = $this->lm->get_location();
		
		foreach ($location as $key => $value) {
			$option4[0]	=	"Choose One";
			$option4[$value->loc_id] = $value->loc_name;
		}
		
		$option2 = array('0'=>'Choose One','F'=>'Female','M' =>'Male');
		$option3 = array('General'=>'General','Agent'=>'Agent','Shop-owner'=>'Shop-owner');
		
		$ctrl = array(
						array(
								'type'	=>	'text',
								'name'	=>	'txtAccCode',
								'id'	=>	'txtAccCode',
								'placeholder'	=>	'Enter Account Code here...',
								'value'	=>	set_value('txtAccCode',''),
								'class'	=>	'form-control',
								'label'	=>	'Account Code'
							),
						array(
								'type'	=>	'password',
								'name'	=>	'txtPassword',
								'id'	=>	'txtPassword',
								'placeholder'	=>	'Enter Password here...',
								'class'	=>	'form-control',
								'label'	=>	'Password',
								'required'	=>	''
							),
						array(
								'type'	=>	'password',
								'name'	=>	'txtConfirm',
								'id'	=>	'txtConfirm',
								'placeholder'	=>	'Confirm Password here...',
								'class'	=>	'form-control',
								'label'	=>	'Confirm Password',
								'required'	=>	''
							),
						array(
								'type'	=>	'dropdown',
								'name'	=>	'ddlMember',
								'id'	=>	'ddlMember',
								'option'=>	$option1,
								'class'	=>	'class="form-control"',
								'label'	=>	'Member'
							),
						array(
								'type'	=>	'dropdown',
								'name'	=>	'ddlGender',
								'id'	=>	'ddlGender',
								'option'=>	$option2,
								'class'	=>	'class="form-control"',
								'label'	=>	'Gender'
							),
						array(
								'type'	=>	'text',
								'name'	=>	'txtDob',
								'id'	=>	'txtDob',
								'placeholder'	=>	'Click to pick a date',
								'class'	=>	'form-control datetimepicker',
								'label'	=>	'Date of Birth',
								'value'	=>	set_value('txtDob',''),
								'required'	=>	''
							),
						array(
								'type'	=>	'textarea',
								'name'	=>	'txtPob',
								'id'	=>	'txtPob',
								'class'	=>	'form-control',
								'value'	=>	set_value('txtPob',''),
								'label'	=>	'Place of Birth'
							),
						array(
								'type'	=>	'dropdown',
								'name'	=>	'ddlAccType',
								'id'	=>	'ddlAccType',
								'option'=>	$option3,
								'class'	=>	'class="form-control"',
								'label'	=>	'Account Type'	
							),
						array(
								'type'	=>	'text',
								'name'	=>	'txtCompany',
								'id'	=>	'txtCompany',
								'placeholder'	=>	'Enter Company name here...',
								'class'	=>	'form-control',
								'value'	=>	set_value('txtCompany',''),
								'label'	=>	'Company'
							),
						array(
								'type'	=>	'text',
								'name'	=>	'txtPosition',
								'id'	=>	'txtPosition',
								'placeholder'	=>	'Enter Position here...',
								'class'	=>	'form-control',
								'value'	=>	set_value('txtPosition',''),
								'label'	=>	'Position'
							),
						array(
								'type'	=>	'text',
								'name'	=>	'txtContact',
								'id'	=>	'txtContact',
								'placeholder'	=>	'Enter Contact Number here...',
								'class'	=>	'form-control',
								'value'	=>	set_value("txtContact",""),
								'label'	=>	'Contact Number'
							),
						array(
								'type'	=>	'dropdown',
								'name'	=>	'ddlLocation',
								'id'	=>	'ddlLocation',
								'option'=>	$option4,
								'class'	=>	'class="form-control"',
								'label'	=>	'Location'
							),
						array(
								'type'	=>	'upload',
								'name'	=>	'txtUpload',
								'id'	=>	'txtUpload',
								'img'	=>	'',
								'label'	=>	'Image'
							)
			);
		return $ctrl;
	}
	
	function editCtrl($id)
	{
		$account = $this->am->get_account($id);
		$query = $this->am->loadMember();

		foreach ($query as $key => $value) {
			$option1[0] = 'Choose One';
			$option1[$value->mem_id] = $value->mem_name;
		}
		$location = $this->lm->get_location();
		
		foreach ($location as $key => $value) {
			$option4[0]	=	"Choose One";
			$option4[$value->loc_id] = $value->loc_name;
		}
		
		$option2 = array('0'=>'Choose One','F'=>'Female','M' =>'Male');
		$option3 = array('General'=>'General','Agent'=>'Agent','Shop-owner'=>'Shop-owner');
		
		$ctrl = array(
						array(
								'type'	=>	'text',
								'name'	=>	'txtAccCode',
								'id'	=>	'txtAccCode',
								'placeholder'	=>	'Enter Account Code here...',
								'value'	=>	set_value('txtAccCode',$account->acc_code),
								'class'	=>	'form-control',
								'label'	=>	'Account Code'
							),
						
						array(
								'type'	=>	'dropdown',
								'name'	=>	'ddlMember',
								'id'	=>	'ddlMember',
								'option'=>	$option1,
								'selected'	=>	$account->mem_id,
								'class'	=>	'class="form-control"',
								'label'	=>	'Member'
							),
						array(
								'type'	=>	'dropdown',
								'name'	=>	'ddlGender',
								'id'	=>	'ddlGender',
								'option'=>	$option2,
								'selected'	=>	$account->sex,
								'class'	=>	'class="form-control"',
								'label'	=>	'Gender'
							),
						array(
								'type'	=>	'text',
								'name'	=>	'txtDob',
								'id'	=>	'txtDob',
								'placeholder'	=>	'Click to pick a date',
								'class'	=>	'form-control datetimepicker',
								'label'	=>	'Date of Birth',
								'value'	=>	set_value('txtDob',$account->dob),
								'required'	=>	''
							),
							array(
								'type'	=>	'dropdown',
								'name'	=>	'ddlAccType',
								'id'	=>	'ddlAccType',
								'option'=>	$option3,
								'selected'	=>	$account->acc_type,
								'class'	=>	'class="form-control"',
								'label'	=>	'Account Type'	
							),
						array(
								'type'	=>	'text',
								'name'	=>	'txtCompany',
								'id'	=>	'txtCompany',
								'placeholder'	=>	'Enter Company name here...',
								'class'	=>	'form-control',
								'value'	=>	set_value('txtCompany',$account->company),
								'label'	=>	'Company'
							),
							array(
								'type'	=>	'text',
								'name'	=>	'txtPosition',
								'id'	=>	'txtPosition',
								'placeholder'	=>	'Enter Position here...',
								'class'	=>	'form-control',
								'value'	=>	set_value('txtPosition',$account->position),
								'label'	=>	'Position'
							),
						array(
								'type'	=>	'text',
								'name'	=>	'txtContact',
								'id'	=>	'txtContact',
								'placeholder'	=>	'Enter Contact Number here...',
								'class'	=>	'form-control',
								'value'	=>	set_value("txtContact",$account->contact_phone),
								'label'	=>	'Contact Number'
							),
						array(
								'type'	=>	'dropdown',
								'name'	=>	'ddlLocation',
								'id'	=>	'ddlLocation',
								'option'=>	$option4,
								'selected'	=>	$account->loc_id,
								'class'	=>	'class="form-control"',
								'label'	=>	'Location'
							),
						array(
								'type'	=>	'textarea',
								'name'	=>	'txtPob',
								'id'	=>	'txtPob',
								'class'	=>	'form-control',
								'value'	=>	set_value('txtPob',$account->pob),
								'label'	=>	'Place of Birth'
							),
						
						
						array(
								'type'	=>	'upload',
								'name'	=>	'txtUpload',
								'id'	=>	'txtUpload',
								'img'	=>	'',
								'label'	=>	'Image'
							)
			);
		return $ctrl;
	}
	
	function edit_account($id)
	{
		if($id!="")
		{
			if(isset($_POST['btnSubmit']))
			{
				$this->am->update_model($id);
				redirect('account');
			}else
			{
				$data['action'] = "account/edit/".$id;
				$data['multipart'] = true;
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
	function delete_account($id)
	{
		if($id!="")
		{
			$this->am->delete_account($id);
			redirect('account');
		}
	}
}
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class StockController extends CI_Controller
{
	var $pageHeader,$page_redirect,$action,$cancel,$str_id;
	function __construct()
	{
		parent::__construct();
		$this->page_redirect = "stock";
		$this->action="stock/add";
		$this->pageHeader="Stock";
		$this->str_id = isset($this->session->str_id)?$this->session->str_id:"0";
		$this->cancel = "stock";
		$this->load->model('stockModel','sm');
	}

	function index()
	{
		$data['pageHeader'] = $this->pageHeader;
		$data['tbl_hdr'] = array('Product Name','Quantity','Type','Description','User Create','Date Create');

		$query = $this->sm->get_stock();
		$i = 0;
		if(!empty($query))
		{
			foreach ($query as $key => $value) {
				$data['tbl_body'][$i]	=	array(
												$value->p_name,
												$value->qty,
												$value->stk_type=='stock in'?'Stock In':'Stock Out',
												$value->stk_desc,
												$value->user_crea,
												$value->date_crea,
												$value->p_id
											);
				$i++;
			}	
		}else
		{
			$data['tbl_body'][$i] = array();
		}
		

		$data['action_url'] = array(0=>$this->page_redirect.'/add',
									1=>$this->page_redirect.'/edit',
									2=>$this->page_redirect.'/delete') ;

		$this->load->view('template/header');
		$this->load->view('template/left');
		$this->load->view('admin/page_view',$data);
		$this->load->view('template/footer');
	}

	function add_stock()
	{
		
		if(isset($_POST['btnSubmit']))
		{
			$this->sm->insert_stock();
			redirect("stock");
		}else
		{
			$data['action'] = 'stock/add';
			$data['pageHeader'] = $this->pageHeader;
			$data['ctrl'] = $this->createCtrl();
			$data['cancel'] = $this->cancel;

			$this->load->view('template/header');
			$this->load->view('template/left');
			$this->load->view('admin/page_add',$data);
			$this->load->view('template/footer');
		}
	}

	function edit_stock($id)
	{
		if($id!='')
		{
			if(isset($_POST['btnSubmit']))
			{

			}else
			{
				$data['action'] = 'stock/edit/'.$id;
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

	function createCtrl()
	{
		$product = $this->sm->get_product();
		foreach ($product as $key => $value) {
			$option[0]	= 'Choose One';
			$option[$value->p_id] = $value->p_name;
		}

		$option1 = array('i'=>'Stock In','o'=>'Stock Out');
		$ctrl = array(
					array(
							'type'	=>	'dropdown',
							'name'	=>	'ddlProduct',
							'id'	=>	'ddlProduct',
							'option'=>	$option,
							'class'	=>	'class="form-control"',
							'label'	=>	'Product'
						),
					array(
							'type'	=>	'text',
							'name'	=>	'txtQty',
							'id'	=>	'txtQty',
							'placeholder'	=>	'Enter Quantity here...',
							'class'	=>	'form-control',
							'label'	=>	'Quantity'
						),
					array(
							'type'	=>	'dropdown',
							'name'	=>	'ddlType',
							'id'	=>	'ddlType',
							'option'=>	$option1,
							'class'	=>	'class="form-control"',
							'label'	=>	'Transaction Type'
						),
					array(
							'type'	=>	'textarea',
							'name'	=>	'txtDesc',
							'id'	=>	'txtDesc',
							'label'	=>	'Description'
						)
			);
		return $ctrl;
	}

	function editCtrl($id)
	{

		$stock = $this->sm->get_stock($id);
		$product = $this->sm->get_product();
		foreach ($product as $key => $value) {
			$option[0]	= 'Choose One';
			$option[$value->p_id] = $value->p_name;
		}

		$option1 = array('i'=>'Stock In','o'=>'Stock Out');

		$ctrl = array(
					array(
							'type'	=>	'dropdown',
							'name'	=>	'ddlProduct',
							'id'	=>	'ddlProduct',
							'option'=>	$option,
							'selected'	=>	$stock->p_id,
							'class'	=>	'class="form-control"',
							'label'	=>	'Product'
						),
					array(
							'type'	=>	'text',
							'name'	=>	'txtQty',
							'id'	=>	'txtQty',
							'value'	=>	$stock->qty,
							'placeholder'	=>	'Enter Quantity here...',
							'class'	=>	'form-control',
							'label'	=>	'Quantity'
						),
					array(
							'type'	=>	'dropdown',
							'name'	=>	'ddlType',
							'id'	=>	'ddlType',
							'option'=>	$option1,
							'selected'	=>	$stock->stk_type,
							'class'	=>	'class="form-control"',
							'label'	=>	'Transaction Type'
						),
					array(
							'type'	=>	'textarea',
							'name'	=>	'txtDesc',
							'id'	=>	'txtDesc',
							'value'	=>	$stock->stk_desc,
							'label'	=>	'Description'
						)
			);
		return $ctrl;
	}

	function delete_stock($id)
	{
		if($id!="")
		{
			$this->sm->delete_stock($id);
			redirect("stock");
		}
	}
}
?>
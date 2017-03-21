<?php
class Product_m extends CI_Model
{				
	var $userCrea;
	var $str;	
	public function __construct()
	{
		parent::__construct();				
		$this->str = isset($this->session->str)?$this->session->str:"1";
		$this->userCrea = isset($this->session->userLogin)?$this->session->userLogin:"N/A";
	}
	public function index($id="")
	{
		if($id=="")
		{
			$query=$this->db->query("SELECT str.str_name,cat.cat_name,brn.brn_name,p_id,p_name,p_desc,short_desc,price,color,size,model,date_release,dimension,p.user_crea,p.date_crea,p.user_updt,p.date_updt FROM tbl_product AS p JOIN tbl_store AS str ON p.str_id=str.str_id JOIN tbl_category AS cat ON p.cat_id=cat.cat_id JOIN tbl_brand AS brn ON p.brn_id=brn.brn_id ORDER BY p.p_id DESC");
			$result=$query->result();
			if($result){return $result;}
		}
		else
		{

			$query=$this->db->query("SELECT tbl_media.path,str.str_name,str.str_id,cat.cat_name,cat.cat_id,brn.brn_id,brn.brn_name,p.p_id,p_name,qty,p_desc,short_desc,price,color,size,model,date_release,dimension,p.user_crea,p.date_crea,p.user_updt,p.date_updt FROM tbl_product AS p JOIN tbl_store AS str ON p.str_id=str.str_id JOIN tbl_category AS cat ON p.cat_id=cat.cat_id JOIN tbl_brand AS brn ON p.brn_id=brn.brn_id RIGHT JOIN tbl_media ON p.p_id=tbl_media.p_id INNER JOIN tbl_stock s ON p.p_id=s.p_id WHERE p.p_id={$id}");
			$result=$query->row();
			if($result){return $result;}
		}
	}
	public function media($id="")
	{		
		$query=$this->db->query("SELECT * FROM tbl_media WHERE p_id={$id}");
		$result=$query->row();
		if($result){return $result;}					
	}
	public function select_tables($tbl_name="")
	{
		if($tbl_name!="")
		{
			$query=$this->db->query("SELECT * FROM {$tbl_name}");
			$result=$query->result();
			if($result==TRUE){return $result;}
		}
		else{return FALSE;}		
	}
	public function add()
	{
		#product
		$data= array(
						"str_id" => $this->input->post("ddlStoreId"),
						"cat_id" => $this->input->post("ddlCategoryId"),
						"brn_id" => $this->input->post("ddlBrandId"),
						"p_name" => $this->input->post("txtPName"),
						"price" => $this->input->post("txtPrice"),
						"color" => $this->input->post("txtColor"),
						"size" => $this->input->post("txtSize"),
						"model" => $this->input->post("txtModel"),
						"date_release" => date("Y-m-d",strtotime($this->input->post("txtDateRelease"))),
						"dimension" => $this->input->post("txtDimensoin"),
						"short_desc" => $this->input->post("txtShortDesc"),
						"p_desc" => $this->input->post("txtPdesc"),						
						"user_crea" => $this->userCrea,
						"date_crea" => date('Y-m-d')
						 );
		$query=$this->db->insert("tbl_product",$data);
		#media
		$query1=$this->db->query("SELECT p_id FROM tbl_product ORDER BY p_id DESC");
		$id=$query1->row()->p_id;
		$data1 = array(
						'p_id' =>$id,
						'path'=>!empty($this->input->post('txtImgName'))?$this->input->post('txtImgName'):"",
						'media_type'=>'txtMediaType',
						"user_crea" => $this->userCrea,
						"date_crea" => date('Y-m-d')
						);
		$this->db->insert("tbl_media",$data1);
		#Stock Qty
		$data = array(
						'p_id'	=>	$id,
						'str_id'=>	$this->str,
						'qty'	=>	$this->input->post('txtStockQty'),
						'stk_type'	=>	'stock in',
						'user_crea'	=>	$this->userCrea,
						'date_crea'	=>	date('Y-m-d')
			);
		$this->db->insert("tbl_stock",$data);
		if($query){return $query;}
	}
	public function edit($id)
	{
		if($id==TRUE)
		{
			if(!empty($this->input->post('txtImgName')))
			{
				$data= array(
						"str_id" => $this->input->post("ddlStoreId"),
						"cat_id" => $this->input->post("ddlCategoryId"),
						"brn_id" => $this->input->post("ddlBrandId"),
						"p_name" => $this->input->post("txtPName"),
						"price" => $this->input->post("txtPrice"),
						"color" => $this->input->post("txtColor"),
						"size" => $this->input->post("txtSize"),
						"model" => $this->input->post("txtModel"),
						"date_release" => date("Y-m-d",strtotime($this->input->post("txtDateRelease"))),
						"dimension" => $this->input->post("txtDimensoin"),
						"short_desc" => $this->input->post("txtShortDesc"),
						"p_desc" => $this->input->post("txtPdesc"),						
						"user_updt" => $this->userCrea,
						"date_updt" => date('Y-m-d')
						 );				
				$this->db->where("p_id",$id);
				$query=$this->db->update("tbl_product",$data);
				#media
				$row=$this->index($id);			
				unlink("assets/uploads/".$row->path);
				$data1 = array(						
						'path'=>!empty($this->input->post('txtImgName'))?$this->input->post('txtImgName'):"",						
						"user_updt" => $this->userCrea,
						"date_updt" => date('Y-m-d')
						);
				$this->db->where("p_id",$id);
				$this->db->update("tbl_media",$data1);
				if($query==TRUE){return $query;}
			}
			else
			{
				$data= array(
						"str_id" => $this->input->post("ddlStoreId"),
						"cat_id" => $this->input->post("ddlCategoryId"),
						"brn_id" => $this->input->post("ddlBrandId"),
						"p_name" => $this->input->post("txtPName"),
						"price" => $this->input->post("txtPrice"),
						"color" => $this->input->post("txtColor"),
						"size" => $this->input->post("txtSize"),
						"model" => $this->input->post("txtModel"),
						"date_release" => date("Y-m-d",strtotime($this->input->post("txtDateRelease"))),
						"dimension" => $this->input->post("txtDimensoin"),
						"short_desc" => $this->input->post("txtShortDesc"),
						"p_desc" => $this->input->post("txtPdesc"),						
						"user_updt" => $this->userCrea,
						"date_updt" => date('Y-m-d')
						 );
				$this->db->where("p_id",$id);
				$query=$this->db->update("tbl_product",$data);
				if($query==TRUE){return $query;}
			} 				
		}		
	}
	public function delete($id)
	{
		if($id==TRUE)
		{		
			$row=$this->media($id);			
			unlink("assets/uploads/".$row->path);
			$this->db->where("p_id",$id);
			$this->db->delete("tbl_media");						
			$this->db->where("p_id",$id);
			$query=$this->db->delete("tbl_product");
			if($query==TRUE){return $query;}
		}
	}
	
}
?>

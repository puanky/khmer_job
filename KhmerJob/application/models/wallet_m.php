<?php
class Wallet_m extends CI_Model
{			
	private $userLog="admin";		
	public function __construct()
	{
		parent::__construct();				
	}
	public function index($id="")
	{
		if($id=="")
		{			
			$query=$this->db->query("SELECT wal.*,acc.acc_code,mem.mem_name FROM tbl_wallet AS wal INNER JOIN tbl_account AS acc ON wal.acc_id=acc.acc_id INNER JOIN tbl_member AS mem ON acc.mem_id=mem.mem_id ORDER BY wal_id DESC ");
			if($query->num_rows()>0){return $query->result();}			
		}
		else
		{
			$query=$this->db->query("SELECT wal.*,acc.acc_code,mem.mem_name FROM tbl_wallet AS wal INNER JOIN tbl_account AS acc ON wal.acc_id=acc.acc_id INNER JOIN tbl_member AS mem ON acc.mem_id=mem.mem_id  WHERE wal_id={$id} ");				
			if($query->num_rows()>0){return $query->row();}
		}
	}
	public function select_account()
	{		
		$query=$this->db->query("SELECT CONCAT(mem.mem_name,' Code=',acc.acc_code) as mem_name,acc.acc_id FROM tbl_account AS acc JOIN tbl_member AS mem ON acc.mem_id=mem.mem_id");
		$result=$query->result();
		if($result){return $result;}
	}
	public function add()
	{	
		$acc_id=$this->input->post("ddlAccCode");
		$this->db->where("acc_id",$acc_id);
		$query=$this->db->get("tbl_wallet");
		$result=$query->row();		
		if($acc_id==$result->acc_id){return FALSE;}
		else
		{
			$data= array(
						"acc_id" => $this->input->post("ddlAccCode"),
						"wal_code" => $this->input->post("txtWalCode"),												
						"wal_status" => $this->input->post("ddlStatus"),
						"wal_desc" => $this->input->post("txtDesc"),												
						"user_crea" => $this->userLog,
						"date_crea" => date('Y-m-d')
						 );
		$query=$this->db->insert("tbl_wallet",$data);		
		if($query){return $query;}
		}		
	}
	public function edit($id)
	{
		$acc_id=$this->input->post("ddlAccCode");
		$this->db->where("acc_id",$acc_id);
		$this->db->where("wal_id!=",$id);
		$query=$this->db->get("tbl_wallet");
		$result=$query->row();						 	
		if($id==TRUE)
		{
			if($acc_id==$result->acc_id){return FALSE;}
			else
			{
				$data= array(
						"acc_id" => $this->input->post("ddlAccCode"),
						"wal_code" => $this->input->post("txtWalCode"),												
						"wal_status" => $this->input->post("ddlStatus"),
						"wal_desc" => $this->input->post("txtDesc"),												
						"user_updt" => $this->userLog,
						"date_updt" => date('Y-m-d')
						 );
				$this->db->where("wal_id",$id);
				$query=$this->db->update("tbl_wallet",$data);
				if($query==TRUE){return $query;}
			}
							
		}
						
	}
	public function delete($id)
	{
		if($id==TRUE)
		{			
			$this->db->where("wal_id",$id);
			$query=$this->db->delete("tbl_wallet");
			if($query==TRUE){return $query;}
		}
	}
	
}
?>
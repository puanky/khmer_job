<?php
class Coupon_m extends CI_Model
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
			$this->db->where("cpn_status","1");
			$this->db->order_by('cpn_id', 'DESC');
			$query=$this->db->get("tbl_coupon");
			$result=$query->result();
			if($result){return $result;}
		}
		else
		{
			$this->db->where("cpn_id",$id);
			$query=$this->db->get("tbl_coupon");			
			if($query->num_rows()>0){return FALSE;}
		}
	}
	public function add()
	{
		$json=json_decode($this->input->post("str"));
		if(count($json)>0)
		{				
			for($i=0;$i<count($json);$i++)
			{
				$data=array(										
								"cpn_code"=>$json[$i][0],
								"cpn_usd"=>$json[$i][1],
								"cpn_status"=>'1',
								"valid_from"=>$json[$i][2],
								"valid_to"=>$json[$i][3],
								"user_crea"=>$this->userLog,
								"date_crea"=>date('Y-m-d')
							);
				$this->db->insert("tbl_coupon",$data);												
			}					
		}
	}	
	public function delete($id)
	{
		if($id==TRUE)
		{			
			$this->db->where("cpn_id",$id);
			$query=$this->db->delete("tbl_coupon");
			if($query==TRUE){return $query;}
		}
	}
	
}
?>
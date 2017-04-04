<?php
class Search_cv_setup_m extends CI_Model
{			
	var $userCrea;		
	public function __construct()
	{
		parent::__construct();
		$this->userCrea = isset($this->session->userLogin)?$this->session->userLogin:"N/A";				
	}
	public function index($id="")
	{
		if($id=="")
		{			
			$query=$this->db->query("SELECT rate_det_id,rate_det_type,duration,price,scv_see_app_position,scv_full_app_det,scv_print_app_cv,scv_send_email_app FROM tbl_rate_detail AS rd INNER JOIN tbl_rate AS r ON rd.rate_id=r.rate_id WHERE r.rate_type='search_cv' ORDER BY rd.rate_det_id DESC");
			if($query->num_rows()>0){return $query->result();}			
		}
		else
		{
			$query=$this->db->query("SELECT rate_det_id,rate_det_type,rd.rate_id,duration,price,scv_see_app_position,scv_full_app_det,scv_print_app_cv,scv_send_email_app,r.user_crea,r.date_crea,r.user_updt,r.date_updt,r.rate_desc FROM tbl_rate_detail AS rd INNER JOIN tbl_rate AS r ON rd.rate_id=r.rate_id WHERE rate_det_id='{$id}'");			
			if($query->num_rows()>0){return $query->row();}	
		}
	}			
	public function add()
	{
		$data= array(
						"rate_type" =>'search_cv',
						"rate_desc" => $this->input->post("desc"),										
						"user_crea" => $this->userCrea,
						"date_crea" => date('Y-m-d')
					);
		$query=$this->db->insert("tbl_rate",$data);
		if($query==TRUE)
		{
			$this->db->where("rate_type","search_cv");
			$query=$this->db->get("tbl_rate");
			if($query->num_rows()>0)
			{
				$row=$query->previous_row();
				$json=json_decode($this->input->post("str"));										
				if(count($json)>0)
				{
					for($i=0;$i<count($json);$i++)
					{	
						$data1=array(	
										"rate_id"=>$row->rate_id,
										"rate_det_type"=>$json[$i][0],
										"duration"=>$json[$i][1],
										"price"=>$json[$i][2],										
										"scv_see_app_position"=>$json[$i][3],
										"scv_full_app_det"=>$json[$i][4],
										"scv_print_app_cv"=>$json[$i][5],
										"scv_send_email_app"=>$json[$i][6]													
									);
						$query1=$this->db->insert("tbl_rate_detail",$data1);						
					}
					if($query1==TRUE){return TRUE;}							
				}
			}
		}										
	}
	public function edit($id)
	{
		if($id==TRUE)
		{	echo $this->input->post("txtDuration");
			#update rate
			$data= array(
					"rate_type" =>'search_cv',
					"rate_desc" => $this->input->post("txtDesc"),
					"user_updt" => $this->userCrea,
					"date_updt" => date('Y-m-d')
					 );				
			$this->db->where("rate_id",$this->input->post("rate_id"));
			$this->db->update("tbl_rate",$data);					
			#update ads detail
			$data1= array(																					
							"rate_det_type"=>$this->input->post("ddlType"),
							"duration"=>$this->input->post("txtDuration")==NULL?0:$this->input->post("txtDuration"),
							"price"=>$this->input->post("txtPrice")==NULL?0:$this->input->post("txtPrice"),
							"scv_see_app_position"=>$this->input->post("ddlSee_app"),
							"scv_full_app_det"=>$this->input->post("ddlFull_app_det"),
							"scv_print_app_cv"=>$this->input->post("ddlPrint_app_cv"),
							"scv_send_email_app"=>$this->input->post("ddlSent_email_to_app"),
					 );				
			$this->db->where("rate_det_id",$id);
			$query1=$this->db->update("tbl_rate_detail",$data1);
			if($query1==TRUE){return $query1;}
		}				
	}
	public function delete($id)
	{
		if($id==TRUE)
		{						
			$this->db->where("rate_det_id",$id);
			$query=$this->db->delete("tbl_rate_detail");
			if($query==TRUE){return $query;}
		}
	}
	
}
?>

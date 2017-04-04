<?php
class Job_setup_m extends CI_Model
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
			$query=$this->db->query("SELECT rate_det_id,rate_det_type,duration,price,job_price_bundle_package,job_2post_discount,free_per_month FROM tbl_rate_detail AS rd INNER JOIN tbl_rate AS r ON rd.rate_id=r.rate_id WHERE r.rate_type='job' ORDER BY rd.rate_det_id DESC");
			if($query->num_rows()>0){return $query->result();}			
		}
		else
		{
			$query=$this->db->query("SELECT rate_det_id,rate_det_type,rd.rate_id,duration,price,job_price_bundle_package,job_2post_discount,job_alert_job_to_cv,job_receive_cv_app,job_alert_job_to_register,job_fb_boosting,homepage_display,toprow_display,job_com_logo_display,free_per_month,r.user_crea,r.date_crea,r.user_updt,r.date_updt,r.rate_desc FROM tbl_rate_detail AS rd INNER JOIN tbl_rate AS r ON rd.rate_id=r.rate_id WHERE rate_det_id='{$id}'");			
			if($query->num_rows()>0){return $query->row();}	
		}
	}
	public function purchase($type="")
	{
		$query=$this->db->query("SELECT key_id,key_code,key_data FROM tbl_sysdata WHERE key_type='{$type}'");
		if($query->num_rows()>0){return $query->result();}	
	}		
	public function add()
	{
		$data= array(
						"rate_type" =>'job',
						"rate_desc" => $this->input->post("desc"),										
						"user_crea" => $this->userCrea,
						"date_crea" => date('Y-m-d')
					);
		$query=$this->db->insert("tbl_rate",$data);
		if($query==TRUE)
		{
			$this->db->where("rate_type","job");
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
										"job_price_bundle_package"=>$json[$i][3],
										"job_2post_discount"=>$json[$i][4],
										"job_alert_job_to_cv"=>$json[$i][5],
										"job_receive_cv_app"=>$json[$i][6],
										"job_alert_job_to_register"=>$json[$i][7],
										"job_fb_boosting"=>$json[$i][8],
										"job_com_logo_display"=>$json[$i][9],
										"homepage_display"=>$json[$i][10],
										"toprow_display"=>$json[$i][11],
										"free_per_month"=>$json[$i][12],															
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
		{	
			#update rate
			$data= array(
					"rate_type" =>'job',
					"rate_desc" => $this->input->post("txtDesc"),
					"user_updt" => $this->userCrea,
					"date_updt" => date('Y-m-d')
					 );				
			$this->db->where("rate_id",$this->input->post("rate_id"));
			$this->db->update("tbl_rate",$data);					
			#update ads detail
			$data1= array(														
							"rate_det_type"=>$this->input->post("ddlType"),
							"duration"=>$this->input->post("txtDuration"),
							"price"=>$this->input->post("txtPrice"),
							"job_price_bundle_package"=>$this->input->post("ddlPriceBP"),
							"job_2post_discount"=>$this->input->post("txt2PostDiscount"),
							"job_alert_job_to_cv"=>$this->input->post("ddlAlert_job_to_cv"),
							"job_receive_cv_app"=>$this->input->post("ddlReceive_cv"),
							"job_alert_job_to_register"=>$this->input->post("ddlAlert_job_to_register"),
							"job_fb_boosting"=>$this->input->post("ddlFb_boosting"),
							"job_com_logo_display"=>$this->input->post("ddlCompanyLogo"),
							"homepage_display"=>$this->input->post("ddlHomepage"),
							"toprow_display"=>$this->input->post("ddlToprow"),
							"free_per_month"=>$this->input->post("ddlFreeMonths"),						
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

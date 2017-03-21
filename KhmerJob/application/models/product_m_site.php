<?php
	class Product_m_site extends CI_Model
	{
		
		public function __construct()
		{
			parent:: __construct();
		}

		public function index()
		{
			$query=$this->db->query("SELECT * FROM tbl_product AS p INNER JOIN tbl_media AS m ON m.p_id=p.p_id GROUP BY m.p_id ASC");
			return $query->result();
		}
		public function product_page_detail($pro_id){
			if($pro_id!==""){
				$query=$this->db->query("SELECT * FROM tbl_product AS p INNER JOIN tbl_media AS m ON m.p_id=p.p_id 
										INNER JOIN tbl_category AS c ON c.cat_id=p.cat_id INNER JOIN tbl_brand AS b ON b.brn_id=p.brn_id WHERE p.p_id={$pro_id} GROUP BY m.p_id ASC");
				// $this->db->where('p_id',$pro_id);
				// $query=$this->db->get("tbl_product");
				return $query->row();
			}
			
			
		}
		public function slideshow()
		{
			$this->db->where('slide_status', 1);
			$query=$this->db->get("tbl_slide");

			return $query->result();
		}

		public function category1($cat_id)
		{
			//$this->db->where('slide_status', 1);
			
			// $this->db->where('cat_id');
			// $this->db->limit(1);
			$query=$this->db->query("SELECT cat_id, cat_name FROM tbl_category WHERE cat_id={$cat_id}");
			return $query->result();
		
		}

		public function brand($cat_id)
		{
			if ($cat_id!=="") 
			{
				$query=$this->db->query("SELECT * FROM tbl_product AS p INNER JOIN tbl_media AS m ON m.p_id=p.p_id WHERE p.cat_id={$cat_id} GROUP BY m.p_id ASC");
				return $query->result();
			}
		}
	}
	
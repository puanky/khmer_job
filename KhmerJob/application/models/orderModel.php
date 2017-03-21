<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class OrderModel extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	function get_member()
	{
		$query = $this->db->get("tbl_member");
		if($query->num_rows()>0)
		{
			return $query->result();
		}
	}
}
?>
<?php
	$ord_id = $_GET['id'];
	$status = $_GET['status'];
	$str_id = $_GET['str_id'];

	$conn = new mysqli("localhost", "root", "123456", "ecommerce_db");

	$conn->query("Update tbl_order_hdr set ord_status='$status' where ord_id=$ord_id");
?>
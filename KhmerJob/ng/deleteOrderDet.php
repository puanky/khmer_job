<?php
$id = $_GET['id'];
$str = $_GET['str_id'];

$conn = new mysqli("localhost", "root", "123456", "ecommerce_db");

$conn->query("DELETE from tbl_order_det where ord_det_id=$id");
?>
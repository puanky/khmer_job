<?php
global $db;

	$db = new mysqli('localhost','root','123456','ecommerce_db');
	if (mysqli_connect_errno()) 
	{
		die("failed to connect, the error message is:".mysqli_connect_error());
	}

	// $name=$_POST["title"]; 
	// //$name = "sophea";
	// $city=$_GET["t2"];
	// $date=date('Y-m-d');



	// // header("Access-Control-Allow-Origin: *");
	// // header("Content-Type: application/json;charset=UTF-8");
	// $data = json_decode(file_get_contents("php://input"));

	
	 // $conn = mysqli_connect("localhost", "root", "123456", "ecommerce_db");
	 $sql=$db->query("INSERT INTO tbl_comment(comment,cm_crea,descd) VALUES('".$_POST["txt"]."','$date')");
		
		

?>
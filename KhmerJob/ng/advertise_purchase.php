<?php
 	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");
	include("db.php");
	$purchase_type = $_GET['purchase_type'];	
	$result = $conn->query("SELECT key_id,key_type,key_code,key_data FROM tbl_sysdata WHERE key_type='{$purchase_type}' ORDER BY key_code");
	$outp = "";
	while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
	    if ($outp != "") {$outp .= ",";}	    
	    $outp .= '{"type":"'  . $rs["key_type"] . '",';
	    $outp .= '"duration":"'  . $rs["key_code"] . '",';	    
	    $outp .= '"id":"'. $rs["key_id"]. '"}'; 
	}
	$outp ='{"records":['.$outp.']}';
	$conn->close();
	echo($outp);
?>
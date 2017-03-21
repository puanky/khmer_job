<?php
 	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");
	include("db.php");
	
	$result = $db->query("SELECT pro.pro_id, pro.pro_type, p.p_id, p.price, p.p_name, p.short_desc,  c.cat_id, c.cat_name, m.path FROM tbl_promotion AS pro INNER JOIN tbl_promotion_det AS pd ON pro.`pro_id`=pd.`pro_id` RIGHT JOIN tbl_product AS p ON p.`p_id`=pd.`p_id` LEFT JOIN tbl_category AS c ON p.`cat_id`=c.`cat_id` LEFT JOIN tbl_media AS m ON m.`p_id`=p.`p_id`;");
	$outp = "";
	while($rs = $result->fetch_array(MYSQLI_ASSOC)){
	    if ($outp != "") {$outp .= ",";}
	    $outp .= '{"P_id":"'  . $rs["p_id"] . '",';
	    $outp .= '"Short_desc":"'.$rs["short_desc"]. '",';
	    $outp .= '"Path":"'.$rs["path"]. '",';
	    $outp .= '"Cat_name":"'.$rs["cat_name"]. '",';
	    $outp .= '"Price":"'.$rs["price"]. '",';
	    $outp .= '"Pro":"'.$rs["pro_type"]. '",';
	    $outp .= '"P_name":"'   .$rs["p_name"].'"}'; 

	}
	$outp ='{"records":['.$outp.']}';
	$db->close();
	echo($outp);
?>
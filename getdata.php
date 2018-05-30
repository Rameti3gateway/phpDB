<?php
	require("mysql2json.class.php");
	require("connect.php");
	$ID= isset($_GET['ID']) ? $_GET['ID'] : ''; 
	$type=isset($_GET['TYPE']) ? $_GET['TYPE'] :'';
		if($type=='Province'){
			$query="SELECT PROVINCE_ID, PROVINCE_NAME FROM province ORDER BY PROVINCE_NAME ASC ";
		}else if($type=='Amphur'){
			$query="SELECT AMPHUR_ID, AMPHUR_NAME FROM amphur WHERE PROVINCE_ID='".$ID."'";
		} else if($type=='District') {
			$query="SELECT DISTRICT_ID, DISTRICT_NAME FROM district WHERE AMPHUR_ID='".$ID."'";
		}
	$result=mysql_query($query,$connect);
	$num=mysql_affected_rows();

	$json=new mysql2json;
	$data=$json->getJSON($result,$num);
	echo $data;

	// $row = mysql_fetch_array($result);
	// echo json_encode($row);
?>
<?php
	$host = "localhost";
	$username = "root";
	$password = "";
	$db = "db_aej";
	$PicNum = $_GET["PicNum"];

    $con = mysqlI_connect($host,$username,$password) or die("Impossível conectar ao banco.");

    mysqlI_select_db($con,$db) or die("Impossível conectar ao banco");

    $sql = "SELECT * FROM PRODUTOS WHERE PROD_ID=$PicNum";

    $result=mysqlI_query($con,$sql) or die("Impossível executar a query");
	
	$row=mysqlI_fetch_object($result);
	

	header('Content-type: image/jpeg');

	echo $row->PROD_IMG;

?>


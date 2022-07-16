<?php
	$host = "localhost";
	$username = "root";
	$password = "";
	$db = "db_aej";
	$PicNum = $_GET["PROD_ID"];

    $con = mysqlI_connect($host,$username,$password) or die("Impossível conectar ao banco.");

    mysqlI_select_db($con,$db) or die("Impossível conectar ao banco");

    $sql = "SELECT * FROM PRODUTOS";

    $result=mysqlI_query($con,$sql) or die("Impossível executar a query");
	$row=mysql_fetch_object($result);
	Header( "Content-type: imagens/jpeg");
	echo $row->PROD_IMG;
?>
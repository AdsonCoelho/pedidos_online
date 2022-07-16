<?php

$imagem = $_FILES["imagem"];
$host = "localhost";
$username = "root";
$password = "";
$db = "db_aej";

if($imagem != NULL) {
	$nomeFinal = time().'.jpg';
	if (move_uploaded_file($imagem['tmp_name'], $nomeFinal)) {
		$tamanhoImg = filesize($nomeFinal);

		$mysqlImg = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg));

		$con = mysqlI_connect($host,$username,$password) or die("Impossível conectar ao banco.");

		mysqlI_select_db($con,$db) or die("Impossível conectar ao banco");
		
		$sql = "INSERT INTO PRODUTOS (PROD_IMG)";

		mysqlI_query($con,"$sql VALUES ('$mysqlImg')") or
		die("O sistema não foi capaz de executar a query");

		unlink($nomeFinal);

		header("location:exibir.php");
	}
}
else {
	echo"Você não realizou o upload de forma satisfatória.";
}

?>
<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "db_aej";

$con = mysqlI_connect($host,$username,$password) or die("Impossível conectar ao banco.");

 mysqlI_select_db($con,$db) or die("Impossível conectar ao banco");

 $sql = "SELECT * FROM PRODUTOS";

$result=mysqlI_query($con,$sql) or die("Impossível executar a query");

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
			<link a href="style.css" type="text/css" rel="stylesheet" />
			<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Sobre</title>
	</head>
	
	<body class="body">
		<main class="conteudo">
			<header class="cabecalho">
				<nav class="cabecalho_menu">
					<div class="menu">
						<a class="" href="index.html">Inicio</a>
						<a class="" href="sobre.html">Catálogo</a>
						<a class="" href="sobre.html">Sobre</a>
						<a class="" href="login.php">Login</a>			
					</div>
				</nav>
			</header>
		
			<section class="">
				<h1>Exibindo os produtos cadastrados </h1>	<br><br>
				<?php
					while($row = mysqlI_fetch_object($result)) {
						echo $row->PROD_ID;
						echo "<img src='getImagem.php?PicNum=$row->PROD_ID' \">";
					}

					// fechando a conexão
					mysqli_close($con);
				?>
			</section>
		</main>
        
        <footer class="rodape">
            <img class="img_rodape" src="imagens/rodape.png"></a>
        </footer>  
    </body>
</html>
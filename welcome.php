<?php
// Inicialize a sessão
session_start();
 
// Verifique se o usuário está logado, se não, redirecione-o para uma página de login
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
    <title>Bem vindo</title>
    <link a href="style.css" type="text/css" rel="stylesheet" />
	
    
</head>
<body class="body">
	<main class="conteudo">
		<header class="">
			<nav class="">
				<div class="menu">
					<a class="" href="index.html">Inicio</a>
                    <a class="" href="sobre.html">exibir.php</a>
					<a class="" href="sobre.html">Sobre</a>
					<a href="logout.php" class="btn btn-danger ml-3">Sair da conta</a>	
                    <a href="reset-password.php" class="btn btn-warning">Alterar senha</a>		
				</div>
			</nav>
		</header>
        <h2><?php echo htmlspecialchars($_SESSION["username"]);?>, você está na área
		administrativa.
		<div> <br>O que deseja fazer? </div> </h2> 
		<form action="gravar.php" method="POST" enctype="multipart/form-data">
			<br/>
			<label for="imagem"><h2>Clique no botão abaixo para inserir nova imagem:</h2></label>
			<br/>
			<input type="file" name="imagem"/>		
			<input type="submit" value="Enviar"/>
		</form>
    </main>.
	
	 <footer class="rodape">
		<img class="img_rodape" src="imagens/rodape.png"></a>
	</footer>
</body>

</html>
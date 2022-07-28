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
                    <a class="" href="exibir.php">Catálogo</a>
					<a class="" href="sobre.html">Sobre</a>
					<a href="logout.php" class="btn btn-danger ml-3">Sair da conta</a>	
				</div>
			</nav>
		</header>
        <h2><?php echo htmlspecialchars($_SESSION["username"]); ?>, você está na área
		administrativa.
		<div> <br>O que deseja fazer? </div> </h2>

		<a href="register.php" class="btn btn-warning"><h2>1 - Cadastrar usuários</h2></a>

		<a href="register.php" class="btn btn-warning"><h2>2 -  Alterar a senha</h2></a>

		<a href="cadastrar_produtos.html" class="btn btn-warning"><h2>3 - Cadastrar produtos</h2></a>
			
		<form action="gravar.php" method="POST" enctype="multipart/form-data">
			<label for="imagem"><h5>Clique no botão para inserir uma imagem:</h5></label><br/>
		
			<input type="file" name="imagem" title = "Adicione uma imagem"  /><br>	
			<input type="submit" value="Enviar" accept="image/png, image/jpeg"/>
		</form>

    </main>

	 <footer class="rodape">
		<img class="img_rodape" src="imagens/rodape.png"></a>
	</footer>
</body>

</html>
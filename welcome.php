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
        
		<h1> <?php echo htmlspecialchars($_SESSION["username"]); ?>, você está na área
		administrativa, o que deseja fazer? </h1>

		<a href="register.php" class="menu_welcome"><h2>Cadastrar usuários</h2></a>

		<a href="reset-password.php" class="menu_welcome"><h2>Alterar a senha</h2></a>

		<a href="cadastrar_produtos.html" class="menu_welcome"><h2>Cadastrar produtos</h2></a>
		
		<a href="" class="menu_welcome"><h2>Clique no botão para inserir uma imagem</h2></a>
		
		<form action="gravar.php" method="POST" enctype="multipart/form-data">
			<label for="imagem"></label>
			<input type="file" name="imagem" title = "Adicione uma imagem"/><br>	
			<input type="submit" value="Enviar" accept="image/png, image/jpeg"/>
		</form>

    </main>

	 <footer class="rodape">
		<img class="img_rodape" src="imagens/rodape.png"></a>
	</footer>
</body>

</html>
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
                    <a class="" href="sobre.html">Catálogo</a>
					<a class="" href="sobre.html">Sobre</a>
					<a href="logout.php" class="btn btn-danger ml-3">Sair da conta</a>	
                    <a href="reset-password.php" class="btn btn-warning">Alterar senha</a>		
				</div>
			</nav>
		</header>
        <h2> Olá, <b><?php echo htmlspecialchars($_SESSION["username"]); ?>!
        Seja bem vindo ao site do A e J Modas Atacado.</h2>            
    	</section>
        </main>.
     <footer class="rodape">
		<img class="img_rodape" src="rodape.png"></a>
	</footer>
</body>

</html>
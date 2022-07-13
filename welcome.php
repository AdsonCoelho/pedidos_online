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
	    <section class="conteudo_1">
            <h1>Oi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?>
            </b>. Bem vindo ao site do A e J Modas Atacado.</h1><p>
            <a href="reset-password.php" class="btn btn-warning">Redefina sua senha</a>
            <a href="logout.php" class="btn btn-danger ml-3">Sair da conta</a> </p>
    	</section>
    </main>
</body>
</html>
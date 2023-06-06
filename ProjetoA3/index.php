<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<center>
		<h1>Olá, <?php 
					if(isset($_SESSION['nome_usuario']) == null) { ?>
						Visitante</h1>
						<a href="login.php">Login</a><br>
					<?php } else {
						echo $_SESSION['nome_usuario']; ?>
					</h1>
					<a href="cadastro.php">Cadastrar</a><br>
					<a href="listar.php">Listar Usuários</a><br>
					<a href="alterar.php">Alterar Senha</a><br>
					<a href="sair.php">Sair</a>
					<?php 
				} ?>
	</center>
</body>
</html>



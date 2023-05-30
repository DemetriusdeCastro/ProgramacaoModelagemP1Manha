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
		<h1>Olá, <?php echo $_SESSION['nome_usuario']; ?></h1>
		<a href="cadastro.php">Cadastrar</a><br>
		<a href="sair.php">Sair</a>
	</center>
</body>
</html>

<?php

include('conexao.php');

$login = isset($_POST['login']) ? $_POST['login'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';

if ($login == "aluno" && $senha == "fpb") {
	echo "Entrou";
} else {
	echo "Dados Inválidos";
}

?>

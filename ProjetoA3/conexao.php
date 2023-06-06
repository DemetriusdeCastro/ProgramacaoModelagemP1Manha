<?php

/*	ATENÇÃO
	
	É NECESSÁRIO ALTERAR OS DADOS DA CONEXÃO

*/
	

$conexao = mysqli_connect('localhost', 'root', '', 'bancoa3', '3306');
if(!$conexao){
	die('Sistema em manutenção');
}

?>
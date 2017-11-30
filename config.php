<?php
	//PHP 7
	//Conexão com o servidor. Recebe endereço de conexão, usuário e senha.
	$conexao = mysqli_connect('localhost', 'root', '') or die('Vish, deu ruim no servidor');
	//Conexão com o banco de dados. Recebe variável criada na conexão com o servidor e o nome do banco de dados
	//A função die serve para imprimir uma mensagem de erro na tela
	$db = mysqli_select_db($conexao, 'pontoeletronico') or die('Deu ruim no banco de dados');
?>
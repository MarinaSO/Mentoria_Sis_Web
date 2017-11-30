<?php
	//Se houver um formulário disponível
	if ($_SERVER['REQUESTED_METHOD'] == 'POST'){
		$id = $_POST['id']; //variável id recebe valor do campo 'id' do vetor $_POST
		$senha = $_POST['senha'];
	}
?>
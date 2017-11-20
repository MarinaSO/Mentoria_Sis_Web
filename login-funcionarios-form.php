<html>

<head>
	<title>Login Funcionários</title>
	<meta charset="UTF-8">
	<link href="popup.css" rel="stylesheet"> <!-- Carregando as configurações de estilo do pop up -->
	<link href="estilo.css" rel="stylesheet"> <!-- Carregando as configurações de estilo da página -->
	<!-- Script para o pop up -->
	<script>
		function FuncPopup() {
    		var popup = document.getElementById("myPopup");
    		popup.classList.toggle("show");
		}

</script>

</head>

<body>
	<div class="container">
		<!-- Formulário da página de login dos funcionários-->
		<form action="login-funcionarios.php" method="post">
		<!-- Action indica o arquivo php para o qual as informações serão enviadas. -->

			<label>ID</label> <input type="number" name="id" size="5" required></br>
			<label>Senha</label> <input type="password" name="senha" required></br>
			<input type="submit" value="Login">
		</form>
		
		<!-- Link que ativa pop up do Esqueci minha senha-->
		<a onclick="FuncPopup()">Esqueci minha senha.</a>

		<!-- Esqueci minha senha em si -->
  		<div class="popuptext" id="myPopup">
  			<!-- Formulário do pop up de esqueci minha senha-->
  			<form action="esqueci-senha-funcionarios.php" method="post">
				<label>ID</label> <input type="number" name="id" size="5" required></br></br>
				<input type="submit" value="Enviar">
			</form>

			<h7 style="cursor:pointer" onclick="FuncPopup()">Fechar</h7></br> <!-- Link para fechar container -->
		</div>

	</div>
</body>
</html>
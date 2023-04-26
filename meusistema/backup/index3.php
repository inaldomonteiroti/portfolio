<!DOCTYPE html>
<html>
<head>
<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f5f5f5;
		}

		h1 {
			text-align: center;
			color: #333;
			margin-top: 50px;
		}

		form {
			max-width: 400px;
			margin: 0 auto;
			background-color: #fff;
			padding: 20px;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
			border-radius: 5px;
		}

		label {
			display: block;
			margin-bottom: 5px;
			color: #666;
		}

		input[type="text"], input[type="password"], input[type="email"] {
			width: 100%;
			padding: 10px;
			margin-bottom: 20px;
			border: 1px solid #ccc;
			border-radius: 3px;
			box-sizing: border-box;
			font-size: 16px;
		}

		input[type="submit"] {
			background-color: #333;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 3px;
			font-size: 16px;
			cursor: pointer;
			transition: background-color 0.3s ease;
		}

		input[type="submit"]:hover {
			background-color: #666;
		}
	</style>
    	<script>
		function validarFormulario() {
			var nome = document.getElementById("nome").value;
			var usuario = document.getElementById("usuario").value;
			var senha = document.getElementById("senha").value;
			var email = document.getElementById("email").value;
			var error = false;

			if (nome == "") {
				document.getElementById("nome-erro").innerHTML = "Por favor, digite seu nome.";
				error = true;
			} else {
				document.getElementById("nome-erro").innerHTML = "";
			}

			if (usuario == "") {
				document.getElementById("usuario-erro").innerHTML = "Por favor, digite seu usuário.";
				error = true;
			} else {
				document.getElementById("usuario-erro").innerHTML = "";
			}

			if (senha == "") {
				document.getElementById("senha-erro").innerHTML = "Por favor, digite sua senha.";
				error = true;
			} else {
				document.getElementById("senha-erro").innerHTML = "";
			}

			if (email == "") {
				document.getElementById("email-erro").innerHTML = "Por favor, digite seu e-mail.";
				error = true;
			} else {
				document.getElementById("email-erro").innerHTML = "";
			}

			if (!error) {
				document.getElementById("formulario").submit();
			}
		}
	</script>
	<title>Cadastro de Cliente</title>
</head>
<body>
	<h1>Cadastro de Cliente</h1>
	<form action="cadastrar_cliente.php" method="post">
		<label for="nome">Nome:</label>
		<input type="text" name="nome" id="nome" required><br>

		<label for="usuario">Usuário:</label>
		<input type="text" name="usuario" id="usuario" required><br>

		<label for="senha">Senha:</label>
		<input type="password" name="senha" id="senha" required><br>

		<label for="email">E-mail:</label>
		<input type="email" name="email" id="email" required><br>

		<input type="submit" value="Cadastrar">
	</form>
</body>
</html>
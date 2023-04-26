

<?php
// Configurações do banco de dados
$user = "root"; 
$password = ""; 
$database = "meusistema"; 

# O hostname deve ser sempre localhost 
$hostname = "localhost"; 

# Conecta com o servidor de banco de dados 
//a conexão agora passa a levar a base de dados com quarto parâmetro
$conexao = mysqli_connect($hostname ,$user ,$password, $database)or die( ' Erro na conexão ' );

// Verifica se houve erro na conexão
if (mysqli_connect_errno()) {
	echo "Erro na conexão com o banco de dados: " . mysqli_connect_error();
	exit();
}

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$nome = mysqli_real_escape_string($conexao, $_POST["nome"]);
	$usuario = mysqli_real_escape_string($conexao, $_POST["usuario"]);
	$senha = mysqli_real_escape_string($conexao, $_POST["senha"]);
	$email = mysqli_real_escape_string($conexao, $_POST["email"]);
    $ativo = mysqli_real_escape_string($conexao, $_POST["ativo"]);

	// Insere os dados do formulário no banco de dados
	$sql = "INSERT INTO clientes (nome, usuario, senha, email, ativo) VALUES ('$nome', '$usuario', '$senha', '$email','$ativo')";

	if (mysqli_query($conexao, $sql)) {
        $mensagem = '<div class="alert alert-success" role="alert"><i class="fas fa-check-circle me-2"></i>Cadastro realizado com sucesso!</div>';
    } else {
        $mensagem = '<div class="alert alert-danger" role="alert"><i class="fas fa-times-circle me-2"></i>Erro ao cadastrar no banco de dados: ' . mysqli_error($conexao) . '</div>';
    }

    

	mysqli_close($conexao);
}
?>

<!DOCTYPE html>
<html lang="en">
    <!-- Inclua este link no cabeçalho da sua página -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-Fr2T1jLUECMRzf8BfWJn6v+P6nGZ9QzLiPCWxPvJpU6Cjvf6G7V8Hv15uB7gq3YXzlX7C8zQ+uGG7JppwT16Gw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>
<body>
    <style>
        .alert {
    padding: 1rem;
    border: none;
    border-radius: 0.5rem;
    margin-bottom: 1rem;
    box-shadow: 0 0.25rem 0.5rem rgba(0, 0, 0, 0.1);
}

.alert-success {
    background-color: #d4edda;
    color: #155724;
}

.alert-danger {
    background-color: #f8d7da;
    color: #721c24;
}

    </style>
<div class="container">
    <?php echo $mensagem; ?>
    <!-- conteúdo da página aqui -->
</div>
<script>
    // Fecha a janela após alguns segundos
    setTimeout(function() {
        var alertas = document.querySelectorAll('.alert');
        alertas.forEach(function(alerta) {
            alerta.classList.remove('show');
        });
    }, 5000);
</script>
</body>
</html>





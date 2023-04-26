<?php
// Configurações do banco de dados
$user = "root"; 
$password = ""; 
$database = "meusistema"; 

# O hostname deve ser sempre localhost 
$hostname = "localhost"; 

// Conexão com o banco de dados
$conexao = mysqli_connect($hostname, $user, $password, $database);

// Verifica se houve erro na conexão
if (mysqli_connect_errno()) {
	echo "Erro na conexão com o banco de dados: " . mysqli_connect_error();
	exit();
}

// Verifica se foi enviado o ID do cliente a ser excluído
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Monta a query SQL para excluir o cliente com o ID informado
    $sql = "DELETE FROM clientes WHERE id = $id";
    
    // Executa a query e verifica se ocorreu algum erro
    if (mysqli_query($conexao, $sql)) {
        echo "Cliente excluído com sucesso.";
    } else {
        echo "Erro ao excluir o cliente: " . mysqli_error($conexao);
    }
// Adiciona um botão para voltar à página de cadastro de clientes
echo '<button onclick="window.location.href=\'clientes_cadastrados.php\'">Voltar ao Cadastro de Clientes</button>';
} else {
    echo "<p>ID do cliente não informado.</p>";
}

// Fecha a conexão com o banco de dados
mysqli_close($conexao);
?>

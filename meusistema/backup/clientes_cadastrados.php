<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes Cadatrados</title>

    <style>
table {
    font-family: Arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #ddd;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>

</head>
<body>
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

// Consulta os dados dos clientes no banco de dados
$sql = "SELECT * FROM clientes ORDER BY nome ASC";
$resultado = mysqli_query($conexao, $sql);

// Verifica se a consulta retornou resultados
if (mysqli_num_rows($resultado) > 0) {
	echo "<table>";
	echo "<tr><th>ID</th><th>Nome</th><th>Usuário</th><th>E-mail</th><th>Ativo</th><th>Cadastro</th><th>Editar</th><th>Deletar</th></tr>";

	// Loop para exibir os dados dos clientes
	while ($linha = mysqli_fetch_assoc($resultado)) {
		echo "<tr>";
		echo "<td>" . $linha["id"] . "</td>";
		echo "<td>" . $linha["nome"] . "</td>";
		echo "<td>" . $linha["usuario"] . "</td>";
		echo "<td>" . $linha["email"] . "</td>";
		echo "<td>" . ($linha["ativo"] == 1 ? "Sim" : "Não") . "</td>";
		echo "<td>" . date("d/m/Y H:i:s", strtotime($linha["cadastro"])) . "</td>";
		echo '<td><a href="editar_cliente.php?id=' . $linha["id"] . '" class="btn btn-primary">Editar</a></td>';
		echo '<td><a href="excluir_cliente.php?id=' . $linha["id"] . '" class="btn btn-danger">Deletar</a></td>';
		echo "</tr>";
	}

	echo "</table>";
} else {
	echo "Não foram encontrados registros de clientes.";
}

mysqli_close($conexao);
?>

</body>
</html>


 
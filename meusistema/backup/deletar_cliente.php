<?php
// Verifica se foi passado um ID de cliente válido
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
} else {
    header('Location: listar_clientes.php');
    exit();
}

// Conexão com o banco de dados
$conexao = mysqli_connect('localhost', 'root', '', 'meusistema');

// Verifica se houve erro na conexão
if (mysqli_connect_errno()) {
    echo "Erro na conexão com o banco de dados: " . mysqli_connect_error();
    exit();
}

// Consulta os dados do cliente a ser excluído
$sql = "SELECT * FROM clientes WHERE id = $id";
$resultado = mysqli_query($conexao, $sql);

// Verifica se o cliente existe
if (mysqli_num_rows($resultado) == 0) {
    header('Location: listar_clientes.php');
    exit();
}

$cliente = mysqli_fetch_assoc($resultado);

// Fecha a conexão com o banco de dados
mysqli_close($conexao);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Confirmar exclusão do cliente</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>Confirmar exclusão do cliente</h1>
    <p>Tem certeza que deseja excluir o cliente "<?php echo $cliente['nome']; ?>"?</p>
    <form method="post" action="excluir_cliente.php">
        <input type="hidden" name="id" value="<?php echo $cliente['id']; ?>">
        <button type="submit">Confirmar exclusão</button>
        <button type="button" onclick="history.back();">Cancelar</button>
    </form>
</body>
</html>
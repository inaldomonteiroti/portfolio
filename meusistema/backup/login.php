<?php
// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Define as credenciais de acesso
    $usuario_valido = 'usuario';
    $senha_valida = 'senha';
    
    // Obtém os dados do formulário
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    
    // Verifica se o usuário e a senha são válidos
    if ($usuario == $usuario_valido && $senha == $senha_valida) {
        // Autenticação bem-sucedida, redireciona para a página inicial
        header('Location: index.php');
        exit;
    } else {
        // Autenticação falhou, exibe uma mensagem de erro
        $erro = 'Usuário ou senha inválidos.';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <?php if (isset($erro)) { ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $erro; ?>
            </div>
        <?php } ?>
        <form method="post" action="autenticar.php">
            <label for="usuario">Usuário:</label>
            <input type="text" id="usuario" name="usuario"><br><br>
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha"><br><br>
            <input type="submit" value="Entrar">
        </form>
    </div>
</body>
</html>

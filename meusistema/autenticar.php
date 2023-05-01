<script>
    const usuario = formulario.usuario.value;
    const senha = formulario.senha.value;
    if (usuario === 'usuario' && senha === 'senha') {
    // Se o usuário e a senha estiverem corretos, envia o formulário
    formulario.submit();
    window.location.href = 'modulos/index.html';
    } else {
    // Caso contrário, exibe uma mensagem de erro
    mensagemErro.innerText = 'Usuário ou senha inválidos';
    }
    
</script>

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
        // Autenticação bem-sucedida, inicia a sessão e redireciona para a página inicial
        session_start();
        $_SESSION['usuario'] = $usuario;
        header('Location: modulos/index.html');
        exit;
    } else {
        // Autenticação falhou, exibe uma mensagem de erro
        $erro = 'Usuário ou senha inválidos.';
        echo $erro;
    }
}
?>
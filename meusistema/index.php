<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEVIM SISTEMAS</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    
    <div class="page">
        <form id="formulario" method="POST" class="formLogin" action="autenticar.php">
            <h2 class="titulo">DEVIM SISTEMAS</h2>
            <p>Digite os seus dados de acesso no campo abaixo.</p>
            <label for="usuario">Usuário</label>
            <input type="usuario" name="usuario" placeholder="Digite seu usuario" autofocus="true" />
            <label for="senha">Senha</label>
            <input type="password" name="senha" placeholder="Digite sua senha" />
            <div> <a class="esqueci" href="/">Esqueci minha senha</a><a class="cadastrar" href="/">Efetue um cadastro</a></div>           
            <input type="submit" value="Acessar" class="btn" />
            <p id="mensagem-erro"></p> <!-- elemento para exibir a mensagem de erro -->
        </form>
    </div> 
    
    <script>
    const formulario = document.getElementById('formulario');
    const mensagemErro = document.getElementById('mensagem-erro');

    formulario.addEventListener('submit', (event) => {
    event.preventDefault(); // impede o envio do formulário
  
    const usuario = formulario.usuario.value;
    const senha = formulario.senha.value;
  
  // Aqui, você deve implementar a lógica de verificação do usuário e senha
  // Por exemplo, você pode verificar se o usuário e a senha estão armazenados em um banco de dados
  // ou em um arquivo de texto.

     if (usuario === 'usuario' && senha === 'senha') {
    // Se o usuário e a senha estiverem corretos, envia o formulário
    formulario.submit();
    } else {
    // Caso contrário, exibe uma mensagem de erro
    mensagemErro.innerText = 'Usuário ou senha inválidos';
    }
    });
    </script>
</body>
</html>
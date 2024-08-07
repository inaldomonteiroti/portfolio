<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Clientes</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h1>Cadastro de Clientes</h1>
    <div class="mt-3">
    <a href="clientes_cadastrados.php" class="btn btn-info">Ver clientes cadastrados</a>
</div>

    <form method="post" action="cadastrar_cliente.php">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="form-group">
            <label for="usuario">Usuário:</label>
            <input type="text" class="form-control" id="usuario" name="usuario" required>
        </div>
        <div class="form-group">
            <label for="senha">Senha:</label>
            <input type="password" class="form-control" id="senha" name="senha" required>
        </div>
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="ativo">Ativo:</label>
            <select class="form-control" id="ativo" name="ativo">
                <option value="1">Sim</option>
                <option value="0">Não</option>
            </select>
        </div>
        <div class="form-group">
            <label for="data_registro">Data de Registro:</label>
            <input type="text" class="form-control" id="data_registro" name="data_registro" value="<?php echo date('d/m/Y H:i:s'); ?>" readonly>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
        <button type="reset" class="btn btn-secondary">Limpar</button>

    </form>
</div>

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

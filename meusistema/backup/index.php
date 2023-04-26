<!DOCTYPE html>
<html>
<head>
    <title>Sistemas DEVIM</title>
    <!-- Inclui o Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Inclui o CSS personalizado -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <style>
        /* Adiciona uma imagem de fundo à página */
body {
  background-image: url("http://www.atlasconsultora.com/wp-content/uploads/2020/08/sistema.jpg");
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}


/* Adiciona um gradiente de fundo ao painel de login */
.login-panel {
  margin-top: 220px;
  background-color: rgba(255, 255, 255, 0.9);
  background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.2));
  border-radius: 20px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
}

/* Adiciona um espaçamento interno ao painel de login */
.panel-body {
  padding: 20px;
}

/* Adiciona uma borda arredondada aos campos de entrada */
.form-control {
  border-radius: 20px;
  box-shadow: none;
  border: 1px solid #ccc;
}

/* Adiciona um estilo de transição ao campo de entrada ativo */
.form-control:focus {
  border-color: #4CAF50;
  box-shadow: none;
  transition: border-color 0.2s ease-in-out;
}

/* Adiciona um estilo de transição ao botão de login */
.btn-success {
  background-color: #4CAF50;
  border-color: #4CAF50;
  border-radius: 20px;
  transition: background-color 0.2s ease-in-out;
}

/* Adiciona um estilo de transição ao botão de login quando hover */
.btn-success:hover {
  background-color: #3e8e41;
  border-color: #3e8e41;
}

/* Adiciona um estilo personalizado ao cabeçalho do painel de login */
.panel-title {
  font-size: 20px;
  font-weight: bold;
  color: #333;
  text-align: center;
  text-shadow: 2px 2px #ddd;
}

/* Adiciona um estilo personalizado ao botão de login */
.btn-success {
  font-size: 18px;
  font-weight: bold;
  color: #fff;
  text-shadow: 1px 1px #333;
}
    </style>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h5 class="panel-title">ACESSO SISTEMAS</h5>
                    </div>
                    <div class="panel-body">
                        <?php if (isset($erro)) { ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $erro; ?>
                            </div>
                        <?php } ?>
                        <form method="post" action="autenticar.php" role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Usuário" name="usuario" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Senha" name="senha" type="password" value="">
                                </div>
                                <button type="submit" class="btn btn-lg btn-success btn-block">Entrar</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Inclui o jQuery e o Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>

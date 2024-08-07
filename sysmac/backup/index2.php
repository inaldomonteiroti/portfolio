<?php 

# Substitua abaixo os dados, de acordo com o banco criado
$user = "root"; 
$password = ""; 
$database = "meusistema"; 

# O hostname deve ser sempre localhost 
$hostname = "localhost"; 

# Conecta com o servidor de banco de dados 
//a conexão agora passa a levar a base de dados com quarto parâmetro
$conexao = mysqli_connect($hostname ,$user ,$password, $database)or die( ' Erro na conexão ' );

# Seleciona o banco de dados 
mysqli_select_db( $conexao,$database ) or die( 'Erro na seleção do banco' );

# Executa a query desejada 
$query = "SELECT * FROM usuarios"; 
$result_query = mysqli_query( $conexao, $query ) or die(' Erro na query:' . $query . ' ' . mysql_error() ); 

# Exibe os registros na tela 
$result = $conexao->query($query);

// Verifica se há resultados
if ($result->num_rows > 0) {
    // 3. Exibir os resultados na tela
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Nome: " . $row["nome"]. " - Usuario: " . $row["usuario"]. " - Email: " . $row["email"];
    }
} else {
    echo "0 resultados";
}

// 4. Fechar conexão com o banco de dados
$conexao->close();
?>


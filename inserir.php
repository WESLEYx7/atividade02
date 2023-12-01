<?php 

    //Dados da conta de usuário do MySQl para ser passado como parâmetro
    $servidor = "localhost";
    $usuario = "aluno";
    $senha = "123";
    $banco = "db_web";
    
    //Try para a tentativa de criação da tabela e insersão dos dados
    try {
        $conn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
        //echo "Deuuu cerrtoooo KARAIIII";
        //Configura erros
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //Comando SQL para inserir os valores para a tabela
        $sql = 
            "INSERT INTO usuarios(nome,sobrenome,email) VALUES (
                'SAMUEL', 'WESLEY', 'borrachinha123@email.com'
            );
        ";

        //Executar o comando SQL
        $conn->exec($sql);
        //echo "Comando executado com sucesso";

        //Capturar exception de erro do PDO ou comandos sql no try
    } catch (PDOException $e) {
        echo "Error..." . $e->getMessage();
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Dados</title>
    <link rel="stylesheet" href="./styles/styleInserir.css">
</head>
<body>
<header>
        <div class="ladoEsquerdo">
            <h1>Inserir Dados</h1>
        </div>

        <!-- Links para as páginas de cada etapa -->
        <div class="links">
            <a href="./index.php">Home</a>
            <a onclick="aviso()" id="criarTabela" href="./criar_tabela.php">Criar Tabela</a>
            <a href="./inserir.php">Inserir Dados</a>
            <a href="recuperar_dado.php">Listar Dados</a>
        </div>
    </header>

    <div class="divPrincipal">
        <form action="./inserir.php" method="post">
        <h3>Insira seus dados</h3>
            <input placeholder="Digite seu nome" type="text">
            <input placeholder="Digite seu nome" type="text">
        </form>
    </div>
    
</body>
</html>

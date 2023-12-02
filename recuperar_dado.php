<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Dados</title>
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

    <?php
    // Dados da conta de usuário do MySQL para serem passados como parâmetro
    $servidor = "localhost";
    $usuario = "aluno";
    $senha = "123";
    $banco = "db_web";

    try {
        $conn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Comando SQL para listar o nome, sobrenome e email dos usuários
        $sql = "SELECT nome, sobrenome, email FROM usuarios";

        // Passando para a variável $dado a busca com a query fetchAll que serve para buscar todos
        $dado = $conn->query($sql)->fetchAll();

        // Laço de repetição para exibir na tela os usuários com seus respectivos dados
        foreach($dado as $item) {
            echo "Nome: {$item['nome']},
            Sobrenome: {$item['sobrenome']} 
            Email: {$item['email']} <br>";
        }
    } catch (PDOException $e) {
        echo "Error..." . $e->getMessage();
    }

    ?>
</body>
</html>

<?php
// Dados da conta de usuário do MySQL para ser passado como parâmetro
$servidor = "localhost";
$usuario = "aluno";
$senha = "123";
$banco = "db_web";

// Try para a tentativa de criação da tabela e inserção dos dados
try {
    $conn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Comando SQL para inserir valores na tabela 'usuarios' (apenas para teste)
    
        // $sql = "INSERT INTO  usuarios(nome, sobrenome, email) VALUES 
        //     ('SAMUEL', 'WESLEY', 'borrachinha123@email.com')";
        // $conn->exec($sql);
        // echo "Registro inserido com sucesso!";


    // Verifica se o formulário foi enviado
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        // Obter dados do formulário para 'usuarios'
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $email = $_POST['email'];

        // Inserir dados na tabela 'usuarios'
        $stmtUsuarios = $conn->prepare("INSERT INTO usuarios (nome, sobrenome, email) VALUES (?, ?, ?)");
        $stmtUsuarios->execute([$nome, $sobrenome, $email]);
    }

    // Recuperar dados da tabela 'usuarios'
    $stmtUsuarios = $conn->query("SELECT * FROM usuarios");
    $resultadosUsuarios = $stmtUsuarios->fetchAll(PDO::FETCH_ASSOC);

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
                <input name="nome" placeholder="Digite seu nome" type="text">
                <input name="sobrenome" placeholder="Digite seu sobrenome" type="text">
                <input name="email" placeholder="Digite seu email" type="text">
                <input type="submit" value="INSERIR">
        </form>
    </div>
    
</body>
</html>

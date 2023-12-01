<?php 

    //Dados da conta de usuário do MySQl para ser passado como parâmetro
    $servidor = "localhost";
    $usuario = "aluno";
    $senha = "123";
    $banco = "db_web";
    
    //Try catch com a finalidade de fazer a com o banco de dados 
    try {
        $conn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
        //echo "Deuuu cerrtoooo";
        //Configura erros
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //SQL para criar tabela
        $sql = "CREATE TABLE usuarios (
            id INT PRIMARY KEY AUTO_INCREMENT,
            nome VARCHAR(20) NOT NULL,
            sobrenome VARCHAR(120),
            email VARCHAR(50)
        );";

        //Comando SQL para insirir valores para a tabela
        /*
        $sql = 
            "INSERT INTO usuarios(nome, sobrenome, email) VALUES (
                'MARIA', 'GABRIELA', 'mariagabriel@email.com';
            );
        ";*/

        //Comando para executar o comando sql insert
        $conn->exec($sql);
        echo "Comando executado com sucesso";

        header('Location: index.php');
        

        

        //Capturar qual erro com o exception do PDO e dizer o erro na tela
    } catch (PDOException $e) {
        echo "Há tabela já foi criada" . $e->getMessage();
        header('Location: index.php');
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar tabela</title>
</head>
<body>
    
    <script>
        window.alert('Tabela cadastrada com sucesso!')
    </script>
</body> 
</html>

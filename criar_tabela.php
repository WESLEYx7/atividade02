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

        //Capturar qual erro com o exception do PDO e dizer o erro na tela
    } catch (PDOException $e) {
        echo "Error..." . $e->getMessage();
    }

?>

<?php 

    $servidor = "localhost";
    $usuario = "aluno";
    $senha = "123";
    $banco = "db_web";
    
    try {
        $conn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
        //echo "Deuuu cerrtoooo KARAIIII";
        //Configura erros
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //SQL para criar tabela
        $sql = "CREATE TABLE usuarios (
            id INT PRIMARY KEY AUTO_INCREMENT,
            nome VARCHAR(20) NOT NULL,
            sobrenome VARCHAR(120),
            email VARCHAR(50)
        );";

        $sql = 
            "INSERT INTO usuarios(nome, sobrenome, email) VALUES (
                'MARIA', 'GABRIELA', 'mariagabriel@email.com';
            );
        ";

        $conn->exec($sql);
        echo "Comando executado com sucesso";

    } catch (PDOException $e) {
        echo "Error..." . $e->getMessage();
    }

?>

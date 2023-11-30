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
        //Inserindo dados na tabela usuarios.
        $sql = 
            "INSERT INTO usuarios(nome, sobrenome, email) VALUES (
                'MARIA', 'GABRIELA', 'mariagabriel@email.com';
            );
        ";
        //Informando que foi tudo executado bem.
        $conn->exec($sql);
        echo "Comando executado com sucesso";
        //Mensagem de erro.
        //Caso dê algum erro pegar essa mesagem guardar atraves do get e exibir ao usuário.
    } catch (PDOException $e) {
        echo "Error..." . $e->getMessage();
    }

?>

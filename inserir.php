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

        $sql = 
            "INSERT INTO usuarios(nome,sobrenome,email) VALUES (
                'SAMUEL', 'WESLEY', 'borrachinha123@email.com'
            );
        ";

        $conn->exec($sql);
        echo "Comando executado com sucesso";

    } catch (PDOException $e) {
        echo "Error..." . $e->getMessage();
    }

?>

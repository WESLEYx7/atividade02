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

        $sql = "
           SELECT nome, sobrenome FROM usuarios
        ";

        $dado = $conn->query($sql)->fetchAll();

        foreach($dado as $item) {
            echo "Nome: {$item['nome']},
            Sobrenome: {$item['sobrenome']} <br>";
        }

        $conn->exec($sql);
        echo "Comando executado com sucesso";

    } catch (PDOException $e) {
        echo "Error..." . $e->getMessage();
    }

?>

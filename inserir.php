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
        //Inserindo dados na tabela
        $sql = 
            "INSERT INTO usuarios(nome,sobrenome,email) VALUES (
                'SAMUEL', 'WESLEY', 'borrachinha123@email.com'
            );
        ";
        //Caso ocorra tudo bem mostrar mensagem ao usuario.
        $conn->exec($sql);
        echo "Comando executado com sucesso";
        //Caso dê algum erro pegar essa mesagem guardar atraves do get e exibir ao usuário.
    } catch (PDOException $e) {
        echo "Error..." . $e->getMessage();
    }

?>

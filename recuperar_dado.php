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
        //Selecionando os dados da tabela que desejamos recuperar.
        $sql = "
           SELECT nome, sobrenome FROM usuarios
        ";

        $dado = $conn->query($sql)->fetchAll();
        //Selecionando os dados específicos.
        foreach($dado as $item) {
            echo "Nome: {$item['nome']},
            Sobrenome: {$item['sobrenome']} <br>";
        }
        //Resposta dada ao usuário caso ocorra tudo em. 
        $conn->exec($sql);
        echo "Comando executado com sucesso";
        //Caso dê algum erro pegar essa mesagem guardar atraves do get e exibir ao usuário..
    } catch (PDOException $e) {
        echo "Error..." . $e->getMessage();
    }

?>

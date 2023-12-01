<?php 

    //Dados da conta de usuário do MySQl para ser passado como parâmetro
    $servidor = "localhost";
    $usuario = "aluno";
    $senha = "123";
    $banco = "db_web";
    
    try {
        $conn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
        //echo "Deuuu cerrtoooo";

        //Configurar erros
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //Comando SQL para listar o nome e o sobrenome dos usuários
        $sql = "
           SELECT nome, sobrenome FROM usuarios
        ";

        //Passando para a variável $dado a busca com a query fetchAll que serve para buscar todos
        $dado = $conn->query($sql)->fetchAll();

        //Laço de repetição para jogar na tela os usuários com seus respectivos dados
        foreach($dado as $item) {
            echo "Nome: {$item['nome']},
            Sobrenome: {$item['sobrenome']} <br>";
        }

        //Executar o comando SQL
        $conn->exec($sql);
        echo "Comando executado com sucesso";

        //Capturar exception de erro do PDO ou comandos sql no try
    } catch (PDOException $e) {
        echo "Error..." . $e->getMessage();
    }

?>

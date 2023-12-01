<?php 

    //Dados da conta de usuário do MySQl para ser passado como parâmetro
    $servidor = "localhost";
    $usuario = "aluno";
    $senha = "123";
    $banco = "db_web";
    
    //Try para a tentativa de criação da tabela e insersão dos dados
    try {
        $conn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
        //echo "Deuuu cerrtoooo KARAIIII";
        //Configura erros
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //Comando SQL para inserir os valores para a tabela
        $sql = 
            "INSERT INTO usuarios(nome,sobrenome,email) VALUES (
                'SAMUEL', 'WESLEY', 'borrachinha123@email.com'
            );
        ";

        //Executar o comando SQL
        $conn->exec($sql);
        echo "Comando executado com sucesso";

        //Capturar exception de erro do PDO ou comandos sql no try
    } catch (PDOException $e) {
        echo "Error..." . $e->getMessage();
    }

?>

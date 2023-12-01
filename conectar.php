<?php 

    //Dados da conta de usuário do MySQl para ser passado como parâmetro
    $servidor = "localhost";
    $usuario = "aluno";
    $senha = "123";
    $banco = "db_web";
    
    //Try com a finalidade de fazer a conexão com o banco de dados
    try {
        $conn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
        echo "Deuuu cerrtoooo";

        //Configurar erros
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //Catcha para capturar erro de conexão com o PDOException
    } catch (PDOException $e) {
        echo "Error..." . $e->getMessage();
    }

?>

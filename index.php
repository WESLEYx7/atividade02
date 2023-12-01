<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
    <header>
        <div class="ladoEsquerdo">
            <h1>Home</h1>
        </div>
        <!-- Links para as páginas de cada etapa -->
        <div class="links">
            <a onclick="aviso()" id="criarTabela" href="./criar_tabela.php">Criar Tabela</a>
            <a href="./inserir.php">Inserir Dados</a>
            <a href="recuperar_dado.php">Listar Dados</a>
        </div>
    </header>
    
    <script>

        //Função criada para mostrar ao usuário que a tabela foi criada
        function aviso () {
            window.alert('Você já criou tabela')
        }
    </script>


</body>
</html>
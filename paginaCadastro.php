<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Cadastro</title>
</head>
<body>
    
    <?php include 'cadastro.php' //inportando o arquivo ?> 
    <form method="POST">
        <label>CPF: </label>
        <input type="text" id="tCpf" name="tCpf">
        <br><br>

        <label>Nome: </label>
        <input type="text" id="tNome" name="tNome">
        <br><br>

        <label>Telefone: </label>
        <input type="text" id="tTelefone" name="tTelefone">
        <br><br>

        <label>Endereco: </label>
        <input type="text" id="tEndereco" name="tEndereco">
        <br><br>

        <label>Cidade: </label>
        <input type="text" id="tCidade" name="tCidade">
        <br><br>



        <button>Cadastrar
            <?php 

            //Passando os dados para o construtor
            function consultarObj(){
                $cpf        = $_POST['tCpf'];
                $nome       = $_POST['tNome'];
                 $telefone   = $_POST['tTelefone'];
                $endereco   = $_POST['tEndereco'];
                $cidade     = $_POST['tCidade'];
                
                $cad = new Cadastro($cpf, $nome, $telefone, $endereco, $cidade);

                return $cad;
            }

            ?>
        </button>
    </form>

    <?php
        echo consultarObj()->imprimir();
    ?>
    
</body>
</html>
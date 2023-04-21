<?php
    include_once('conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Anotação</title>
</head>
<body>
    <form action="anotacao.php" method="POST">
        <label for="titulo">Título da anotação:</label> 
        <input type="text" name="titulo">
        <textarea name="descricao" rows="10" cols="50" placeholder="Digite sua anotação"></textarea>
        <div name="data">
            <?php $dat = date('Y/m/d');
                echo $dat;
            ?>
        </div>
        <input type="submit" value="Salvar anotação" name="salvar" id="saveAnot">
        <a href="index.php" id="voltar">Voltar</a>
    </form>
    <?php
    //Pega os valores das variáveis de acordo com os atributos names em html
            if(isset($_POST['salvar'])){
            $titulo = $_POST['titulo'];
            $descricao = $_POST['descricao'];

            //retorna apenas se a conexão com bd falhou
            if(!$con){
                die("Falha na conexão com o banco de dados" .mysqli_connect_error());
            }

            // caso a conexão tenha dado certo, é gerado uma variável com o comando em sql
            $sql = "INSERT INTO anotacoes (titulo , descricao) VALUES ('$titulo', '$descricao')";
            
            //executa o comendo sql 
            $res = mysqli_query($con, $sql);

            //se salvar deu certo, retorna a página inicial, do contrário, gera mensagem de erro
            if($res){
                header("location: index.php");
            }else{
                echo "algo deu errado";
            }
        }
    ?>
</body>
</html>
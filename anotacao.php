<?php
    include_once('conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anotação</title>
</head>
<body>
    <a href="index.php">Voltar</a>
    <form action="anotacao.php" method="POST">
        <label for="titulo">Título da anotação:</label> 
        <br>
        <input type="text" name="titulo">
        <br>
        <br>
        <textarea name="descricao" rows="10" cols="30" placeholder="Digite sua anotação"></textarea>
        <br>
        <div name="data">
            <?php $dat = date('Y/m/d');
                echo $dat;
            ?>
        </div>
        <br>
        <input type="submit" value="Salvar anotação" name="salvar">
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
            $sql = "INSERT INTO anotacoes (titulo , descricao , data) VALUES ('$titulo', '$descricao', NOW())";
            
            //executa o comendo sql 
            $res = mysqli_query($con, $sql);

            //se salvar deu certo, retorna a página inicial, do contrário, gera mensagem de erro
            if($res){
                ?>
                <?php
                header("location: index.php");
            }else{
                echo "algo deu errado";
            }
        }
    ?>
</body>
</html>
<?php
    include_once('conexao.php');

    //Recupera valor ID passado pelo editar do index
    $id = $_GET['id'];

    //Seleciona no BD a informação de acordo com o ID passado
    $sql= "SELECT * FROM anotacoes WHERE idAnotacoes = $id";
    //Faz a consulta
    $res = mysqli_query($con, $sql);

    //Transforma o resultado da consulta em um array com as informações da anotação
    $row = mysqli_fetch_assoc($res);

    if(isset($_POST['salvar'])){
        $titulo = $_POST['titulo'];
        $descricao = $_POST['descricao'];

    $sqlUpdate = "UPDATE anotacoes SET titulo = '$titulo' , descricao = '$descricao' WHERE idAnotacoes = $id";
    
    $resUpdate = mysqli_query($con, $sqlUpdate);

    if($resUpdate){
        header("location: index.php");
    }else{
        echo "algo deu errado";
    }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<form action="editar.php?id=<?php echo $row['idAnotacoes'];?>" method="POST">
        <label for="titulo">Título da anotação:</label> 
        <input type="text" name="titulo" value="<?php echo $row['titulo']?>">
        <textarea name="descricao" rows="10" cols="50" placeholder="Digite sua anotação"><?php echo $row['descricao']?></textarea>
        <div name="data">
            <?php $dat = date('Y/m/d');
                echo $dat;
            ?>
        </div>
        <input type="submit" value="Salvar anotação" name="salvar" id="saveAnot">
        <a href="index.php" id="voltar">Voltar</a>
    </form>
</body>
</html>
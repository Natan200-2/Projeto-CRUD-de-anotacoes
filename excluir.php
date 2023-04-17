<?php
    include_once('conexao.php');

    $id = $_GET['id'];

    $sqlDelete = "DELETE FROM anotacoes WHERE idAnotacoes = $id"; 
    
    $resDelete = mysqli_query($con, $sqlDelete);

    if($resDelete){
        header("location: index.php");
    }else{
        echo "algo deu errado";
    }
?>
<?php
    //query ao BD para listar as anotações salvas
    include_once("conexao.php");
    //comando sql
    $consultarTodasAnotacoes = 'SELECT * FROM anotacoes ORDER BY idAnotacoes DESC';
    //comando para consultar
    $resTA =  mysqli_query($con, $consultarTodasAnotacoes);

    $id = mysqli_insert_id($con);
    //$consulAnotacoes = mysqli_query($con, $consultarAnotacoes);
?>
<?php
    //query ao BD para listar as anotações salvas
    include_once("conexao.php");
    //comando sql
    $consultarTodasAnotacoes = 'SELECT * FROM anotacoes ORDER BY idAnotacoes DESC';
    //comando para consultar
    $resTA =  mysqli_query($con, $consultarTodasAnotacoes);

    $consultarAnotacao = 'SELECT * FROM anotacoes WHERE idAnotacoes = idAnotacoes';

    $resA = mysqli_query($con, $consultarAnotacao);

    $id = mysqli_insert_id($con);
    //$consulAnotacoes = mysqli_query($con, $consultarAnotacoes);
?>
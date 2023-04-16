<?php
    //atribui os parâmetros para as variáveis
    $host = 'localhost';
    $bd = 'projetowebum';
    $user = 'root' ; 
    $pass='';

    //cria a conexão
    $con = new mysqli($host, $user, $pass, $bd);

    //exibe mensagens informando falha ou sucesso na conexão
    if (!$con) {
        die('A conexão falhou.'.mysqli_connect_error());
    }
    else{
        //print '<h1>Conexão realizada com sucesso!</h1><br>';
    }
?>
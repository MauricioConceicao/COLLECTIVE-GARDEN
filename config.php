<?php

    $dbHost = 'LocalHost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'collective_garden';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    //if($conexao->connect_errno){

    //    echo "erro na conexão";
    //}else{
    //    echo"Concexão efetuada com sucesso";
    //}

?>
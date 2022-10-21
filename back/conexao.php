<?php
    $server="localhost";
    $user="root";
    $password="";
    $dbname="users";

    $connection = mysqli_connect($server,$user,$password,$dbname);
    if (!$connection) {
        die("Houve um erro ao conectar o Banco de Dados!");
    }
?>
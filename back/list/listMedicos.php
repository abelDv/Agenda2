<?php

    require ("http://localhost/atividades/20220803/back/conexao.php");

    $consulta = "SELECT id, NOME FROM clientes";

    $con = mysqli_query($connection, $consulta);
?>
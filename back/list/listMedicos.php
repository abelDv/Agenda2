<?php

    require "../../back/conexao.php";

    $consulta = "SELECT id, NOME FROM medicos";

    $conMedicos = mysqli_query($connection, $consulta);
?>
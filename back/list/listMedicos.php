<?php

    require "../../back/conexao.php";

    $consulta = "SELECT * FROM medicos ORDER BY NOME";

    $conMedicos = mysqli_query($connection, $consulta);
?>
<?php

    require "../../back/conexao.php";

    $consulta = "SELECT * FROM medicos";

    $conMedicos = mysqli_query($connection, $consulta);
?>
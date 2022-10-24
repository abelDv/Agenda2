<?php

    require "../../back/conexao.php";

    $consulta = "SELECT * FROM clientes ORDER BY NOME";

    $conClientes = mysqli_query($connection, $consulta);

?>
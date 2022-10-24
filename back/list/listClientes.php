<?php

    require "../../back/conexao.php";

    $consulta = "SELECT id, NOME FROM clientes";

    $conClientes = mysqli_query($connection, $consulta);

?>
<?php

    require "../../back/conexao.php";

    $consulta = "SELECT * FROM client ORDER BY nome, email";

    $conUsuarios = mysqli_query($connection, $consulta);

?>
<?php

    require "../../back/conexao.php";

    $consulta = "SELECT A.id, A.CLIENTE, A.MEDICO, DATE_FORMAT(A.DATA_AGENDA, '%d/%m/%Y') as 'DATA', A.HORARIO, B.NOME AS NCliente, C.NOME AS NMedico 
    FROM agendamentos A, clientes B, medicos C
    WHERE
        A.CLIENTE = B.id AND
        A.MEDICO = C.id 
        ORDER BY A.DATA_AGENDA, A.HORARIO;";

    $conAgenda = mysqli_query($connection, $consulta);
?>
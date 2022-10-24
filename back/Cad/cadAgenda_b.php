<?php
    //session_start();
    require("../conexao.php");
    require ('../log/verificaLogin.php');

    $medico=$_POST['Medico'];
    $cliente=$_POST['Cliente'];
    $data=$_POST['data'];
    $hora=$_POST['hora'];

    $sql_insert = "INSERT INTO agendamentos (CLIENTE, MEDICO, DATA_AGENDA, HORARIO) 
    VALUES ('$cliente','$medico','$data','$hora')";

    if(mysqli_query($connection, $sql_insert)){
        echo "<script>
                alert('Agendamento cadastrado com sucesso!');
                window.location.replace('http://localhost/atividades/20220803/front/Cad/cadAgenda_f.php');
            </script>";
        exit;
    }
    else{
        echo "<script>
            alert('Erro ao tentar cadastrar agendamento!');
            window.history.back();
        </script>";
        exit;
    }
    mysqli_close($connection);
?>

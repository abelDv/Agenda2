<?php
    session_start();
    require("../conexao.php");
    require ('../log/verificaLogin.php');

    $name=$_POST['name'];
    $especialidade=$_POST['especialidade'];
    $nrCRM=$_POST['nrCRM'];
    $ufCRM=$_POST['ufCRM'];

    $sql_insert = "INSERT INTO medicos (NOME, ESPECIALIDADE, NR_CRM, UF_CRM) 
    VALUES ('$name','$especialidade','$nrCRM','$ufCRM')";

    if(mysqli_query($connection, $sql_insert)){
        echo "<script>
                alert('Usuário Cadastrado com sucesso!');
                window.location.replace('http://localhost/atividades/20220803/front/Cad/cadUser.php');
            </script>";
        exit;
    }
    else{
        echo "<script>
            alert('Erro ao tentar cadastrar médico!');
            window.history.back();
        </script>";
        exit;
    }
    mysqli_close($connection);
?>
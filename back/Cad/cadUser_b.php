<?php
    //session_start();
    require("../conexao.php");
    require ('../log/verificaLogin.php');

    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=md5($_POST['pass']);
    $cargo=$_POST['cargo'];
    $cpf=$_POST['CPF'];

    $sql_insert = "INSERT INTO client (nome, email, pass, CARGO, CPF) 
    VALUES ('$name','$email','$pass','$cargo','$cpf')";

    if(mysqli_query($connection, $sql_insert)){
        echo "<script>
                alert('Usuário Cadastrado com sucesso!');
                window.location.replace('http://localhost/atividades/20220803/front/Cad/cadUser_f.php');
            </script>";
        exit;
    }
    else{
        echo "<script>
            alert('Erro ao tentar cadastrar usuário!');
            window.history.back();
        </script>";
        exit;
    }
    mysqli_close($connection);
?>
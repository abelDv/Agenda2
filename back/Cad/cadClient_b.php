<?php
    session_start();
    require("../conexao.php");
    require ('../log/verificaLogin.php');

    $name=$_POST['name'];
    $cep=$_POST['CEP'];
    $celular=$_POST['celular'];
    $endereco=$_POST['endereco'];
    $cpf=$_POST['CPF'];
    $num=$_POST['NUM'];
    $email=$_POST['email'];
    
    $sql_insert = "INSERT INTO client (NOME, CPF, CELULAR, CEP, ENDEREÇO, NUMERO, email) 
    VALUES ('$name','$cpf','$celular','$cep','$endereco','$num','$email')";

    if(mysqli_query($connection, $sql_insert)){
        echo "<script>
                alert('Cliente Cadastrado com sucesso!');
                window.location.replace('http://localhost/atividades/20220803/front/Cad/cadClient_f.php');
            </script>";
        exit;
    }
    else{
        echo "<script>
            alert('Erro ao tentar cadastrar cliente!');
            window.history.back();
        </script>";
        exit;
    }
    mysqli_close($connection);
?>
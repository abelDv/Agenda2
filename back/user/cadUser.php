<?php
session_start();
include("../cadastro.php");
?>


<?php 
    include("../conexao.php");

    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=md5($_POST['pass']);

    $sql_insert = "INSERT INTO client (nome, email, pass) 
    VALUES ('$name','$email','$pass')";

    if(mysqli_query($connection, $sql_insert)){
        //echo "<div class='form-group' style='font-size: 20px;'> Obrigado por se cadastrar no nosso site!</div>";
    
    }
    else{
        //echo "Erro interno ao cadastrar!";
    }
    mysqli_close($connection);

?>
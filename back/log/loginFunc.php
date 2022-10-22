
<?php

session_start();

//$raiz = $_SERVER['DOCUMENT_ROOT'] . "/atividades/20220803";
//require $raiz . '/php/conexao.php';

//require($raiz . "/php/conexao.php");

require ('../conexao.php');

$email = mysqli_real_escape_string($connection, $_POST['email']);
$senha = md5(mysqli_real_escape_string($connection, $_POST['pass']));

$query = "SELECT email, pass FROM client WHERE (email = '$email') AND (pass = '$senha')";


$result = mysqli_query($connection, $query);

$row = mysqli_num_rows($result);

if ($row >= 1) {
    $_SESSION['email'] = $email;
    $_SESSION['not_authentic'] = false;
    session_name("sacID");
    header('Location: ../../front/main/main.php');
    exit(); 
} else{
    $_SESSION['not_authentic'] = true;
    header("Location: ../../index.php");
}

?>
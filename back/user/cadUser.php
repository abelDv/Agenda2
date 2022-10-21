<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-group{
            margin-bottom: 15px;
            padding: 1.5em;
            font-weight: bold;
        }
        main{
            text-align: center;
        }
    </style>
    <title>Cadastro concluído com sucesso!</title>
</head>
<body>
    <main>
        <div style="padding: 1.5rem;">
            <img class="mb-4" src="../../images/professional.jpg" alt="" width="320" height="290">
        </div>
<?php 
    include("../conexao.php");

    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=md5($_POST['pass']);

    $sql_insert = "INSERT INTO client (nome, email, pass) 
    VALUES ('$name','$email','$pass')";

    if(mysqli_query($connection, $sql_insert)){
        echo "<div class='form-group' style='font-size: 20px;'> Obrigado por se cadastrar no nosso site!</div>";
    }
    else{
        echo "Erro interno ao cadastrar!";
    }
    mysqli_close($connection);

?>
<div class="form-group">
    <a href="../../index.php" style='font-size: 20px;'>Voltar para a página de login</a>
</div>

</main>
    
    <script>
        const form  = document.getElementById('formClient');

        form.addEventListener('submit', (event) => {
            event.preventDefault();
            if((document.getElementById("pass").value == document.getElementById("repeatPass").value) && (document.getElementById("pass").value !== "" || document.getElementById("repeatPass").value !== "" )){
                document.getElementById("formClient").submit();
            } else{
                alert("A senha repetida não é a mesma ou está em branco!")
            }
        });

      </script>
</body>
</html>
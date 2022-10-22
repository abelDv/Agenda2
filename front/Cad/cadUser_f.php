<?php
//session_start();
require "../../back/log/verificaLogin.php";
//require "../../back/conexao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body{background-color:cornflowerblue;}
        .form-group{margin-bottom: 15px;}
        label{font-weight: bold;}
    </style>
    <title>Faça seu cadastro</title>
</head>
<body>
    <main style="padding: 1.5rem 1.5rem 0 1.5rem;display:flex">
        <img class="mb-4" src="../../images/professional.jpg" alt="" width="320" height="290">
        <form style="padding: 1.5rem;" action="../back/user/cadUser.php" method="post" id="formClient">
            <h1>Cadastro de Usuários </h1>
            <h3> SAC (Sistema de Agendamento de Consultas)</h3>
            <div class="form-group">
                <label for="inputName">Nome</label>
                <input type="text" class="form-control" id="name" placeholder="Entre com o seu nome Completo" name="name" required>
            </div>

            <div class="form-group">
                <label for="inputName">Cargo</label>
                <input type="text" class="form-control" id="cargo" placeholder="Entre com o nome do cargo" name="cargo" required>
            </div>

            <div class="form-group">
                <label for="inputEmail">E-mail</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Entre com seu e-mail" name="email" required>
            </div>

            <div class="form-group">
                <label for="inputCPF">CPF</label>
                <input type="text" class="form-control" id="CPF" aria-describedby="CPF" placeholder="Entre com número do seu CPF" name="CPF" maxlength="11" size="11" pattern="^[0-9]{3}.?[0-9]{3}.?[0-9]{3}-?[0-9]{2}" required autocomplete="off">
            </div>

            <div class="form-group">
                <label for="inputpass">Senha</label>
                <input type="password" class="form-control" id="pass" placeholder="Entre com sua senha" name="pass" required>
            </div>

            <div class="form-group">
              <label for="passRepeat">Repita sua senha</label>
              <input type="password" class="form-control" id="repeatPass" placeholder="Repita sua senha aqui" required>
            </div>

            <div class="form-group">
                <button class="btn btn-primary" type="submit" style="background-color:pink;color:black">Enviar</button>
                <a href="../front/main/main.php" style="font-size: 20px;margin-left:20px;color:white;font-weight:bold">Voltar ao menu</a>
            </div>

          </form>
    </main>
    <script>
            var password = document.getElementById("pass")
            , confirm_password = document.getElementById("repeatPass");

            function validatePassword(){
            if(password.value != confirm_password.value) {
                confirm_password.setCustomValidity("As senhas digitadas não estão iguais!");
            } else {
                confirm_password.setCustomValidity('');
            }
            }

            password.onchange = validatePassword;
            confirm_password.onkeyup = validatePassword;

      </script>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
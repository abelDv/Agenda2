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
    <title>Cadastro de Médicos</title>
</head>
<body>
    <main style="padding: 1.5rem 1.5rem 0 1.5rem;display:flex">
        <img class="mb-4" src="../../images/professional.jpg" alt="" width="320" height="290">
        <form style="padding: 1.5rem;" action="../../back/Cad/cadMed_b.php" method="post" id="formClient">
            <h1>Cadastro de Médicos </h1>
            <h3> SAC (Sistema de Agendamento de Consultas)</h3>
            <div class="form-group">
                <label for="inputName">Nome do Médico</label>
                <input type="text" class="form-control" id="name" placeholder="Entre com o nome completo do Médico" name="name" required>
            </div>

            <div class="form-group">
                <label for="inputEspecialidade">Especialidade</label>
                <input type="text" class="form-control" id="especialidade" placeholder="Entre com a especialidade" name="especialidade" required>
            </div>

            <div class="form-group">
                <label for="inputNrCRM">Número do CRM</label>
                <input type="text" class="form-control" id="nrCRM" placeholder="Entre com o número do CRM" name="nrCRM" required>
            </div>

            <div class="form-group">
                <label for="inputUfCRM">Estado do CRM</label>
                <select id="ufCRM" class="form-control" placeholder="Entre com o código do estado" name="ufCRM" required>>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                </select>
            </div>

            <div class="form-group">
                <button class="btn btn-primary" type="submit" style="background-color:pink;color:black">Enviar</button>
                <a href="../main/main.php" style="font-size: 20px;margin-left:20px;color:white;font-weight:bold">Voltar ao menu</a>
            </div>

          </form>
    </main>
 
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
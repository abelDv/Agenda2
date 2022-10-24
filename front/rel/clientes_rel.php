<?php
    require "../../back/list/listClientes.php";
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
    <title>Relação de Clientes</title>
</head>
<body>
    <main style="padding: 1.5rem 1.5rem 0 1.5rem">
    <img class="mb-4" src="../../images/professional.jpg" alt="" width="120" height="100">

    <div class="form-group">
        <h2>Relatório de Clientes</h2>
        <h4> SAC (Sistema de Agendamento de Consultas)</h4>
    </div>

    <div class="form-group">
        <table class="table table-bordered">
            <thead>
                <tr> 
                    <th scope="col">Código</th>
                    <th scope="col">NOME</th>
                    <th scope="col">CPF</th>
                    <th scope="col">TEL CELULAR</th>
                    <th scope="col">ENDEREÇO</th>
                    <th scope="col">Nº</th>
                    <th scope="col">CEP</th>
                    <th scope="col">E-MAIL</th>
                </tr>
            <thead>
                <?php while($dadoCli = $conClientes->fetch_array()) { ?>
                <tr>
                    <tH scope="row"><?php echo $dadoCli['id']; ?></th>
                    <td><?php echo $dadoCli['NOME']; ?></td>
                    <td><?php echo $dadoCli['CPF']; ?></td>
                    <td><?php echo $dadoCli['CELULAR']; ?></td>
                    <td><?php echo $dadoCli['ENDEREÇO']; ?></td>
                    <td><?php echo $dadoCli['NUMERO']; ?></td>
                    <td><?php echo $dadoCli['CEP']; ?></td>
                    <td><?php echo $dadoCli['email']; ?></td>
                </tr>
                <?php } ?>
            </table>
        </div>

        <div class="form-group">
            <a href="../main/main.php" style="font-size: 20px;margin-left:20px;color:white;font-weight:bold">Voltar ao menu</a>
        </div>

    </main>

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>





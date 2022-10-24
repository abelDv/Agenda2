<?php
    require "../../back/list/listMedicos.php";
    require "../../back/list/listClientes.php";
    require "../../back/log/verificaLogin.php";
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
    <title>Cadastro de Agendamentos</title>
</head>
<body>
    <main style="padding: 1.5rem 1.5rem 0 1.5rem;display:flex">
        <img class="mb-4" src="../../images/professional.jpg" alt="" width="320" height="290">
        <form style="padding: 1.5rem;" action="../../back/Cad/cadAgenda_b.php" method="post" id="formClient">
            <h1>Cadastro de Agendamentos</h1>
            <h3> SAC (Sistema de Agendamento de Consultas)</h3>

            <div class="form-group">
                <label for="inputMedico">Médico</label>
                <select class="form-control" id="Medico" name="Medico" required>
                    <?php while($dadoMed = $conMedicos->fetch_array()) { ?>
                        <option value="<?php echo $dadoMed['id'];?>"><?php echo $dadoMed['NOME'];?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <label for="inputCliente">Cliente</label>
                <select class="form-control" id="Cliente" name="Cliente" required>
                    <?php while($dadoCli = $conClientes->fetch_array()) { ?>
                        <option value="<?php echo $dadoCli['id'];?>"><?php echo $dadoCli['NOME'];?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <div class="row g-3" > 
                    <div class="col-md-6">
                        <label for="inputData">Data de Agendamento</label>
                        <input type="date" class="form-control" id="data" name="data" required>
                    </div>
                    <div class="col-md-6">
                        <label for="inputHora">Hora do agendamento</label>
                        <input type="time" class="form-control" id="hora" name="hora" required>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <button class="btn btn-primary" type="submit" style="background-color:pink;color:black">Enviar</button>
                <a href="../main/main.php" style="font-size: 20px;margin-left:20px;color:white;font-weight:bold">Voltar ao menu</a>
            </div>

          </form>
    </main>
    <script>
            

    </script>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>





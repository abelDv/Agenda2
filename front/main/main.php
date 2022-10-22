<?php

/*if (isset($_SESSION['not_authentic']) == false) {
  header("Location: ../../index.php");
}*/

session_start();

//require "../../back/conexao.php";
?>

<!DOCTYPE html>
<html style="">
<head>
    <title>Menu</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <style>
    body {
        background-color:cornflowerblue;
        }
    .container {
        margin: 50px auto;
        border-radius: 4px;
        color:white;
        }
    #menu{font-size:1.5em;font-weight:bold;}
    a {text-decoration:none;}
    li {list-style-type: none;}
    ul > a {font-size:1.2em;}
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 style="font-weight: bold;; text-align:center;">SAC - Sistema de Agendamento de Consultas</h2>
  <p>Escolha abaixo uma das opções para utilizar o sistema.</p>
  <p>Caso tenha terminado de utilizar o sistema, clique no botão "SAIR".</p>
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a id="menu" data-toggle="collapse" data-parent="#accordion" href="#collapse1">Usuários</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">
            <li>
                <ul><a href="../Cad/cadUser_f.php">Cadastrar Usuário</a></ul>
                <ul><a href="#">Relação de Usuários - Ordem Alfabética</a></ul>
            </li>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a id="menu" data-toggle="collapse" data-parent="#accordion" href="#collapse2">Médicos</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">
        <li>
            <ul><a href="../Cad/cadMed_f.php">Cadastrar Médico</a></ul>
            <ul><a href="#">Relação de Médicos - Ordem Alfabética</a></ul>
        </li>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a id="menu" data-toggle="collapse" data-parent="#accordion" href="#collapse3">Clientes</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">
        <li>
            <ul><a href="../Cad/cadClient_f.php">Cadastrar Cliente</a></ul>
            <ul><a href="#">Relação de Clientes - Ordem Alfabética</a></ul>
        </li>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a id="menu" data-toggle="collapse" data-parent="#accordion" href="#collapse4">Agendamentos</a>
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse">
        <div class="panel-body">
        <li>
            <ul><a href="#">Agendar Consulta</a></ul>
            <ul><a href="#">Relação de Consultas - Ordem crescente de data</a></ul>
        </li>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading" style="background-color:pink;">
        <h4 class="panel-title">
          <a id="menu" href="../../back/log/logout.php">Sair</a>
        </h4>
      </div>
    </div>
  </div> 
</div>
    
</body>
</html>
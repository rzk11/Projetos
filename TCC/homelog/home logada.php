<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="csshomelogada.css" />
    <link rel="icon" href="icon.jpeg">
  </head>
  <body>
    <?php
    if(isset($_SESSION['msg'])){
      echo $_SESSION['msg'];
      unset ($_SESSION['msg']);
    }
  ?>  
    <div class="hero">
      <nav>
        <a href="/TCC/homelog/home logada.php"><img src="/TCC/imagens/Study2.png" class="logo" /></a>
        <ul>
        <li><a href="/TCC/homelog/home logada.php">Home</a></li>
          <li><a href="/TCC/grade/grade horaria.php">Grade Horária</a></li>
          <li><a href="/TCC/agenda/agenda.php">Agenda</a></li>
          <li><a href="/TCC/anotacoes/anotações.php">Minhas Anotações</a></li>
          <li><a href="/TCC/exercicios/exercícios.php">Exercícios</a></li>
          <li><a href="/TCC/todolist/to do list.php">To Do List</a></li>
        </ul>
        <a href="/TCC/perfil/perfil.php" class="btn">Meu Perfil</a>
      </nav>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,288L48,266.7C96,245,192,203,288,192C384,181,480,203,576,197.3C672,192,768,160,864,170.7C960,181,1056,235,1152,224C1248,213,1344,139,1392,101.3L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
<img src="/TCC/imagens/home.png" class="foto">
      <div class="content">
        <span class="title">Plataforma de Estudos</span>
        <h1>Bem-vindo! Somos a <span>Study Notes</span></h1>
        <p>
          Somos um sistema web de gerenciamento de estudos e cumprimento de prazos.
        </p>
      </div>
    </div>
    
  </body>
</html>
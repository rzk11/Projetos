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
    <link rel="stylesheet" href="csshomeadm.css" />
    <link rel="icon" href="icon.jpeg">
  </head>
  <body>
  
    <div class="hero">
      <nav>
        <a href="logout.php"><img src="Study2.png" class="logo" /></a>
        <ul>
          <li><a href="home adm.php">Home</a></li>
          <li><a href="index.php">Gerenciamento de Usuários</a></li>
          <li><a href="pesquisa.php">Pesquisa</a></li>
        </ul>
      </nav>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,288L48,266.7C96,245,192,203,288,192C384,181,480,203,576,197.3C672,192,768,160,864,170.7C960,181,1056,235,1152,224C1248,213,1344,139,1392,101.3L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
<img src="home.png" class="foto">
      <div class="content">
        <span class="title">Plataforma de Estudos</span>
        <h1>Bem-vindo, <span>Administrador!</span></h1>
        <p>
          Tela de administrador, capaz de gerenciar seus usuários cadastrados.
        </p>
        <br>
      </div>
    </div>
    
  </body>
</html>
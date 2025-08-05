<?php

include('bradok.php');

if(!isset($_SESSION))
    session_start();
 
if(!isset($_SESSION['id']))
    die("Voce nao esta logado");

$id = $_SESSION['id'];
$sql_query = $conn->query("SELECT * FROM usuarios WHERE id = '$id' ") or die($conn->error);
$usuario = $sql_query->fetch_assoc();   
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
    <link rel="stylesheet" href="cssperfil.css">
    <link rel="icon" href="icon.jpeg">

</head>

<body>
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
        <a href="/TCC/logout.php" class="btn">Sair da Conta</a>
    </nav>
    <form method="POST" action="" id="login-form" class="login-form" autocomplete="off" role="main">
        <h1 class="a11y-hidden">Login Form</h1>
        <center>
        <h1>Meu Perfil</h1>
        </center>
        <br>
        <div>
            <label>
               Nome:<?php echo $usuario['nome'];  ?>
            </label>
        </div>
        <div>
            <label>
                Email: <?php echo $usuario['email'];  ?>
            </label>
        </div>
     


        <input type="submit" value=""/>

        <figure aria-hidden="true">
            <div class="person-body"></div>
            <div class="neck skin"></div>
            <div class="head skin">
                <div class="eyes"></div>
                <div class="mouth"></div>
            </div>
            <div class="hair"></div>
            <div class="ears"></div>
            <div class="shirt-1"></div>
            <div class="shirt-2"></div>
        </figure>
    </form>

      
</body>
</html>
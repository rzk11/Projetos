<?php

//echo "alterar concluir";
include_once('protect.php') ;
 include_once('..\conexao\conexao.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="cssteste">

  <title>Document</title>
</head>
<body>
<div class="hero">
<nav>

      <a href="/TCC/home/home.php"><img src="/TCC/imagens/Study2.png" class="logo" /></a>
        <ul>
        <li><a href="/TCC/homelog/home logada.php">Home</a></li>
          <li><a href="/TCC/grade/grade horaria.php">Grade Horária</a></li>
          <li><a href="/TCC/agenda/agenda.php">Agenda</a></li>
          <li><a href="/TCC/anotacoes/anotações.php">Minhas Anotações</a></li>
          <li><a href="/TCC/exercicios/exercícios.php">Exercícios</a></li>
          <li><a href="/TCC/todolist/to do list.php">To Do List</a></li>
        </ul>
        <a href="/tcc/perfil/perfil.html" class="btn">Meu Perfil</a>
      </nav>
  <h2>Editar Tarefa<h2>


<?php
 $mysql = new BancodeDados();
 $mysql -> conecta();
 $idconc=$_GET["idtarefa"];
// echo  $idconc;
 $tipo= $_GET["tipo"];
 //echo "$tipo";

 
 if ($tipo =="concluido"){

$sqlstring = "update todolist set concluida='1'  where  tdl_id='$idconc'";
$resultado = @mysqli_query($mysql->con, $sqlstring);      
header("Location: to do list.php");
//echo $sqlstring;
 }
 elseif ($tipo =="editar"){
    echo" <form method='post' action='' >";
    echo "<input name='editando' type='text'>";
    echo "<input type='submit' name='botaosalvar' value='Editar'>";
    if (isset($_POST['botaosalvar'])){
                $alterardados= $_POST['editando'];
               

    $sqlstring = "update todolist set tarefa='$alterardados'  where  tdl_id='$idconc'";
    $resultado = @mysqli_query($mysql->con, $sqlstring);   
    header("Location: to do list.php");
  echo"  </form>";
//echo $sqlstring;
}} else if ($tipo =="excluir"){

    $sqlstring = "delete from  todolist  where  tdl_id='$idconc'";
    $resultado = @mysqli_query($mysql->con, $sqlstring);      
    header("Location: to do list.php");
    //echo $sqlstring;
     }




?>
<?php

include('bradok.php');

if(!isset($_SESSION))
    session_start();
 
if(!isset($_SESSION['id']))
    die("Voce nao esta logado");

$id = $_SESSION['id'];
$sql_query = $conn->query("SELECT tdl_id, tarefa, concluida FROM todolist where concluida='0' and id= '$id' ") or die($conn->error);
$usuario = $sql_query->fetch_assoc();   
?>
<center>
 Tarefa: <br><?php echo $usuario['tarefa'];?>
    </center>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#265c8c" fill-opacity="1" d="M0,32L14.1,26.7C28.2,21,56,11,85,42.7C112.9,75,141,149,169,197.3C197.6,245,226,267,254,234.7C282.4,203,311,117,339,122.7C367.1,128,395,224,424,224C451.8,224,480,128,508,101.3C536.5,75,565,117,593,122.7C621.2,128,649,96,678,112C705.9,128,734,192,762,213.3C790.6,235,819,213,847,197.3C875.3,181,904,171,932,170.7C960,171,988,181,1016,197.3C1044.7,213,1073,235,1101,256C1129.4,277,1158,299,1186,266.7C1214.1,235,1242,149,1271,133.3C1298.8,117,1327,171,1355,176C1383.5,181,1412,139,1426,117.3L1440,96L1440,320L1425.9,320C1411.8,320,1384,320,1355,320C1327.1,320,1299,320,1271,320C1242.4,320,1214,320,1186,320C1157.6,320,1129,320,1101,320C1072.9,320,1045,320,1016,320C988.2,320,960,320,932,320C903.5,320,875,320,847,320C818.8,320,791,320,762,320C734.1,320,706,320,678,320C649.4,320,621,320,593,320C564.7,320,536,320,508,320C480,320,452,320,424,320C395.3,320,367,320,339,320C310.6,320,282,320,254,320C225.9,320,198,320,169,320C141.2,320,113,320,85,320C56.5,320,28,320,14,320L0,320Z"></path></svg>
</body>
</html>
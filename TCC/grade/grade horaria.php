<?php
 session_start();
include_once("bradok.php");
include_once('protect.php');
if (isset($_POST["deletar"])) 
include_once "deletar.php"; // onde conecta


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário</title>
  <link rel="stylesheet" href="css grade horaria.css">
  <style>
        #fPessoas {
            width: 480px;
            margin-left: 3220%;
            margin-top: 3%;
        }

        tr:hover {
            cursor: pointer;
        }
    </style>
</head>

<?php
$horario = filter_input (INPUT_POST, 'horario', FILTER_SANITIZE_STRING);
$domingo = filter_input (INPUT_POST, 'domingo', FILTER_SANITIZE_STRING);
$segunda = filter_input (INPUT_POST, 'segunda', FILTER_SANITIZE_STRING);
$terca = filter_input (INPUT_POST, 'terca', FILTER_SANITIZE_STRING);
$quarta = filter_input (INPUT_POST, 'quarta', FILTER_SANITIZE_STRING);
$quinta = filter_input (INPUT_POST, 'quinta', FILTER_SANITIZE_STRING);
$sexta = filter_input (INPUT_POST, 'sexta', FILTER_SANITIZE_STRING);
$sabado = filter_input (INPUT_POST, 'sabado', FILTER_SANITIZE_STRING);
?>
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
          <a href="/TCC/perfil/perfil.html" class="btn">Meu Perfil</a>
        </nav>
  
        <div class="content">
          <span class="title">Grade Horária</span>
          
      </div>

      <div id="dGridPessoas">
<?php
//session_start();
$usua=$_SESSION['id'] ;
$misql="SELECT * from agenda where id_usuario = '$usua' ";
$resultado = mysqli_query($conn, $misql);
?>

<table id="tbPessoas" class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Horário</th>
            <th scope="col">Domingo</th>
            <th scope="col">Segunda</th>
            <th scope="col">Terça</th>
            <th scope="col">Quarta</th>
            <th scope="col">Quinta</th>
            <th scope="col">Sexta</th>
            <th scope="col">Sábado</th>
            <th scope="col"></th>
            


        </tr>
        
        <?php 
        echo "<tr>";
       while ($dados = mysqli_fetch_array( $resultado )) {

        
      
        echo "<td>  $dados[horario]</td>";
        echo "<td>  $dados[domingo]</td>";
         echo "<td> $dados[segunda]</td>";
         echo "<td> $dados[terca]</td>";
         echo "<td> $dados[quarta]</td>";
         echo "<td> $dados[quinta]</td>";
         echo "<td> $dados[sexta]</td>";
         echo "<td> $dados[sabado]</td>";
         $idage=$dados['id_agenda'];
         echo "<td> <a href='deletar.php?id=$idage'>Excluir</a></td>";

         echo "</tr><tr>";

       }
       echo"</tr>";


?>
    </thead>
</table>
</div>
  <form method="POST" method="GET">

  <div class="form-group">
                <label for="txtNome">Horário</label>
                <input type="time" class="form-control" name="horario" id="txtNome">
            </div>
<div class="form-group">
  <label for="txtNome">Domingo</label>
<input type="text" class="form-control" name="domingo" id="domingo">
</div>   
<div class="form-group">
  <label for="txtNome">Segunda-Feira</label>
    <input type="text" class="form-control" name="segunda" id="segunda">
</div>
<div class="form-group">
  <label for="txtNome">Terça-Feira</label>
    <input type="text" class="form-control" name="terca" id="terca">
</div>
<div class="form-group">
  <label for="txtNome">Quarta-Feira</label>
    <input type="text" class="form-control" name="quarta" id="quarta">
</div>
<div class="form-group">
  <label for="txtNome">Quinta-Feira</label>
    <input type="text" class="form-control" name="quinta" id="quinta">
</div>
<div class="form-group">
  <label for="txtNome">Sexta-Feira</label>
    <input type="text" class="form-control" name="sexta" id="sexta">
</div>
<div class="form-group">
  <label for="txtNome">Sábado</label>
    <input type="text" class="form-control" name="sabado" id="sabado">
</div>
<br>
    <input type="submit" name="cadastrar" class="botao" value="Enviar" ></input>

</form>
<?php

 if (isset($_POST["cadastrar"])){
  include_once("gradehorariabd.php");
  header("Refresh: 0");
 }

?>
</body>

</html>
<?php  

include_once('protect.php') ;
 include_once('..\conexao\conexao.php');

 $mysql = new BancodeDados();
 $mysql -> conecta();

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To do List</title>
    <link rel="stylesheet" href="css to do list.css">
    <link rel="icon" href="icon.jpeg">
    <style>
            
            body {
                display: flex;
                flex-direction: column; 
            }

            form {
                padding: 10px;
                border: 2px solid grey;
                border-radius: 20px;
                width: 300px;
            }

            div.lista{
              margin-top: 10px;
              padding: 10px;
              border: 2px solid grey;
              border-radius: 15px;
              width: 500px;
            }

            div.lista li{
              padding: 10px;
              font-size: 22px;
            }
            
            div.lista li.concluida{
              color: green;
            }

            div.lista a {
              font-size: 12px;
            }
    
    </style>    
</head>
<body>
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
          <a href="/TCC/perfil/perfil.php" class="btn">Meu perfil</a>
        </nav>
  
        <div class="content">
          <span class="title">To Do List</span>     
        </div>
        
            <center>
            <form method="post" action="salvandotarefa.php">        
                Nova tarefa:
                <input type="text" name="tarefa"/>
                <input type="submit" class="add" value="Adicionar"/>
            </form> 
         
        <div class="lista">
            <ul>
              <?php 

              $usua=$_SESSION['id'] ;

              $sqlstring = "SELECT tdl_id, tarefa, concluida FROM todolist where concluida='0' and id='$usua'";
              
              $resultado = @mysqli_query($mysql->con, $sqlstring);       
                    
              
               
              echo "<table>";
              echo "<th> Pendente </th>";
              echo "<tr>";
              while ($dados = mysqli_fetch_array( $resultado )) {
              
              
              
              echo "<td>  $dados[tarefa]</td>";
              echo "<td> <a href='concluido.php?idtarefa=$dados[tdl_id]&tipo=concluido'> Concluido </a></td>";
              echo "<td> <a href='concluido.php?idtarefa=$dados[tdl_id]&tipo=editar'> Editar </a></td>";
              echo "<td> <a href='concluido.php?idtarefa=$dados[tdl_id]&tipo=excluir'> Deletar </a></td>";
               echo "</tr><tr>";
              
              }
              echo"</tr>";
              echo"</table>";

              /// ja concluido 
$sqlstring = "SELECT tdl_id, tarefa, concluida FROM todolist where concluida='1' and id='$usua' ";
$resultado = @mysqli_query($mysql->con, $sqlstring);

echo "<br><br>";
echo "<table>";
echo "<th> Concluido </th>";
echo "<tr>";
while ($dados = mysqli_fetch_array( $resultado )) {


echo "<td>  $dados[tarefa]</td>";
echo "<td> <a href='concluido.php?idtarefa=$dados[tdl_id]&tipo=excluir'> Deletar </a></td>";



 echo "</tr><tr>";

}
echo"</tr>";
echo"</table>";

               ?>
               
             
          </ul>
        </div>
             </center>
  
</body>
</html>

<?php
echo "teste dee pagina";
include_once('protect.php') ;
 include_once('..\conexao\conexao.php');

 $mysql = new BancodeDados();
 $mysql -> conecta();
 //session_start();
$usua=$_SESSION['id'] ;

$sqlstring = "SELECT tdl_id, tarefa, concluida FROM todolist where concluida='0' and id='$usua'";

$resultado = @mysqli_query($mysql->con, $sqlstring);       
      

 
echo "<table>";
echo "<th> a sera feitos </th>";
echo "<tr>";
while ($dados = mysqli_fetch_array( $resultado )) {



echo "<td>  $dados[tarefa]</td>";
echo "<td> <a href='concluido.php?idtarefa=$dados[tdl_id]'> concluido </a></td>";
 echo "</tr><tr>";

}
echo"</tr>";
echo"</table>";

/// ja concluido 
$sqlstring = "SELECT tdl_id, tarefa, concluida FROM todolist where concluida='1' and id='$usua' ";
$resultado = @mysqli_query($mysql->con, $sqlstring);

echo "<br><br>";
echo "<table>";
echo "<th> concluido </th>";
echo "<tr>";
while ($dados = mysqli_fetch_array( $resultado )) {


echo "<td>  $dados[tarefa]</td>";



 echo "</tr><tr>";

}
echo"</tr>";
echo"</table>";
?>

<li <?= $item['concluida']?'class="concluida"':''?>>
                      <?=$item['tarefa']?>
                      <?php if (!$item['concluida']): ?>
                          <a href="?concluir=<?=$item['tdl_id']?>">[Concluir]</a>
                      <?php else: ?>
                          <a href="?reabrir=<?=$item['tdl_id']?>">[Reabrir]</a>
                      <?php endif; ?>
                      <a href="?excluir=<?=$item['tdl_id']?>">[Excluir]</a>    
                  </li>
              <?php endforeach; ?>
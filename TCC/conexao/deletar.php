<?php
    include_once "conexao/bradok.php";
    
    $usua=$_SESSION['id'] ;
    $query = "DELETE FROM `agenda` WHERE `agenda`. `id_usuario` = $usua";
    $resultado = mysqli_query($conn, $query);
  
?>
<?php
    include_once "bradok.php";
    
    
    $usua=$_GET['id'] ;
    $query = "DELETE FROM `agenda` WHERE `agenda`. `id_agenda` = $usua";
    $resultado = mysqli_query($conn, $query);
    header( "Location: grade horaria.php");
  
?>
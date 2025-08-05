<?php
 require_once('conexao.php');
	
	$mysql = new BancodeDados();
	$mysql -> conecta();
	
   $plogin=$_POST['email'];
   $psenha=$_POST['password'];
  
    $sqlstring = "select * from usuarios where email='$plogin' and senha='$psenha'"  ;
    echo $sqlstring;
	$result = @mysqli_query($mysql->con, $sqlstring);
	$total = $result -> num_rows;
  if($total==1){
        $dados=mysqli_fetch_array($result) ;
      	session_start();
      	$_SESSION['id']= $dados['id'];
 		$_SESSION['nome'] =$dados['nome'] ;

		  echo"<script language='javascript' type='text/javascript'>
          alert('você esta logado');window.location.href='/TCC/homelog/home logada.php';
          </script>";

     }
      else {
      	  echo"<script language='javascript' type='text/javascript'>
            alert('senha ou login invalido');window.location.href
            ='/TCC/login/login.html';</script>";
      }
      $mysql->fechar();
 ?>
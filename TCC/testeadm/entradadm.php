<?php
 require_once('../conexao/conexao.php');
	
	$mysql = new BancodeDados();
	$mysql -> conecta();
	
   $plogin=$_POST['email'];
   $psenha=$_POST['password'];
  
    $sqlstring = "select * from usuarioadm where email='$plogin' and senha='$psenha'";

	$result = @mysqli_query($mysql->con, $sqlstring);
	$total = $result -> num_rows;
  if($total==1){
        $dados=mysqli_fetch_array($result) ;
      	session_start();
      	$_SESSION['idadm']= $dados['idadm'];

		  echo"<script language='javascript' type='text/javascript'>
          alert('você esta logado');window.location.href='/TCC/testeadm/home adm.php';
          </script>";

     }
    /*  else {
      	  echo"<script language='javascript' type='text/javascript'>
            alert('senha ou login invalido');window.location.href
            ='/TCC/cadastro/cadastro.html';</script>";
      }*/
      $mysql->fechar();
 ?>
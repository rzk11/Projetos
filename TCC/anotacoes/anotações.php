<?php  
session_start();
        include_once("protect.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">  
    <title>Anotações</title>
    <link rel="stylesheet" href="css anotações.css">
    <link rel="icon" href="icon.jpeg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Iconscout Link For Icons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
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
        <a href="/tcc/perfil/perfil.html" class="btn">Meu Perfil</a>
      </nav>

      <div class="content">
        <span class="title">Anotações</span>
        
    </div>


    <div class="popup-box">
      <div class="popup">
        <div class="content">
          <header>
            <p></p>
            <i class="uil uil-times"></i>
          </header>
          <form action="#">
            <div class="row titulo">
              <label>Titulo</label>
              <input type="text" spellcheck="false">
            </div>
            <div class="row conteudo">
              <label>Conteúdo</label>
              <textarea spellcheck="false"></textarea>
            </div>
            <button></button>
          </form>
        </div>
      </div>
    </div>
    <div class="wrapper">
      <li class="add-box">
        <div class="icon" id="myBtn"><i class="uil uil-plus"></i></div>
        <p>Adicione sua Anotação</p>
      </li>
    </div>

  </body>
</html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 15%; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #265c8c;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 30%;
  height: 80%;

}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
</head>
<div>

    <table>
        <thead>
            <tr>
                <th>Titulo</th>
                
                <th>Conteúdo</th>
       
         
                
            </tr>     
        </thead>
        <tbody>

        </tbody>    
    </table>
  <?php
  ?>
    <script src=" anotando.js"></script>

      </li>
    </div>


<!-- The Modal -->
<div id="myModal" class="modal">


 
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <h1>Adicione Uma Anotação</h1>
    <form method="POST" action="anotandobd.php" id="cad-anotacao-from" class="login-form" autocomplete="off" role="main">
      <div>
          <label class="label-email">
            <span class="required">Título</span>
              <input type="text" class="text" name="titulo_A" placeholder="Adicione um título" tabindex="1" required />
          </label>
      </div>     
      <div>
      <div class="row conteudo">
              <label>Conteúdo</label>
              <textarea name="conteudoA" placeholder="Coloque o conteudo" spellcheck="false"></textarea>
            </div>
      </div>
      <input type="submit" value="Adicionar" id="cas-anotacao-btn"/>
  </form>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>

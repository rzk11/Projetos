<?php  

        include_once('protect.php') 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- arquivos style -->
  <link href="css agenda.css" rel="stylesheet">

  <title>Calendário</title>
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
          <a href="/TCC/perfil/perfil.php" class="btn">Meu Perfil</a>
        </nav>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path fill="#a2d9ff" fill-opacity="1" d="M0,160L48,181.3C96,203,192,245,288,224C384,203,480,117,576,117.3C672,117,768,203,864,229.3C960,256,1056,224,1152,224C1248,224,1344,256,1392,272L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>

  
        <div class="content">
          <span class="title">Agenda</span>




<img src="/TCC/imagens/calendar.png" class="fotocalendario">

  <div id="container">
      <div id="header">
        <div id="monthDisplay"></div>

        <div>
          <button id="backButton">Mês anterior</button>
          <button id="nextButton">Próximo mês</button>
        </div>
          
      </div>

      <div id="weekdays">
        <div>Domingo</div>
        <div>Segunda</div>
        <div>Terça</div>
        <div>Quarta</div>
        <div>Quinta</div>
        <div>Sexta</div>
        <div>Sábado</div>
      </div>


      <!-- div dinamic -->
      <div id="calendar" ></div>

   
  </div>
  <form method="POST" action="">
  <div id="newEventModal">
    <h2>Novo compromisso</h2>

    <input type="text" name="dia" id="eventTitleInput" placeholder="Titulo do Compromisso"/>

    <button type="submit" id="saveButton"> Salvar</button>
    <button id="cancelButton">Cancelar</button>
  </div>

  <div id="deleteEventModal">
    <h2>Compromisso</h2>

    <div id="eventText"></div><br>


    <button id="deleteButton">Excluir</button>
    <button id="closeButton">Fechar</button>
  </div>

  <div id="modalBackDrop"></div>


  <script src="/TCC/js/js agenda.js"></script>
  </form>
</body>
</html>
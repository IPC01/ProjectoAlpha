<?php
session_start();


include 'layout/header.php';?>
<div class="flex">
    <?php include 'layout/nav.php';?>

 
    <div class="cont">

    <div id="myModal" class="modal" >
  <div class="modal-content">
    <span class="close">&times;</span>
    <h2>Login</h2>
    <form id="cadastroForm" action="CONTROLLER/PHP/openMembro.php" method="POST">
      <!--<label for="nome">Nome:</label>-->
      <input type="text" id="email" name="email" placeholder="Email:" required><br>
      
      <!--<label for="email">Email:</label>-->
      <input type="password" id="senha" name="senha" placeholder="senha:" required><br><br>
      
      
      
      <button type="submit">Enviar</button>
    </form>
  </div>
  <?php if(isset($_SESSION['user'])): ?>
    <div>
        <p>
            <h1>Bem Vindo ao Alpha Connection</h1><br>
            <h2>Desfrute e conecte-se com estilo</h2>
        </p>
        <button id="openModalBtn">Abrir</button> 
    </div>
<?php else: ?>
    <div>
      dsadasdasd
        <button id="openModalBtn">Abrir</button>
    </div>
    dsadasdasd
<?php endif; ?>


</div>
<?php include "layout/footer.php"; ?>
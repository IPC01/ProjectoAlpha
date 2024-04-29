<?php 

?>

<div class="nav">
    <div style="position: absolute; top: 0px; margin:10px;">
    <?php // $_SESSION['user']=$user[0]['nome_user']; ?>
      <p ><?php echo $_SESSION['user'];?>|<a style="font-size: 15px;" href="#" onclick="logout()">logout</a></p>
    </div>
   <div>
    <a href="index.php">Home</a>
  </div> 
  <div>
   <a href="alfaiates.php">Publicacoes</a>
  </div>
   <div>
    <a href="">Clientes</a>
   </div>
   <div>
    <a href="">Chats</a>
   </div>

    

</div>
<?php 
//logout
function logout(){
    session_destroy($_SESSION['user']);
}
?>


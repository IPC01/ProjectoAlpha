<?php
include 'view/layout/header.php';
include 'view/layout/nav.php'; 
?>

<div class="container">
<div id="area_login">
    <dialog id="log" class="dial">
        <h2 class="text-center">Login</h2>
        <form action="controller/php/form.php" method="post" name="login" onsubmit="return validar()">
            <input type="email" name="text_email" id="email" placeholder="E-mail"><br>
            <input type="text" name="text_nome" id="user" placeholder="nome de usuario"><br>
            <input type="password" name="text_senha" id="senha" placeholder="senha"><br>
            <input type="submit" value="log in" id="sub"><br>
            <a href="" class="a-color" id="lin">esqueceu a senha?</a>
        </form>
    </dialog>
</div>
</div>


</div>



<?php include 'view/layout/footer.php';?>

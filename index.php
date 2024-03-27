
<?php

require 'view/layout/header.html';
require 'view/layout/nav.html';
?>

<button onclick="abrir()" >open</button>
 <dialog id="log" class="dial" >
<h2 class="text-center">Login</h2>
<form action="controller/form.php" method="post" name="login" onsubmit="return validar()">
    <input type="email" name="text_email" id="email" placeholder="E-mail" ><br>
    <input type="text" name="text_nome" id="user" placeholder="nome de usuario" ><br>
    <input type="password" name="text_senha" id="senha" placeholder="senha"  ><br>
    <input type="submit" value="log in" id="sub"><br>
    <a href="" class="a-color" id="lin">esqueceu a senha?</a>
</form>
</dialog>





<?php
require 'view/layout/footer.html';?>
<script>
        function abrir(){
            document.getElementById('log').show();
        }


        function validar(){
            
        let email=document.forms['login']['text_email'].value;
        let nome=document.forms['login']['text_nome'].value;
        let senha=document.forms['login']['text_senha'].value;
         if(email =='' || nome =='' || senha ==''){
             alert('certifique-se que todos os campos estejam devidamente preenchidos');
            return false;
        }
        }
      
    </script>

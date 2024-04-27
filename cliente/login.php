<div class="container">
    <div id="area_login">
        <dialog id="log" class="dial" >
            <h2 class="text-center">Login</h2>
            <form action="controller/php/form.php" method="post" name="login" onsubmit="return validar()">
                <input type="email" name="text_email" id="email" placeholder="E-mail"><br>
                <input type="text" name="text_nome" id="user" placeholder="Nome de usuario"><br>
                <input type="password" name="text_senha" id="senha" placeholder="Senha"><br>
                <input type="text" name="text_bi" id="bi" placeholder="BI"><br>
                <input type="number" name="text_telefone" id="telefone" placeholder="Telefone"><br>
                <input type="text" name="text_endereco" id="endereco" placeholder="Endereco"><br>
                <input type="checkbox" name="cb_mebro" id="membro">&nbsp;&nbsp;<small>tornar-se membro</small><br>
                <input type="submit" value="regista_te" id="sub"><br>
             
            </form>
            <button onclick="fechar()" id="fechar">fechar</button><br>
            <a href="" class="a-color" id="lin" class='text-center'>esqueceu a senha?</a>
        </dialog>
    </div>
</div>


</div>

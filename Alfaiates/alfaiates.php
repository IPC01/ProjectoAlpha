<?php
include 'layout/header.php';

?>

    
    
<div class="flex">
        <?php include 'layout/nav.php';?>
    <div class="container">
        <div id="publicar">
        <h1>Publicacoes</h1>
            <form action="publicar.php" method="post" enctype="multipart/form-data">

                <input type="text" name="titulo" id="titulo" placeholder="titulo"><br>

                <textarea name="descricao" id="descricao" cols="30" rows="10" placeholder="descricao"></textarea><br>
               
                <select name="categoria" id="categoria" placeholder="selecione a categoria">
                    <option value="">Jaqueta</option>
                    <option value="">saia</option>
                    <option value="">vestido</option>
                </select><br>

                 <input type="file" name="file" id="fileimg" accept="image/jpeg,image/png">
                 
                <div class="flex">
                    <input type="submit" value="enviar" id="enviar">
                    <input type="submit" value="cancelar" id="cancel">
                </div>

            </form>
        </div>

        <div class="publicacao">
            <h1 id="titulo-publicacao">titulo</h1>
            <h3 id="descricao-publicacao">descricao</h3>

            <img id="imagem-publicacao" src="assets/img/Ankara style.jpeg"  width="250" height="300px" style="border-radius: 50px;">

            <div class="flex" style="justify-content: center; margin-top: 20px;" >

              <a href="#"><img src="assets/img/dislike_9014359.png"  width="40"></a> 

               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

               <a href="#"><img src="assets/img/heart_11680212.png"  width="40"></a>
            
            </div>
        </div>
        </div>
   
 </div>








<?php include 'layout/footer.php'; ?>
<?php
include 'layout/header.php';
include 'layout/nav.php';
include 'controller/php/gestor.php';

 include 'controller/api/getPublicacoes.php';
?>
<div class="container">

 <h1 class="teste">Bem Vindo ao Alpha Connection</h1>
 <h2> desfrute e conecte-se com o estilo</h2>
    <div class="box" id="box">
       <?php foreach($resp as $r):?>
            <div class="card">
                <div id="titulo" class="cardchild">
                     <h1><?php echo $r['titulo'];?></h1>
                 </div>
                <div id="descricao" class="cardchild">
                  <h3><?php echo $r['descricao'];?></h3>
                </div>
                <div id="image" class="imagem">
                    <img src="../Alfaiates/<?php echo $r['img']?>" alt="" srcset="" width="250" id="imagem">
               </div>

               <div class="ld">
                  <a href=""><img src="assets/img/dislike_9014359.png" width="40"></a>
                  <a href=""><img src="assets/img/heart_11680212.png" width="40"></a>
                </div>
           </div>
       <?php endforeach; ?>
    </div>
    <!--<button onclick="tema('RGB(135, 206, 235)')">mudar tema</button> -->
</div>


<?php include 'layout/footer.php'; ?>
<?php
 

?>
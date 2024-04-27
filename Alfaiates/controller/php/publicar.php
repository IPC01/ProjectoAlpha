 
 
 <?php
include 'controller/php/gestor.php';
 //recordar de associar ao user a publicacao e nao permitir que um user like uma foto mais de 1 vez

 //tratar file
 $file_name=$_FILES['file']['name'];
 $file_size=$_FILES['file']['size'];

 //pegar a extencao do ficheiro
 $tmp=explode('.',$file_name);
 $file_extension=$tmp[count($tmp)-1];
 

 //verificar se a extencao esta correta
 $extensions=array('jpeg', 'jpg', 'png', 'gif');
  if(!in_array($file_extension,$extensions)){
    die('o ficheiro e invalido, verifique a extencao do mesmo');
  }


  //verificar  tamanho max 10mb
  if($file_size> 1000000){
    die( "Error tamanho");
  }

//nao repeticao de nome de ficheiro
$file=uniqid().'.'.$file_extension;
//adicionar a base de dados
$gestor=new Gestor();
  $titulo=$_POST['titulo'];
  $descricao=$_POST['descricao'];
  $url_image='uploads/images/'.$file;

  $params=array(
    ':title' => $titulo,
    ':descr'=>$descricao,
    ':img'=>$url_image
    
  );

 $gestor->EXE_NON_QUERY('INSERT INTO publicacoes (titulo,descricao,img) values(:title,:descr,:img)',  $params);

 //mover para pasta uploads
move_uploaded_file($_FILES['file']['tmp_name'],'uploads/images/'.$file);

 ?>
<?php
//verificar se os campos ja existem 
if(!isset($_POST['text_email'])||!isset($_POST['text_senha'])||!isset($_POST['text_nome'])){
   die('nao existem')  ;
} else{
  //verificar se os campos estao preenchidos
  if(empty($_POST['text_email'])||empty($_POST['text_senha'])|| empty($_POST['text_nome'])){
    die('nao esta preenchido');
  }else{
    //validar de acordo com o tipo de campo
    $nome=$_POST['text_nome'];
    $senha=$_POST['text_senha'];
    $email=$_POST['text_email'];

    //nome deve conter dentre 5 a 60 caracteres e nao deve conter numeros 
    //nome deve ser contido pelo menos pelo primeiro nome e apelido
    if(strlen($nome)<6||strlen($nome)>60 || preg_match('/[0-9]/',$nome)==true || preg_match('/ /',$nome)==false ){
         die('nome invalido');
    }
    //senha deve conter dentre 6 a 30 caracteres
    //senha deve conter pelomenos uma letra um numero e nao deve conter espacos em branco
    if(strlen($senha)<=6||strlen($senha)>30 || preg_match('/[0-9]/',$senha)==false ||
     preg_match('/[a-z,A-Z]/',$senha)==false ||preg_match('/ /',$senha)==true){
       die('Senha invalida');
    }

    //o email deve conter um dominio valido 
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "email invalido";
    }

  }
}

//criar uma expressao regular para criar um id valido
/* verifica na BD, se nao existe nenhum registo cria a 
   expressao pegando o ano as 2 inicias do nome e 001 se existir
   cria a expressao usando a data, 2 iniciais e incrementa com 002 assim suscecivamente
*/



//verificar se usuario ja existe na base de dados
//atribuir estado
//alterar estado




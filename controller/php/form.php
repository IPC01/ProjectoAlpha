
<?php
include 'C:\wamp64\www\AlphaConection\controller\php\gestor.php';
require 'C:\wamp64\www\AlphaConection\model\usuarios.php';

$nome = $_POST['text_nome'];
$senha = $_POST['text_senha'];
$email = $_POST['text_email'];

//verificar se os campos ja existem 
if (!isset($_POST['text_email']) || !isset($_POST['text_senha']) || !isset($_POST['text_nome'])) {
  die('nao existem');
} else {
  //verificar se os campos estao preenchidos
  if (empty($_POST['text_email']) || empty($_POST['text_senha']) || empty($_POST['text_nome'])) {
    die('nao esta preenchido');
  } else {
    //validar de acordo com o tipo de campo


    //nome deve conter dentre 5 a 60 caracteres e nao deve conter numeros 
    //nome deve ser contido pelo menos pelo primeiro nome e apelido
    if (strlen($nome) < 6 || strlen($nome) > 60 || preg_match('/[0-9]/', $nome) == true || preg_match('/ /', $nome) == false) {
      die('nome invalido');
    }
    //senha deve conter dentre 6 a 30 caracteres
    //senha deve conter pelomenos uma letra um numero e nao deve conter espacos em branco
    if (
      strlen($senha) <= 6 || strlen($senha) > 30 || preg_match('/[0-9]/', $senha) == false ||
      preg_match('/[a-z,A-Z]/', $senha) == false || preg_match('/ /', $senha) == true
    ) {
      die('Senha invalida');
    }

    //o email deve conter um dominio valido 
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
     die("email invalido");
    }
  }
  
}
$gestor=new Gestor();

/*criar uma expressao regular para criar um id valido
com data actual mas iniciais do primeiro e segundo nome 
+3 digitos partindo de 001*/

$result=$gestor->EXE_QUERY('SELECT COUNT(*) FROM users');
$valor = $result[0]['COUNT(*)'];
$ano = getdate();
$inicial = $nome[0];
$inicial1 ="";
for ($i = 0; $i < strlen($nome); $i++) {
    if($nome[$i]==" "){
        $inicial1=$nome[$i+1];
    }
}
$a = intval($valor) + 1;
$id = $ano['year'] . $inicial . $inicial1 . sprintf("%03d", $a);

//transformar password em hashcode?????

//adiciona os dados ao objecto
   $novo_user= new Usuarios();
   $novo_user->setNome_user($nome);
   $novo_user->setEmail_user($email);
   $novo_user->setCodigo_user($id);
   $novo_user->setSenha_user($senha);

//verificar se existe
$email1 = $gestor->EXE_QUERY("SELECT email FROM users WHERE email='$email'");

if(empty($email1)){
  $query = "INSERT INTO users (id, nome_user, email, senha) VALUES (?, ?, ?, ?)";
  $parameters = array(
      $novo_user->getCodigo_user(),
      $novo_user->getNome_user(),
      $novo_user->getEmail_user(),
      $novo_user->getSenha_user()
  );

  $gestor->EXE_NON_QUERY($query, $parameters);

  echo "Usuário inserido com sucesso!";
}else{
  echo 'nao inserido';
}







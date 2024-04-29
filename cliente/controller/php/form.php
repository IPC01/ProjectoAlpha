
<?php
include 'C:\wamp64\www\AlphaConection\controller\php\gestor.php';
require 'C:\wamp64\www\AlphaConection\model\usuarios.php';

$nome = $_POST['text_nome'];
$senha = $_POST['text_senha'];
$email = $_POST['text_email'];
$telefone = $_POST['text_telefone'];
$bi = $_POST['text_bi'];
$endereco=$_POST['text_endereco'];
$tipo=1;

//verificar se os campos ja existem 
if (
  !isset($_POST['text_email']) || !isset($_POST['text_senha']) 
  || !isset($_POST['text_nome'])|| !isset($_POST['text_bi'])
  || !isset($_POST['text_telefone'])|| !isset($_POST['text_endereco'])
  ) {
  die('nao existem');
} else {
  //verificar se os campos estao preenchidos
  if (
    empty($_POST['text_email']) || empty($_POST['text_senha']) 
    || empty($_POST['text_nome'])|| empty($_POST['text_bi'])
    || empty($_POST['text_telefone'])|| empty($_POST['text_endereco'])
    ) {
    die('nao estao preenchido');
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
   //telefone tem 9 caracteres e prefixo 8 (2|3|4|5|6|7)
  if(preg_match('/8[2-7]{1}[0-9]{7}/', $telefone) == false){
    die("telefone Invalid0");
  }

  //o bi deve ter 12 caracteres e a ultima letra b
  if(preg_match('/[0-9]{11}[a-z A-Z]{1}/', $bi) == false){
    die("bi Invalid0");
  }
}
$gestor = new Gestor();

/*criar uma expressao regular para criar um id valido
com data actual mas iniciais do primeiro e segundo nome 
+3 digitos partindo de 001*/

$result = $gestor->EXE_QUERY('SELECT COUNT(*) FROM users');
$valor = $result[0]['COUNT(*)'];
$ano = getdate();
$inicial = $nome[0];
$inicial1 = "";
for ($i = 0; $i < strlen($nome); $i++) {
  if ($nome[$i] == " ") {
    $inicial1 = $nome[$i + 1];
  }
}
$a = intval($valor) + 1;
$id = $ano['year'] .strtoupper($inicial)  . strtoupper($inicial1) . sprintf("%03d", $a);

//transformar password em hashcode?????


//verificar se existe
$email1 = $gestor->EXE_QUERY("SELECT email FROM users WHERE email='$email'");

if (empty($email1)) {
  $query = "INSERT INTO users ( id,nome_user, email, senha,tipo,bi,telefone,endereco)
            VALUES (:id,:nome, :email, :senha, :tipo,:bi,:telefone,:endereco)";
  $parameters = array(
    ':id'=>$id,
   ':nome'=>$nome,
   ':email'=>$email,
   ':senha'=>password_hash($senha,PASSWORD_DEFAULT) ,
   ':tipo'=>$tipo,
   ':bi'=>$bi,
   ':telefone'=>$telefone,
   ':endereco'=>$endereco
  );

  $gestor->EXE_NON_QUERY($query, $parameters);

  echo "Usuário inserido com sucesso!";
} else {
  echo 'nao inserido';
}

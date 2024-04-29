<?php
include 'gestor.php';

$gestor=new Gestor();

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $email=trim($_POST['email']);
    $senha=trim($_POST['senha']);
    $params=array(
        ':email'=>$email
    );

 $user=   $gestor->EXE_QUERY("SELECT * FROM users WHERE email=:email",$params);

 if(count($user)==0){
    die('usuario invalido');
 }else{
    $senha_bd=$user[0]['senha'];
    if(password_verify($senha,$senha_bd)){
        //session_start(); // Certifique-se de chamar session_start() antes de acessar $_SESSION
        $_SESSION['user'] = $user[0]['nome_user'];
        $nome = $user[0]['nome_user'];
        print_r($_SESSION['user']);
       
    }else{
        return false;
    }
    
 }

}

?>
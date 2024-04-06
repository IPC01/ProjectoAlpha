<?php
 class Usuarios{
    private String $codigo_user;
    private String $nome_user;
    private String $email_user;
    private String $senha_user;
    private Tipo_estado $tipo_estado;

    public function setTipo_estado($tipo_estado){
            $this->tipo_estado=$tipo_estado;
    }

    public function getTipo_estado(){
        return $this->tipo_estado;
    }

    public function setCodigo_user($codigo_user){
        if(is_string($codigo_user)){
            $this->codigo_user=$codigo_user;
        }

    }

    public function getCodigo_user(){
        return $this->codigo_user;
    }

    public function setEmail_user($email_user){
        if(is_string($email_user)){
            $this->email_user=$email_user;
        }

    }

    public function getEmail_user(){
        return $this->email_user;
    }

    public function setNome_user($nome_user){
        if(is_string($nome_user)){
            $this->nome_user=$nome_user;
        }

    }

    public function getNome_user(){
        return $this->nome_user;
    }

    public function setSenha_user($senha_user){
        if(is_string($senha_user)){
            $this->senha_user=$senha_user;
        }

    }

    public function getSenha_user(){
        return $this->senha_user;
    }


};
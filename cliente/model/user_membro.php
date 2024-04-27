<?php
require 'model\usuarios.php';
class Membros extends Usuarios{
    private String $endereco;
    private String $BI;
    private int $contacto;
    
    public function setEndereco($endereco){
        if(is_string($endereco)){
            $this->endereco=$endereco;
        }

    }

    public function getEndereco(){
        return $this->endereco;
    }

    public function setBI($BI){
        if(is_string($BI)){
            $this->BI=$BI;
        }

    }

    public function getBI(){
        return $this->BI;
    }

    public function setContacto($contacto){
        if(is_numeric($contacto)){
            $this->contacto=$contacto;
        }

    }

    public function getContacto(){
        return $this->contacto;
    }
}
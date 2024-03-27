<?php
class Tipo_estado{
    private int $id_estado;
    private String $estado;

    public function setId_estado($id_estado){
        if(is_numeric($id_estado)){
            $this->id_estado=$id_estado;
        }

    }

    public function getId_estado(){
        return $this->id_estado;
    }

    public function setEstado($estado){
        if(is_string($estado)){
            $this->estado=$estado;
        }

    }

    public function getEstado(){
        return $this->estado;
    }
}
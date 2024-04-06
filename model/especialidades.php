<?php
class Especialidades{
    private int $id_especialidade;
    private String $nome_especialidade;
    private String $descricao;

    public function setId_especialidade($id_especialidade){
        if(is_numeric($id_especialidade)){
            $this->id_especialidade=$id_especialidade;
        }

    }

    public function getId_especialidade(){
        return $this->id_especialidade;
    }

    public function setNome_especialidade($nome_especialidade){
        if(is_string($nome_especialidade)){
            $this->nome_especialidade=$nome_especialidade;
        }

    }

    public function getNome_especialidade(){
        return $this->nome_especialidade;
    }

    public function setDescricao($descricao){
        if(is_string($descricao)){
            $this->descricao=$descricao;
        }

    }

    public function getDescricao(){
        return $this->descricao;
    }
}
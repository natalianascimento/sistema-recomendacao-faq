<?php

namespace Sistema\Model;

class Chamado 
{
    private $titulo;
    private $descricao;

    public function __construct (string $titulo, string $descricao) {
        $this->titulo = $titulo;
        $this->descricao = $descricao;
    }
    
    public function recuperaAtributo (string $atributo):string {
        return $this->$atributo;
    }

}
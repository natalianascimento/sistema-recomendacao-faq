<?php

namespace Sistema\Model\Entidades;

class Chamado 
{
    private $titulo;
    private $descricao;

    public function __construct (string $titulo, string $descricao) 
    {
        $this->titulo = $titulo;
        $this->descricao = $descricao;
    }
    
    public function recuperaAtributo ($atributo) 
    {
        return $this->$atributo;
    }

}
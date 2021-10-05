<?php
namespace Sistema\Service;

use Sistema\Model\Entidades\Chamado;
use Sistema\Model\DAO\ChamadoDAO;

class ServiceChamado 
{
    function cadastrarChamado(string $titulo, string $descricao) 
    {
        $chamado = new Chamado($titulo, $descricao);
        
        $cadastro = new ChamadoDAO();
        $chamadoNovo = 
            $cadastro->cadastrarChamado(
                $chamado->recuperaAtributo('titulo'),
                $chamado->recuperaAtributo('descricao')
            );
        return $chamadoNovo; 
    }
}
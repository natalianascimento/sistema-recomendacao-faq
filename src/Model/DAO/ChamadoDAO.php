<?php

namespace Sistema\Model\DAO;

use Sistema\Model\Entidades\Chamado;
use Sistema\Model\DAO\BaseDAO;


class ChamadoDAO extends BaseDAO
{
    public function consultarChamado ($sql)
    {
        $resultado = parent::select($sql);

        foreach ($resultado as $row) {
            print $row['titulo'] . "<br>";
        }
    }

    public function cadastrarChamado ($titulo, $descricao) 
    {
        $novoChamado = parent::insert(
            'chamado',
            ':titulo, 
            :descricao', 
            [
            ':titulo'       => $titulo, 
            ':descricao'    => $descricao
            ]
        );
        
        return $novoChamado;
    }
}
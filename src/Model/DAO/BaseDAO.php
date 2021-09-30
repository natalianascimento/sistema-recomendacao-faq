<?php

namespace Sistema\Model\DAO;

use Sistema\Model\ConexaoDB;

class BaseDAO //abstract
{
    private $conexao;

    public function __construct()
    {
        $this->conexao = ConexaoDB::conectar();
    }

    public function select(string $sql): bool
    {
        if(!empty($sql))
        {
            return $this->conexao->query($sql);
        }
    }
}
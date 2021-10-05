<?php

namespace Sistema\Model\DAO;

use Sistema\Model\ConexaoDB;

abstract class BaseDAO
{
    private $conexao;

    public function __construct()
    {
        $this->conexao = ConexaoDB::conectar();
    }

    public function select($sql)
    {
        if(!empty($sql)){
            $resultado = $this->conexao->query($sql);
            return $resultado;
        }
    }

    public function insert($tabela, $cols, $valores)
    {
        if(!empty($tabela) && !empty($cols) && !empty($valores)) {
            $parametros    = $cols;
            $colunas       = str_replace(":", "", $cols);

            $sql = "INSERT INTO $tabela ($colunas) VALUES ($parametros)";

            $stmt = $this->conexao->prepare($sql);
            $stmt->execute($valores);

            return $this->conexao->lastInsertId();
        }
    }
}
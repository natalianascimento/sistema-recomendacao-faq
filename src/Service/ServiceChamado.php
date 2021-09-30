<?php
namespace Sistema\Service;

require_once '../../Autoload.php';

use Sistema\Model\Chamado;

class ServiceChamado 
{
    function cadastrarChamado(string $titulo, string $descricao) {
        
        // echo "O título é $titulo e a descrição é $descricao";

        $sistema = new Chamado($titulo, $descricao);

        
    }

}

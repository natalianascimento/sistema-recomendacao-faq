<?php
require_once '../../Autoload.php';

use Sistema\Service\ServiceChamado;
use Sistema\Model\DAO\BaseDAO;

if (isset($_POST['btnEnviar'])){

    // $service = new ServiceChamado();
    // $service->cadastrarChamado($_POST['titulo'], $_POST['descricao']);

    $baseDao = new BaseDAO;
    $resultado = $baseDao->select('select * from postagem;');

    print_r($resultado);
}
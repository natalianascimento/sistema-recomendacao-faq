<?php
require_once '../../Autoload.php';

use Sistema\Service\ServiceChamado;
use Sistema\Controller\Controller;
use Sistema\View\CadastroChamado;
use Sistema\Service\ServiceTelas;

if (isset($_POST['btnEnviar'])){

    $service = new ServiceChamado();
    $chamado = $service->cadastrarChamado($_POST['titulo'], $_POST['descricao']);
    echo $chamado;

    // $tela = new Controller();
    // $tela->caminhoAtual('CadastroChamado');
    new ServiceTelas($teste);
    new CadastroChamado();

}
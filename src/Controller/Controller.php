<?php

namespace Sistema\Controller;

class Controller
{
    public function visualizarTela($view)
    {
        require_once 'src/View/Base/Header.php';
        require_once 'src/View/' . $view . '.php';
        require_once 'src/View/Base/Footer.php';

    }

    public function caminhoAtual($view)
    {

        $cabecalho = 'src/View/Base/Header.php';
        $telaDesejada = 'src/View/' . $view . '.php';
        $rodape = 'src/View/Base/Footer.php';
        $diretorio = "";
        $nivelDePastaAtual = getcwd();

        if (mb_strpos($nivelDePastaAtual, 'src')) {

            $nivelDaPastaSrc = strpos(getcwd(), 'src');
            $contagemNiveisPastas = substr(getcwd(), $nivelDaPastaSrc);
            $transformaEmArray = explode("\\", $contagemNiveisPastas);

            foreach ($transformaEmArray as $item) {
                 $diretorio .= "../";
            }
        }

        if ($diretorio != null) {

            $cabecalho = $diretorio . 'src/View/Base/Header.php';
            $telaPrincipal = $diretorio . $telaDesejada;
            $rodape = $diretorio . 'src/View/Base/Footer.php';

        } else {

            $telaPrincipal = $telaDesejada;
            
        }

        require_once $cabecalho;
        require_once $telaPrincipal;
        require_once $rodape;

    }
}
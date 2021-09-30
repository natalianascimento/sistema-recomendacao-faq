<?php

spl_autoload_register(function(string $namespaceClasse){

        $caminhoArquivo = str_replace('Sistema', 'src', $namespaceClasse);
        $caminhoArquivo = str_replace('\\', '/', $caminhoArquivo);
        $caminhoArquivo .= '.php';
        
        require_once $caminhoArquivo;
    }
);

// $posicao = strpos(getcwd(), 'src');
// $contagemNiveisPastas = substr(getcwd(), $posicao);

// $transformaEmArray = explode("\\", $contagemNiveisPastas);

// $diretorio = "";

// foreach ($transformaEmArray as $item) {
//      $diretorio .= "../";
// }

// $diretorio .= $caminhoArquivo;

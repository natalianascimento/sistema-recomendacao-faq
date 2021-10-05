<?php

spl_autoload_register(function(string $namespaceClasse){

        $caminhoArquivo = str_replace('Sistema', 'src', $namespaceClasse);
        $caminhoArquivo = str_replace('\\', '/', $caminhoArquivo);
        $caminhoArquivo .= '.php';
        
        require_once $caminhoArquivo;
    }
);
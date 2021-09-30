<?php

namespace Sistema\Controller;

class Controller
{
    public function __construct($view)
    {
        require_once 'src/View/Base/Header.php';
        require_once 'src/View/' . $view . '.php';
        require_once 'src/View/Base/Footer.php';

    }
}
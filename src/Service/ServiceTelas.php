<?php

namespace Sistema\Service;

use Sistema\View\Base\Header;
use Sistema\View\Base\Footer;

class ServiceTelas
{
    public function __construct($tela)
    {
        new Header();

        new Footer();
    }
}
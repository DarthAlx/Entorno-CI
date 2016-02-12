<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagina  {

    function __construct(){


    }

    public function crearPagina($header,$contenido,$footer)
    {
        private $p_header;
        private $p_contenido;
        private $p_footer;
        $this->$p_header=$header;
        $this->$p_contenido=$contenido;
        $this->$p_footer=$footer;

    }
}

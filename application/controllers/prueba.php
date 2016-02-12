<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prueba extends CI_Controller {
    function __construct(){
    parent::__construct();
    }

    public function index()
    {
        $this->load->library('pagina');

        $this->pagina->crearPagina("header","home","footer");
        crearPagina("header","home","footer");
        $this->load->view('Plantillas/header');
        $this->load->view('Paginas/home');
        $this->load->view('Plantillas/footer');
    }
}

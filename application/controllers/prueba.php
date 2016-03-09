<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prueba extends CI_Controller {
    function __construct(){
    parent::__construct();
        $this->load->helper('form');

    }

    public function index()
    {
        $this->load->library('pagina');
        $this->load->helper('form');
        $this->load->helper('security');
        $data = array(
        'pass'      => 'admin123'
        );


        $this->load->view('Plantillas/header');
        $this->load->view('Paginas/nuevo',$data);
        $this->load->view('Plantillas/footer');
    }
    public function formulario()
    {
        $this->load->view('Plantillas/header');
        $this->load->view('Paginas/formulario');
        $this->load->view('Plantillas/footer');
    }
    public function recibir()
    {

    }

}

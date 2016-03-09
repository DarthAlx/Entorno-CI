<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Basedd_model extends CI_Model {
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    function crear($data){
        $this->db->insert('cursos',array(

            'nombre' => $data['nombre']

        ));
    }
}
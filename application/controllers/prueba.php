<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prueba extends CI_Controller {
    function __construct(){
    parent::__construct();
        $this->load->helper('form');
        $this->load->helper(array('download', 'file', 'url', 'html'));
       $this->folder = './uploads/';

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
    public function files(){
      $this->load->view('Plantillas/header');
      $this->load->view('Paginas/files');
      $this->load->view('Plantillas/footer');

    }
    public function do_upload()
    {
        $config['upload_path'] = $this->folder;
        $config['allowed_types'] = 'zip|rar|pdf|docx|txt|jpg';
        $config['remove_spaces']=TRUE;
        $config['max_size']    = '2048';

        $this->load->library('upload', $config);

    if ( ! $this->upload->do_upload())
        {
            $error = array('error' => $this->upload->display_errors());
            echo "error";
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            echo "bien";

        }

   }
   public function info(){

    $files = get_filenames($this->folder, FALSE);

    if($files){
        $data['files']=$files;

        }else{
            $data['files']=NULL;
        }
   $this->load->view('Paginas/archivos',$data);

  }

  public function downloads($name){

       $data = file_get_contents($this->folder.$name);
       force_download($name,$data);

  }







}

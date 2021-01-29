<?php

defined('BASEPATH') OR exit('Ação não permitida!');

class Produtos extends CI_Controller {

    public function __construct() {
        parent::__construct();

        if (!$this->ion_auth->logged_in()) {
            $this->session->set_flashdata('info', 'Sua seção expirou!');
            redirect('login');
        }
        
        $this->load->model('produtos_model');
    }

    public function index() {
        $data = array(
            'titulo' => 'Gestão de Produtos',
            'scripts' => array(
                'vendor/mask/jquery.mask.min.js',
                'vendor/mask/app.js',
            ),
            'produtos' => $this->produtos_model->get_all(),
        );

         //echo '<pre>';
         //print_r($data['produtos']);
         //exit();

        $this->load->view('layout/header', $data);
        $this->load->view('produtos/index');
        $this->load->view('layout/footer');
    }
    
}
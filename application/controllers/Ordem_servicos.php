<?php

defined('BASEPATH') OR exit('Ação não permitida!');

class Ordem_servicos extends CI_Controller {

    public function __construct() {
        parent::__construct();

        if (!$this->ion_auth->logged_in()) {
            $this->session->set_flashdata('info', 'Sua seção expirou!');
            redirect('login');
        }
        
        $this->load->model('ordem_servicos_model');
    }

    public function index() {
        $data = array(
            'titulo' => 'Gestão de Ordens de Serviços',
            'scripts' => array(
                'vendor/mask/jquery.mask.min.js',
                'vendor/mask/app.js',
            ),
            'ordens_servicos' => $this->ordem_servicos_model->get_all(),
        );

        $this->load->view('layout/header', $data);
        $this->load->view('ordens_servicos/index');
        $this->load->view('layout/footer');
    }
    
}


<?php

defined('BASEPATH') OR exit('Ação não permitida!');

class Orcamentos extends CI_Controller {

    public function __construct() {
        parent::__construct();

        if (!$this->ion_auth->logged_in()) {
            $this->session->set_flashdata('info', 'Sua seção expirou!');
            redirect('login');
        }
    }

    public function index() {
        $data = array(
            'titulo' => 'Gestão de Orçamentos',
            'styles' => array('vendor/datatables/dataTables.bootstrap4.min.css'),
            'scripts' => array(
                'vendor/datatables/app.js',
                'vendor/datatables/jquery.dataTables.min.js',
                'vendor/datatables/dataTables.bootstrap4.min.js',
                'vendor/mask/jquery.mask.min.js',
                'vendor/mask/app.js',
            ),
            'orcamentos' => $this->core_model->get_all('orcamentos'),
        );

        //echo '<pre>';
        //print_r($data['orcamentos']);
        //exit();

        $this->load->view('layout/header', $data);
        $this->load->view('orcamentos/index');
        $this->load->view('layout/footer');
    }

}

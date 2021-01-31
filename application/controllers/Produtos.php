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

    public function edit($produto_id = NULL) {

        if (!$produto_id || !$this->core_model->get_by_id('produtos', array('produto_id' => $produto_id))) {
            $this->session->set_flashdata('error', 'Produto não encontrado.');
            redirect('produtos');
        } else {
            
            //mostrar o nome do Fornecedor que está sendo atualizado.
                $produto = $this->core_model->get_by_id('produtos', array('produto_id' => $produto_id));
                //erro de validação
                $data = array(
                    'titulo' => 'Atualizar cadastro do produto '.$produto->produto_descricao,
                    'scripts' => array(
                        'vendor/mask/jquery.mask.min.js',
                        'vendor/mask/app.js',
                    ),
                    'produto' => $produto,
                    
                    'marcas' => $this->core_model->get_all('marcas'),
                    
                    'categorias' => $this->core_model->get_all('categorias'),
                    
                    'fornecedores' => $this->core_model->get_all('fornecedores'),
                );

            $this->load->view('layout/header', $data);
            $this->load->view('produtos/edit');
            $this->load->view('layout/footer');
        }
    }

}

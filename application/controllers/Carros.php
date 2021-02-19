<?php

defined('BASEPATH') OR exit('Ação não permitida!');

class Carros extends CI_Controller {

    public function __construct() {
        parent::__construct();

        if (!$this->ion_auth->logged_in()) {
            $this->session->set_flashdata('info', 'Sua seção expirou!');
            redirect('login');
        }

        $this->load->model('carros_model');
    }

    public function index() {
        $data = array(
            'titulo' => 'Gestão de Carros',
            'scripts' => array(
                'vendor/mask/jquery.mask.min.js',
                'vendor/mask/app.js',
            ),
            'carros' => $this->carros_model->get_all(),
        );

        $this->load->view('layout/header', $data);
        $this->load->view('carros/index');
        $this->load->view('layout/footer');
    }

    public function add() {

        $this->form_validation->set_rules('carro_nome', '', 'trim|required|min_length[4]|max_length[45]');
        $this->form_validation->set_rules('carro_modelo', '', 'trim|required|min_length[3]|max_length[45]');
        $this->form_validation->set_rules('carro_placa', 'Placa', 'trim|min_length[8]|max_length[8]');

        if ($this->form_validation->run()) {

            $data = elements(
                    array(
                        'carro_nome',
                        'carro_modelo',
                        'carro_marca_id',                        
                        'carro_placa',
                        'carro_ativo',
                    ), $this->input->post()
            );

            $data = html_escape($data);

            $this->core_model->insert('carros', $data);

            redirect(('carros'));
        } else {
            //erro de validação
            $data = array(
                'titulo' => 'Cadastrar Novo Carro ',
                'scripts' => array(
                    'vendor/mask/jquery.mask.min.js',
                    'vendor/mask/app.js',
                ),
                'marcas' => $this->core_model->get_all('marcas', array('marca_ativa' => 1)),
            );

            $this->load->view('layout/header', $data);
            $this->load->view('carros/add');
            $this->load->view('layout/footer');
        }
    }

    public function edit($carro_id = NULL) {

        if (!$carro_id || !$this->core_model->get_by_id('carros', array('carro_id' => $carro_id))) {
            $this->session->set_flashdata('error', 'Carro não encontrado.');
            redirect('carros');
        } else {

            $this->form_validation->set_rules('carro_nome', '', 'trim|required|min_length[4]|max_length[45]');
            $this->form_validation->set_rules('carro_modelo', '', 'trim|required|min_length[3]|max_length[45]');
            $this->form_validation->set_rules('carro_placa', 'Placa', 'trim|min_length[8]|max_length[8]');

            if ($this->form_validation->run()) {

                $data = elements(
                        array(
                            'carro_nome',
                            'carro_modelo',
                            'carro_marca_id',
                            'carro_placa',
                            'carro_ativo',                            
                        ), $this->input->post()
                );

                $data = html_escape($data);

                $this->core_model->update('carros', $data, array('carro_id' => $carro_id));

                redirect(('carros'));
            } else {
                //Erro de validação
                //mostrar o nome do Carro que está sendo atualizado.
                $carro = $this->core_model->get_by_id('carros', array('carro_id' => $carro_id));

                $data = array(
                    'titulo' => 'Atualizar cadastro do carro ' . $carro->carro_nome,
                    'scripts' => array(
                        'vendor/mask/jquery.mask.min.js',
                        'vendor/mask/app.js',
                    ),
                    'carro' => $this->core_model->get_by_id('carros', array('carro_id' => $carro_id)),
                    'marcas' => $this->core_model->get_all('marcas', array('marca_ativa' => 1)),
                );

                $this->load->view('layout/header', $data);
                $this->load->view('carros/edit');
                $this->load->view('layout/footer');
            }
        }
    }

    public function del($carro_id = NULL) {
        if (!$carro_id || !$this->core_model->get_by_id('carros', array('carro_id' => $carro_id))) {

            $this->session->set_flashdata('error', 'Equipamento não encontrado!');
            redirect('carros');
        } else {

            $this->core_model->delete('carros', array('carro_id' => $carro_id));
            redirect('carros');
        }
    }

}

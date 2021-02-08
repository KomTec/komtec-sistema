<?php

defined('BASEPATH') OR exit('Ação não permitida!');

class Equipamentos extends CI_Controller {

    public function __construct() {
        parent::__construct();

        if (!$this->ion_auth->logged_in()) {
            $this->session->set_flashdata('info', 'Sua seção expirou!');
            redirect('login');
        }

        $this->load->model('equipamentos_model');
    }

    public function index() {
        $data = array(
            'titulo' => 'Gestão de Equipamentos',
            'scripts' => array(
                'vendor/mask/jquery.mask.min.js',
                'vendor/mask/app.js',
            ),
            'equipamentos' => $this->equipamentos_model->get_all(),
        );

        $this->load->view('layout/header', $data);
        $this->load->view('equipamentos/index');
        $this->load->view('layout/footer');
    }

    public function add() {

        $this->form_validation->set_rules('equipamento_nome', '', 'trim|required|min_length[4]|max_length[45]');
        $this->form_validation->set_rules('equipamento_modelo', '', 'trim|required|min_length[4]|max_length[145]');
        $this->form_validation->set_rules('equipamento_obs', 'Observação', 'trim|max_length[500]');

        if ($this->form_validation->run()) {

            $data = elements(
                    array(
                        'equipamento_codigo',
                        'equipamento_nome',
                        'equipamento_modelo',
                        'equipamento_marca_id',
                        'equipamento_ativo',
                        'equipamento_obs',
                    ), $this->input->post()
            );

            $data = html_escape($data);

            $this->core_model->insert('equipamentos', $data);

            redirect(('equipamentos'));
        } else {
            //erro de validação
            $data = array(
                'titulo' => 'Cadastrar Novo Equipamento ',
                'scripts' => array(
                    'vendor/mask/jquery.mask.min.js',
                    'vendor/mask/app.js',
                ),
                'equipamento_codigo' => $this->core_model->generate_unique_code('equipamentos', 'numeric', 8, 'equipamento_codigo'),
                'marcas' => $this->core_model->get_all('marcas', array('marca_ativa' => 1)),
            );

            $this->load->view('layout/header', $data);
            $this->load->view('equipamentos/add');
            $this->load->view('layout/footer');
        }
    }

    public function edit($equipamento_id = NULL) {

        if (!$equipamento_id || !$this->core_model->get_by_id('equipamentos', array('equipamento_id' => $equipamento_id))) {
            $this->session->set_flashdata('error', 'Equipamento não encontrado.');
            redirect('equipamentos');
        } else {

            $this->form_validation->set_rules('equipamento_nome', '', 'trim|required|min_length[4]|max_length[45]');
            $this->form_validation->set_rules('equipamento_modelo', '', 'trim|required|min_length[4]|max_length[145]');
            $this->form_validation->set_rules('equipamento_obs', 'Observação', 'trim|max_length[500]');

            if ($this->form_validation->run()) {

                $data = elements(
                        array(
                            'equipamento_codigo',
                            'equipamento_nome',
                            'equipamento_modelo',
                            'equipamento_marca_id',
                            'equipamento_ativo',
                            'equipamento_obs',
                        ), $this->input->post()
                );

                $data = html_escape($data);

                $this->core_model->update('equipamentos', $data, array('equipamento_id' => $equipamento_id));

                redirect(('equipamentos'));
            } else {
                //Erro de validação
                //mostrar o nome do Fornecedor que está sendo atualizado.
                $equipamento = $this->core_model->get_by_id('equipamentos', array('equipamento_id' => $equipamento_id));

                $data = array(
                    'titulo' => 'Atualizar cadastro do equipamento ' . $equipamento->equipamento_nome,
                    'scripts' => array(
                        'vendor/mask/jquery.mask.min.js',
                        'vendor/mask/app.js',
                    ),
                    'equipamento' => $this->core_model->get_by_id('equipamentos', array('equipamento_id' => $equipamento_id)),
                    'marcas' => $this->core_model->get_all('marcas', array('marca_ativa' => 1)),
                );

                $this->load->view('layout/header', $data);
                $this->load->view('equipamentos/edit');
                $this->load->view('layout/footer');
            }
        }
    }

    public function del($equipamento_id = NULL) {
        if (!$equipamento_id || !$this->core_model->get_by_id('equipamentos', array('equipamento_id' => $equipamento_id))) {

            $this->session->set_flashdata('error', 'Equipamento não encontrado!');
            redirect('equipamentos');
        } else {

            $this->core_model->delete('equipamentos', array('equipamento_id' => $equipamento_id));
            redirect('equipamentos');
        }
    }

}

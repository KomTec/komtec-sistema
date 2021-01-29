<?php

defined('BASEPATH') OR exit('Ação não permitida!');

class Servicos extends CI_Controller {

    public function __construct() {
        parent::__construct();

        if (!$this->ion_auth->logged_in()) {
            $this->session->set_flashdata('info', 'Sua seção expirou!');
            redirect('login');
        }
    }

    public function index() {
        $data = array(
            'titulo' => 'Gestão de Serviços',
            'scripts' => array(
                'vendor/mask/jquery.mask.min.js',
                'vendor/mask/app.js',
            ),
            'servicos' => $this->core_model->get_all('servicos'),
        );

        $this->load->view('layout/header', $data);
        $this->load->view('servicos/index');
        $this->load->view('layout/footer');
    }

    public function add() {

        $this->form_validation->set_rules('servico_nome', '', 'trim|required|min_length[10]|max_length[145]|is_unique[servicos.servico_nome]');
        $this->form_validation->set_rules('servico_preco', '', 'trim|required');
        $this->form_validation->set_rules('servico_descricao', '', 'trim|max_length[700]');


        if ($this->form_validation->run()) {

            $data = elements(
                    array(
                        'servico_nome',
                        'servico_preco',
                        'servico_descricao',
                        'servico_ativo',
                    ), $this->input->post()
            );

            $data = html_escape($data);

            $this->core_model->insert('servicos', $data);

            redirect(('servicos'));
        } else {

            //erro de validação
            $data = array(
                'titulo' => 'Cadastrar novo serviço',
                'scripts' => array(
                    'vendor/mask/jquery.mask.min.js',
                    'vendor/mask/app.js',
                ),
            );

            $this->load->view('layout/header', $data);
            $this->load->view('servicos/add');
            $this->load->view('layout/footer');
        }
    }

    public function edit($servico_id = NULL) {
        if (!$servico_id || !$this->core_model->get_by_id('servicos', array('servico_id' => $servico_id))) {

            $this->session->set_flashdata('error', 'Serviço não encontrado!');

            redirect('servicos');
        } else {


            $this->form_validation->set_rules('servico_nome', '', 'trim|required|min_length[10]|max_length[145]');
            $this->form_validation->set_rules('servico_preco', '', 'trim|required');
            $this->form_validation->set_rules('servico_descricao', '', 'trim|max_length[700]');


            if ($this->form_validation->run()) {

                // echo '<pre>';
                //print_r($this->input->post());
                //exit;

                $data = elements(
                        array(
                            'servico_nome',
                            'servico_preco',
                            'servico_descricao',
                            'servico_ativo',
                        ), $this->input->post()
                );

                $data = html_escape($data);

                $this->core_model->update('servicos', $data, array('servico_id' => $servico_id));

                redirect(('servicos'));
            } else {

                //mostrar o nome do serviço que está sendo atualizado.
                $servico = $this->core_model->get_by_id('servicos', array('servico_id' => $servico_id));
                //erro de validação
                $data = array(
                    'titulo' => 'Atualizar cadastro do serviço ' . $servico->servico_nome,
                    'scripts' => array(
                        'vendor/mask/jquery.mask.min.js',
                        'vendor/mask/app.js',
                    ),
                    'servico' => $servico,
                );

                //echo '<pre>';
                //print_r($data['servico']);
                //exit();

                $this->load->view('layout/header', $data);
                $this->load->view('servicos/edit');
                $this->load->view('layout/footer');
            }
        }
    }

    public function del($servico_id = NULL) {
        if (!$servico_id || !$this->core_model->get_by_id('servicos', array('servico_id' => $servico_id))) {

            $this->session->set_flashdata('error', 'Serviço não encontrado!');
            redirect('servicos');
        } else {

            $this->core_model->delete('servicos', array('servico_id' => $servico_id));
            redirect('servicos');
        }
    }

}

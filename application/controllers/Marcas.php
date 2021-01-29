<?php

defined('BASEPATH') OR exit('Ação não permitida!');

class Marcas extends CI_Controller {

    public function __construct() {
        parent::__construct();

        if (!$this->ion_auth->logged_in()) {
            $this->session->set_flashdata('info', 'Sua seção expirou!');
            redirect('login');
        }
    }

    public function index() {
        $data = array(
            'titulo' => 'Gestão de Marcas',
            'scripts' => array(
                'vendor/mask/jquery.mask.min.js',
                'vendor/mask/app.js',
            ),
            'marcas' => $this->core_model->get_all('marcas'),
        );

        $this->load->view('layout/header', $data);
        $this->load->view('marcas/index');
        $this->load->view('layout/footer');
    }

    public function edit($marca_id = NULL) {
        if (!$marca_id || !$this->core_model->get_by_id('marcas', array('marca_id' => $marca_id))) {

            $this->session->set_flashdata('error', 'Marca não encontrado!');

            redirect('marcas');
        } else {


            $this->form_validation->set_rules('marca_nome', '', 'trim|required|min_length[3]|max_length[145]');


            if ($this->form_validation->run()) {

                // echo '<pre>';
                //print_r($this->input->post());
                //exit;

                $data = elements(
                        array(
                            'marca_nome',
                            'marca_ativa',
                        ), $this->input->post()
                );

                $data = html_escape($data);

                $this->core_model->update('marcas', $data, array('marca_id' => $marca_id));

                redirect(('marcas'));
            } else {

                //mostrar o nome do serviço que está sendo atualizado.
                $marca = $this->core_model->get_by_id('marcas', array('marca_id' => $marca_id));
                //erro de validação
                $data = array(
                    'titulo' => 'Atualizar cadastro da marca ' . $marca->marca_nome,
                    'scripts' => array(
                        'vendor/mask/jquery.mask.min.js',
                        'vendor/mask/app.js',
                    ),
                    'marca' => $marca,
                );

                //echo '<pre>';
                //print_r($data['marca']);
                //exit();

                $this->load->view('layout/header', $data);
                $this->load->view('marcas/edit');
                $this->load->view('layout/footer');
            }
        }
    }

    public function add() {

        $this->form_validation->set_rules('marca_nome', '', 'trim|required|min_length[3]|max_length[145]');


        if ($this->form_validation->run()) {

            // echo '<pre>';
            //print_r($this->input->post());
            //exit;

            $data = elements(
                    array(
                        'marca_nome',
                        'marca_ativa',
                    ), $this->input->post()
            );

            $data = html_escape($data);

            $this->core_model->insert('marcas', $data);

            redirect(('marcas'));
        } else {

            //erro de validação
            $data = array(
                'titulo' => 'Cadastro de nova marca',
                'scripts' => array(
                    'vendor/mask/jquery.mask.min.js',
                    'vendor/mask/app.js',
                ),
            );

            //echo '<pre>';
            //print_r($data['marca']);
            //exit();

            $this->load->view('layout/header', $data);
            $this->load->view('marcas/add');
            $this->load->view('layout/footer');
        }
    }
    
    public function del($marca_id = NULL) {
        if (!$marca_id || !$this->core_model->get_by_id('marcas', array('marca_id' => $marca_id))) {

            $this->session->set_flashdata('error', 'Marca não encontrada!');
            redirect('marcas');
        } else {

            $this->core_model->delete('marcas', array('marca_id' => $marca_id));
            redirect('marcas');
        }
    }

}

<?php

defined('BASEPATH') OR exit('Ação não permitida!');

class Tecnicos extends CI_Controller {

    public function __construct() {
        parent::__construct();

        if (!$this->ion_auth->logged_in()) {
            $this->session->set_flashdata('info', 'Sua seção expirou!');
            redirect('login');
        }
    }

    public function index() {
        $data = array(
            'titulo' => 'Gestão de Técnicos',
            'styles' => array('vendor/datatables/dataTables.bootstrap4.min.css'),
            'scripts' => array(
                'vendor/datatables/app.js',
                'vendor/datatables/jquery.dataTables.min.js',
                'vendor/datatables/dataTables.bootstrap4.min.js',
                'vendor/mask/jquery.mask.min.js',
                'vendor/mask/app.js',
            ),
            'tecnicos' => $this->core_model->get_all('tecnicos'),
        );

        $this->load->view('layout/header', $data);
        $this->load->view('tecnicos/index');
        $this->load->view('layout/footer');
    }

    public function add() {

        $this->form_validation->set_rules('tecnico_nome_completo', '', 'trim|required|min_length[4]|max_length[145]');
        $this->form_validation->set_rules('tecnico_rg', '', 'trim|required|max_length[20]|is_unique[tecnicos.tecnico_rg]');
        $this->form_validation->set_rules('tecnico_cpf', '', 'trim|required|exact_length[14]|is_unique[tecnicos.tecnico_cpf]|callback_valida_tecnico_cpf');
        $this->form_validation->set_rules('tecnico_email', '', 'trim|required|valid_email|max_length[50]|is_unique[tecnicos.tecnico_email]');

        if (!empty($this->input->post('tecnico_telefone'))) {
            $this->form_validation->set_rules('tecnico_telefone', '', 'trim|max_length[14]|is_unique[tecnicos.tecnico_telefone]');
        }

        if (!empty($this->input->post('tecnico_celular'))) {
            $this->form_validation->set_rules('tecnico_celular', '', 'trim|max_length[15]|is_unique[tecnicos.tecnico_celular]');
        }

        $this->form_validation->set_rules('tecnico_cep', '', 'trim|required|exact_length[9]');
        $this->form_validation->set_rules('tecnico_endereco', '', 'trim|required|max_length[155]');
        $this->form_validation->set_rules('tecnico_numero_endereco', '', 'trim|max_length[20]');
        $this->form_validation->set_rules('tecnico_bairro', '', 'trim|required|max_length[45]');
        $this->form_validation->set_rules('tecnico_complemento', '', 'trim|max_length[145]');
        $this->form_validation->set_rules('tecnico_cidade', '', 'trim|required|max_length[50]');
        $this->form_validation->set_rules('tecnico_estado', '', 'trim|required|exact_length[2]');
        $this->form_validation->set_rules('tecnico_obs', '', 'max_length[500]');


        if ($this->form_validation->run()) {

            $data = elements(
                    array(
                        'tecnico_nome_completo',
                        'tecnico_cpf',
                        'tecnico_rg',
                        'tecnico_email',
                        'tecnico_telefone',
                        'tecnico_celular',
                        'tecnico_cep',
                        'tecnico_endereco',
                        'tecnico_numero_endereco',
                        'tecnico_bairro',
                        'tecnico_complemento',
                        'tecnico_cidade',
                        'tecnico_estado',
                        'tecnico_ativo',
                        'tecnico_codigo',
                        'tecnico_obs',
                    ), $this->input->post()
            );



            $data['tecnico_cpf'] = $this->input->post('tecnico_cpf');

            $data['tecnico_estado'] = strtoupper($this->input->post('tecnico_estado'));

            $data = html_escape($data);

            $this->core_model->insert('tecnicos', $data);

            redirect(('tecnicos'));
        } else {

            //erro de validação

            $data = array(
                'titulo' => 'Cadastrando Novo Técnico',
                'scripts' => array(
                    'vendor/mask/jquery.mask.min.js',
                    'vendor/mask/app.js',
                ),
                'tecnico_codigo' => $this->core_model->generate_unique_code('tecnicos', 'numeric', 8, 'tecnico_codigo'),
            );

            $this->load->view('layout/header', $data);
            $this->load->view('tecnicos/add');
            $this->load->view('layout/footer');
        }
    }

    public function edit($tecnico_id = NULL) {
        if (!$tecnico_id || !$this->core_model->get_by_id('tecnicos', array('tecnico_id' => $tecnico_id))) {

            $this->session->set_flashdata('error', 'técnico não encontrado!');

            redirect('tecnicos');
        } else {

            $this->form_validation->set_rules('tecnico_nome_completo', '', 'trim|required|min_length[4]|max_length[200]');
            $this->form_validation->set_rules('tecnico_cpf', '', 'trim|required|exact_length[14]|callback_valida_tecnico_cpf');
            $this->form_validation->set_rules('tecnico_rg', '', 'trim|required|max_length[20]|callback_check_tecnico_rg');
            $this->form_validation->set_rules('tecnico_email', '', 'trim|required|valid_email|max_length[100]|callback_check_tecnico_email');

            if (!empty($this->input->post('tecnico_telefone'))) {
                $this->form_validation->set_rules('tecnico_telefone', '', 'trim|max_length[14]|callback_check_tecnico_telefone');
            }
            if (!empty($this->input->post('tecnico_celular'))) {
                $this->form_validation->set_rules('tecnico_celular', '', 'trim|max_length[15]|callback_check_tecnico_celular');
            }
            $this->form_validation->set_rules('tecnico_cep', '', 'trim|required|exact_length[9]');
            $this->form_validation->set_rules('tecnico_endereco', '', 'trim|required|max_length[155]');
            $this->form_validation->set_rules('tecnico_numero_endereco', '', 'trim|max_length[20]');
            $this->form_validation->set_rules('tecnico_bairro', '', 'trim|required|max_length[45]');
            $this->form_validation->set_rules('tecnico_complemento', '', 'trim|max_length[145]');
            $this->form_validation->set_rules('tecnico_cidade', '', 'trim|required|max_length[50]');
            $this->form_validation->set_rules('tecnico_estado', '', 'trim|required|exact_length[2]');
            $this->form_validation->set_rules('tecnico_obs', '', 'max_length[500]');

            if ($this->form_validation->run()) {

                $data = elements(
                        array(
                            'tecnico_codigo',
                            'tecnico_nome_completo',
                            'tecnico_cpf',
                            'tecnico_rg',
                            'tecnico_email',
                            'tecnico_telefone',
                            'tecnico_celular',
                            'tecnico_endereco',
                            'tecnico_numero_endereco',
                            'tecnico_complemento',
                            'tecnico_bairro',
                            'tecnico_cep',
                            'tecnico_cidade',
                            'tecnico_estado',
                            'tecnico_ativo',
                            'tecnico_obs',
                        ), $this->input->post()
                );

                $data['tecnico_estado'] = strtoupper($this->input->post('tecnico_estado'));

                $data = html_escape($data);

                $this->core_model->update('tecnicos', $data, array('tecnico_id' => $tecnico_id));

                redirect(('tecnicos'));
            } else {

                //mostrar o nome do tecnico que está sendo atualizado.
                $tecnico = $this->core_model->get_by_id('tecnicos', array('tecnico_id' => $tecnico_id));
                //erro de validação
                $data = array(
                    'titulo' => 'Atualizar cadastro do tecnico ' . $tecnico->tecnico_nome_completo,
                    'scripts' => array(
                        'vendor/mask/jquery.mask.min.js',
                        'vendor/mask/app.js',
                    ),
                    'tecnico' => $tecnico,
                );

                //echo '<pre>';
                //print_r($data['tecnico']);
                //exit();

                $this->load->view('layout/header', $data);
                $this->load->view('tecnicos/edit');
                $this->load->view('layout/footer');
            }
        }
    }

    public function check_tecnico_rg($tecnico_rg) {

        $tecnico_id = $this->input->post('tecnico_id');

        if ($this->core_model->get_by_id('tecnicos', array('tecnico_rg' => $tecnico_rg, 'tecnico_id !=' => $tecnico_id))) {

            $this->form_validation->set_message('check_tecnico_ie', 'Esta inscrição estadual já existe!');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function check_tecnico_email($tecnico_email) {

        $tecnico_id = $this->input->post('tecnico_id');

        if ($this->core_model->get_by_id('tecnicos', array('tecnico_email' => $tecnico_email, 'tecnico_id !=' => $tecnico_id))) {

            $this->form_validation->set_message('check_tecnico_email', 'Esse e-mail já existe!');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function check_tecnico_telefone($tecnico_telefone) {

        $tecnico_id = $this->input->post('tecnico_id');

        if ($this->core_model->get_by_id('tecnicos', array('tecnico_telefone' => $tecnico_telefone, 'tecnico_id !=' => $tecnico_id))) {

            $this->form_validation->set_message('check_tecnico_telefone', 'Esse telefone já existe!');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function check_tecnico_celular($tecnico_celular) {

        $tecnico_id = $this->input->post('tecnico_id');

        if ($this->core_model->get_by_id('tecnicos', array('tecnico_celular' => $tecnico_celular, 'tecnico_id !=' => $tecnico_id))) {

            $this->form_validation->set_message('check_tecnico_celular', 'Esse celular já existe!');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function valida_tecnico_cpf($cpf) {

        if ($this->input->post('tecnico_id')) {

            $tecnico_id = $this->input->post('tecnico_id');

            if ($this->core_model->get_by_id('tecnicos', array('tecnico_id !=' => $tecnico_id, 'tecnico_cpf' => $cpf))) {
                $this->form_validation->set_message('valida_tecnico_cpf', 'Este CPF já existe');
                return FALSE;
            }
        }

        $cpf = str_pad(preg_replace('/[^0-9]/', '', $cpf), 11, '0', STR_PAD_LEFT);

        // Verifica se nenhuma das sequências abaixo foi digitada, caso seja, retorna falso
        if (strlen($cpf) != 11 || $cpf == '00000000000' || $cpf == '11111111111' || $cpf == '22222222222' || $cpf == '33333333333' || $cpf == '44444444444' || $cpf == '55555555555' || $cpf == '66666666666' || $cpf == '77777777777' || $cpf == '88888888888' || $cpf == '99999999999') {

            $this->form_validation->set_message('valida_tecnico_cpf', 'Por favor digite um CPF válido');
            return FALSE;
        } else {
            // Calcula os números para verificar se o CPF é verdadeiro
            for ($t = 9; $t < 11; $t++) {
                for ($d = 0, $c = 0; $c < $t; $c++) {
                    //$d += $cpf{$c} * (($t + 1) - $c); // Para PHP com versão < 7.4
                    $d += $cpf[$c] * (($t + 1) - $c); //Para PHP com versão < 7.4
                }
                $d = ((10 * $d) % 11) % 10;
                if ($cpf[$c] != $d) {
                    $this->form_validation->set_message('valida_tecnico_cpf', 'Por favor digite um CPF válido');
                    return FALSE;
                }
            }
            return TRUE;
        }
    }

    public function del($tecnico_id = NULL) {
        if (!$tecnico_id || !$this->core_model->get_by_id('tecnicos', array('tecnico_id' => $tecnico_id))) {

            $this->session->set_flashdata('error', 'Tecnico não encontrado!');
            redirect('tecnicos');
        } else {

            $this->core_model->delete('tecnicos', array('tecnico_id' => $tecnico_id));
            redirect('tecnicos');
        }
    }

}

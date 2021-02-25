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
            'styles' => array('vendor/datatables/dataTables.bootstrap4.min.css'),
            'scripts' => array(
                'vendor/datatables/app.js',
                'vendor/datatables/jquery.dataTables.min.js',
                'vendor/datatables/dataTables.bootstrap4.min.js',
                'vendor/mask/jquery.mask.min.js',
                'vendor/mask/app.js',
            ),
            'produtos' => $this->produtos_model->get_all(),
        );

        $this->load->view('layout/header', $data);
        $this->load->view('produtos/index');
        $this->load->view('layout/footer');
    }

    public function add() {

        $this->form_validation->set_rules('produto_nome', '', 'trim|required|min_length[4]|max_length[45]');
        $this->form_validation->set_rules('produto_descricao', '', 'trim|required|min_length[4]|max_length[145]');
        $this->form_validation->set_rules('produto_codigo_original', '', 'trim|required|min_length[4]|max_length[45]|is_unique[produtos.produto_codigo_original]');
        $this->form_validation->set_rules('produto_unidade', 'Unidade de medida', 'trim|required|min_length[2]|max_length[8]');
        $this->form_validation->set_rules('produto_preco_custo', 'Preço de custo', 'trim|required|max_length[45]');
        $this->form_validation->set_rules('produto_preco_venda', 'Preço de venda', 'trim|required|max_length[45]|callback_check_produto_preco_venda');
        $this->form_validation->set_rules('produto_estoque_minimo', 'Estoque mínimo', 'trim|required|max_length[10]');
        $this->form_validation->set_rules('produto_qtde_estoque', 'Quantidade em estoque', 'trim|required|max_length[10]');
        $this->form_validation->set_rules('produto_ncm', 'Produto NCM', 'trim|min_length[4]|required|max_length[15]');
        $this->form_validation->set_rules('produto_obs', 'Observação', 'trim|max_length[500]');

        if ($this->form_validation->run()) {

            $data = elements(
                    array(
                        'produto_codigo',
                        'produto_codigo_barras',
                        'produto_codigo_original',
                        'produto_nome',
                        'produto_descricao',
                        'produto_id',
                        'produto_marca_id',
                        'produto_categoria_id',
                        'produto_fornecedor_id',
                        'produto_unidade',
                        'produto_preco_custo',
                        'produto_preco_venda',
                        'produto_estoque_minimo',
                        'produto_qtde_estoque',
                        'produto_ncm',
                        'produto_ativo',
                        'produto_obs',
                    ), $this->input->post()
            );

            $data = html_escape($data);

            $this->core_model->insert('produtos', $data);

            redirect(('produtos'));
        } else {
            //erro de validação
            $data = array(
                'titulo' => 'Cadastrar novo produto ',
                'scripts' => array(
                    'vendor/mask/jquery.mask.min.js',
                    'vendor/mask/app.js',
                ),
                'produto_codigo' => $this->core_model->generate_unique_code('produtos', 'numeric', 8, 'produto_codigo'),
                'produto_codigo_barras' => $this->core_model->generate_unique_code('produtos', 'numeric', 25, 'produto_codigo_barras'),
                'marcas' => $this->core_model->get_all('marcas', array('marca_ativa' => 1)),
                'categorias' => $this->core_model->get_all('categorias', array('categoria_ativa' => 1)),
                'fornecedores' => $this->core_model->get_all('fornecedores', array('fornecedor_ativo' => 1)),
            );

            $this->load->view('layout/header', $data);
            $this->load->view('produtos/add');
            $this->load->view('layout/footer');
        }
    }

    public function edit($produto_id = NULL) {

        if (!$produto_id || !$this->core_model->get_by_id('produtos', array('produto_id' => $produto_id))) {
            $this->session->set_flashdata('error', 'Produto não encontrado.');
            redirect('produtos');
        } else {

            $this->form_validation->set_rules('produto_nome', '', 'trim|required|min_length[4]|max_length[45]');
            $this->form_validation->set_rules('produto_descricao', '', 'trim|required|min_length[4]|max_length[145]');
            $this->form_validation->set_rules('produto_codigo_original', '', 'trim|required|min_length[4]|max_length[45]|callback_check_produto_codigo_original');
            $this->form_validation->set_rules('produto_unidade', 'Unidade de medida', 'trim|required|min_length[2]|max_length[8]');
            $this->form_validation->set_rules('produto_preco_custo', 'Preço de custo', 'trim|required|max_length[45]');
            $this->form_validation->set_rules('produto_preco_venda', 'Preço de venda', 'trim|required|max_length[45]|callback_check_produto_preco_venda');
            $this->form_validation->set_rules('produto_estoque_minimo', 'Estoque mínimo', 'trim|required|max_length[10]');
            $this->form_validation->set_rules('produto_qtde_estoque', 'Quantidade em estoque', 'trim|required|max_length[10]');
            $this->form_validation->set_rules('produto_ncm', 'Produto NCM', 'trim|min_length[4]|required|max_length[15]');
            $this->form_validation->set_rules('produto_obs', 'Observação', 'trim|max_length[500]');

            if ($this->form_validation->run()) {

                $data = elements(
                        array(
                            'produto_codigo',
                            'produto_codigo_original',
                            'produto_nome',
                            'produto_descricao',
                            'produto_id',
                            'produto_marca_id',
                            'produto_categoria_id',
                            'produto_fornecedor_id',
                            'produto_unidade',
                            'produto_preco_custo',
                            'produto_preco_venda',
                            'produto_estoque_minimo',
                            'produto_qtde_estoque',
                            'produto_ncm',
                            'produto_ativo',
                            'produto_obs',
                        ), $this->input->post()
                );

                $data = html_escape($data);

                $this->core_model->update('produtos', $data, array('produto_id' => $produto_id));

                redirect(('produtos'));
            } else {
                //Erro de validação
                //mostrar o nome do Fornecedor que está sendo atualizado.
                $produto = $this->core_model->get_by_id('produtos', array('produto_id' => $produto_id));

                $data = array(
                    'titulo' => 'Atualizar cadastro do produto ' . $produto->produto_nome,
                    'scripts' => array(
                        'vendor/mask/jquery.mask.min.js',
                        'vendor/mask/app.js',
                    ),
                    'produto' => $this->core_model->get_by_id('produtos', array('produto_id' => $produto_id)),
                    'marcas' => $this->core_model->get_all('marcas', array('marca_ativa' => 1)),
                    'categorias' => $this->core_model->get_all('categorias', array('categoria_ativa' => 1)),
                    'fornecedores' => $this->core_model->get_all('fornecedores', array('fornecedor_ativo' => 1)),
                );

                $this->load->view('layout/header', $data);
                $this->load->view('produtos/edit');
                $this->load->view('layout/footer');
            }
        }
    }

    public function check_produto_codigo_original($produto_codigo_original) {

        $produto_id = $this->input->post('produto_id');

        if ($this->core_model->get_by_id('produtos', array('produto_codigo_original' => $produto_codigo_original, 'produto_id !=' => $produto_id))) {
            $this->form_validation->set_message('check_produto_codigo_original', 'Esse código já existe, escolha outro código.');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function check_produto_preco_venda($produto_preco_venda) {

        $produto_preco_custo = $this->input->post('produto_preco_custo');

        $produto_preco_custo = str_replace('.', '', $produto_preco_custo);
        $produto_preco_venda = str_replace('.', '', $produto_preco_venda);

        $produto_preco_custo = str_replace(',', '', $produto_preco_custo);
        $produto_preco_venda = str_replace(',', '', $produto_preco_venda);

        if ($produto_preco_custo >= $produto_preco_venda) {

            $this->form_validation->set_message('check_produto_preco_venda', 'Preço de venda deve ser maior que o preço de custo.');
            return FALSE;
        } else {

            return TRUE;
        }
    }

    public function del($produto_id = NULL) {
        if (!$produto_id || !$this->core_model->get_by_id('produtos', array('produto_id' => $produto_id))) {

            $this->session->set_flashdata('error', 'Produto não encontrado!');
            redirect('produtos');
        } else {

            $this->core_model->delete('produtos', array('produto_id' => $produto_id));
            redirect('produtos');
        }
    }

}

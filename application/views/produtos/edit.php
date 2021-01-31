

<?php $this->load->view('layout/sidebar'); ?>

<!-- Main Content -->
<div id="content">

    <?php $this->load->view('layout/navbar'); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('produtos'); ?>">Produtos</a></li>
                <li class="breadcrumb-item"><a href="#"><?php echo $titulo; ?></a></li>
            </ol>					
        </nav>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">

                <form class="user" method="POST" name="form_edit">

                    <p><strong><i class="fas fa-clock">&nbsp; &nbsp; Última atualização: </i>&nbsp;</strong><?php echo formata_data_banco_com_hora($produto->produto_data_alteracao) ?></p>

                    <fieldset class="mt-4 border p-2">
                        <legend class="font-small"><i class="fab fa-product-hunt"></i>&nbsp;Dados do Produtos</legend>

                        <div class="form-group row mb-3">
                            
                            <div class="col-md-6 mb-2">
                                <label>Nome do Produto</label>
                                <input type="text" class="form-control form-control-user" name="produto_nome" placeholder="Nome do Produto" value="<?php echo $produto->produto_nome; ?>">
                                <?php echo form_error('produto_nome', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                            <div class="col-md-2 mb-2">
                                <label>Código Interno</label>
                                <input type="text" class="form-control form-control-user" name="produto_codigo" value="<?php echo $produto->produto_codigo; ?>" readonly="">
                                <?php echo form_error('produto_codigo', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <div class="col-md-2 mb-2">
                                <label>Código Original</label>
                                <input type="text" class="form-control form-control-user" name="produto_codigo_original" placeholder="Código Original" value="<?php echo $produto->produto_codigo_original; ?>">
                                <?php echo form_error('produto_codigo_original', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <div class="col-md-2 mb-2">
                                <label>Valor de Venda</label>
                                <input type="text" class="form-control form-control-user money" name="produto_preco_venda" placeholder="Valor de Venda" value="<?php echo $produto->produto_preco_venda; ?>">
                                <?php echo form_error('produto_preco_venda', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                             
                        </div>
                        
                        <div class="form-group row mb-3">
                            
                            <div class="col-md-4 mb-2">
                                <label>Categoria</label>
                                <select class="custom-select" name="produto_categoria_id">
                                    <?php foreach ($categorias as $categoria): ?>
                                    <option title="<?php echo ($categoria->categoria_ativa == 0 ? 'Categoria Desativada' : 'Categoria Ativa'); ?>" value="<?php echo $categoria->categoria_id ?>" <?php echo ($categoria->categoria_id == $produto->produto_categoria_id ? 'selected' : '') ?> <?php echo ($categoria->categoria_ativa == 0 ? 'disabled' : '') ?>><?php echo ($categoria->categoria_ativa == 0 ? $categoria->categoria_nome .'&nbsp;->&nbsp;Inativa' : $categoria->categoria_nome) ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?php echo form_error('categoria_nome', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                            <div class="col-md-4 mb-2">
                                <label>Marca</label>
                                <select class="custom-select" name="produto_marca_id">
                                    <?php foreach ($marcas as $marca): ?>
                                    <option title="<?php echo ($marca->marca_ativa == 0 ? 'Marca Desativada' : 'Marca Ativa'); ?>" value="<?php echo $marca->marca_id ?>" <?php echo ($marca->marca_id == $produto->produto_marca_id ? 'selected' : '') ?> <?php echo ($marca->marca_ativa == 0 ? 'disabled' : '') ?>><?php echo ($marca->marca_ativa == 0 ? $marca->marca_nome .'&nbsp;->&nbsp;Inativa' : $marca->marca_nome) ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?php echo form_error('marca_nome', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <div class="col-md-4 mb-2">
                                <label>Fornecedor</label>
                                <select class="custom-select" name="fornecedor_ativo">
                                    <?php foreach ($fornecedores as $fornecedor): ?>
                                    <option title="<?php echo ($fornecedor->fornecedor_ativo == 0 ? 'Fornecedor Desativado' : 'Fornecedor Ativo'); ?>" value="<?php echo $fornecedor->fornecedor_id ?>" <?php echo ($fornecedor->fornecedor_id == $produto->produto_fornecedor_id ? 'selected' : '') ?> <?php echo ($fornecedor->fornecedor_ativo == 0 ? 'disabled' : '') ?>><?php echo ($fornecedor->fornecedor_ativo == 0 ? $fornecedor->fornecedor_nome_fantasia .'&nbsp;->&nbsp;Inativo' : $fornecedor->fornecedor_nome_fantasia) ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?php echo form_error('fornecedor_nome_fantasia', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            
                        </div>
                        
                        <div class="form_goup row mb-3">
                            <div class="col-md-2 mb-2">
                                <label>Status</label>
                                <select class="custom-select" name="produto_ativo">
                                    <option value="0"<?php echo ($produto->produto_ativo == 0) ? 'selected' : ''; ?>>Inativo</option>
                                    <option value="1"<?php echo ($produto->produto_ativo == 1) ? 'selected' : ''; ?>>Ativo</option>
                                </select>
                            </div>
                            <div class="col-md-10 mb-2">
                                <label>Descrição</label>
                                <textarea type="text" class="form-control form-control-user" name="produto_descricao" placeholder="Descrição "><?php echo $produto->produto_descricao; ?></textarea>
                                <?php echo form_error('produto_descricao', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                        </div>
                    </fieldset>

                    <div class="form-group row">
                        <input type="hidden" name="produto_id" value="<?php echo $produto->produto_id; ?>"/>
                    </div>

                    <button title="Salvar" type="submit" class="btn btn-outline-success btn-sm">Salvar</button>
                    <a title="Cancelar" href="<?php echo base_url($this->router->fetch_class()); ?>" class="btn btn-outline-danger btn-sm ml-2"><i class="fas fa-power-off"></i>&nbsp;Cancelar</a>
                </form>
            </div>



        </div><!-- end card-body-->
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->



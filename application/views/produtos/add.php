

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

                <form class="user" method="POST" name="form_add">
                    
                    <fieldset class="mt-4 border p-2">
                        <legend class="font-small"><i class="fab fa-product-hunt"></i>&nbsp;Dados do Produtos</legend>

                        <div class="form-group row mb-3">

                            <div class="col-md-3 mb-2">
                                <label>Nome do Produto</label>
                                <input type="text" class="form-control form-control-user" name="produto_nome" placeholder="Nome do Produto" value="<?php echo set_value('produto_nome'); ?>">
                                <?php echo form_error('produto_nome', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <div class="col-md-5 mb-2">
                                <label>Descrição do Produto</label>
                                <input type="text" class="form-control form-control-user" name="produto_descricao" placeholder="Descrição do Produto" value="<?php echo set_value('produto_descricao'); ?>">
                                <?php echo form_error('produto_descricao', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                            <div class="col-md-2 mb-2">
                                <label>Código Interno</label>
                                <input type="text" class="form-control form-control-user" name="produto_codigo" value="<?php echo $produto_codigo; ?>" readonly="">
                                <?php echo form_error('produto_codigo', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <div class="col-md-2 mb-2">
                                <label>Código Original</label>
                                <input type="text" class="form-control form-control-user" name="produto_codigo_original" placeholder="Código Original" value="<?php echo set_value('produto_codigo_original'); ?>">
                                <?php echo form_error('produto_codigo_original', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                        </div>

                        <div class="form-group row mb-3">

                            <div class="col-md-3 mb-2">
                                <label>Categoria</label>
                                <select class="custom-select" name="produto_categoria_id">
                                    <?php foreach ($categorias as $categoria): ?>
                                        <option  value="<?php echo $categoria->categoria_id ?>" ><?php echo $categoria->categoria_nome; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?php echo form_error('categoria_nome', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                            <div class="col-md-2 mb-2">
                                <label>Marca</label>
                                <select class="custom-select" name="produto_marca_id">
                                    <?php foreach ($marcas as $marca): ?>
                                        <option value="<?php echo $marca->marca_id ?>" ><?php echo $marca->marca_nome; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?php echo form_error('marca_nome', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <div class="col-md-4 mb-2">
                                <label>Fornecedor</label>
                                <select class="custom-select" name="produto_fornecedor_id">
                                    <?php foreach ($fornecedores as $fornecedor): ?>
                                        <option value="<?php echo $fornecedor->fornecedor_id ?>" ><?php echo $fornecedor->fornecedor_nome_fantasia; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?php echo form_error('fornecedor_nome_fantasia', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                            <div class="col-md-3 mb-2">
                                <label>Código de Barra</label>
                                <input type="text" class="form-control form-control-user" name="produto_codigo_barras" placeholder="Código de Barra" value="<?php echo $produto_codigo_barras; ?>" readonly="">
                                <?php echo form_error('produto_codigo_barras', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                        </div>
                    </fieldset>
                    <fieldset class="mt-4 border p-2">

                        <legend class="font-small"><i class="fas fa-funnel-dollar"></i>&nbsp;Precificação e Estoque</legend>

                        <div class="form-group row mb-3">

                            <div class="col-md-3 mb-2">
                                <label>Estoque Disponível</label>
                                <input type="text" class="form-control form-control-user" name="produto_qtde_estoque" value="<?php echo set_value('produto_qtde_estoque'); ?>">
                                <?php echo form_error('produto_qtde_estoque', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <div class="col-md-3 mb-2">
                                <label>Estoque Mínimo</label>
                                <input type="text" class="form-control form-control-user" name="produto_estoque_minimo" value="<?php echo set_value('produto_estoque_minimo'); ?>">
                                <?php echo form_error('produto_estoque_minimo', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <div class="col-md-3 mb-2">
                                <label>Valor de Compra</label>
                                <input type="text" class="form-control form-control-user money" name="produto_preco_custo" placeholder="Valor de Compra" value="<?php echo set_value('produto_preco_custo'); ?>">
                                <?php echo form_error('produto_preco_custo', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>                           
                            <div class="col-md-3 mb-2">
                                <label>Valor de Venda</label>
                                <input type="text" class="form-control form-control-user money" name="produto_preco_venda" placeholder="Valor de Venda" value="<?php echo set_value('produto_preco_venda'); ?>">
                                <?php echo form_error('produto_preco_venda', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                        </div>

                    </fieldset>

                    <fieldset class="mt-4 border p-2">

                        <legend class="font-small"><i class="fas fa-file-invoice-dollar"></i>&nbsp;Dados para Nota Fiscal</legend>

                        <div class="form_goup row mb-3">

                            <div class="col-md-4 mb-2">
                                <label>Unidade</label>
                                <input type="text" class="form-control form-control-user" name="produto_unidade" placeholder="Unidade do Produto" value="<?php echo set_value('produto_unidade'); ?>">
                                <?php echo form_error('produto_unidade', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                            <div class="col-md-4 mb-2">
                                <label>NCM</label>
                                <input type="text" class="form-control form-control-user" name="produto_ncm" placeholder="Código de NCM" value="<?php echo set_value('produto_ncm'); ?>">
                                <?php echo form_error('produto_ncm', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                            <div class="col-md-4 mb-2">
                                <label>Status</label>
                                <select class="custom-select" name="produto_ativo">
                                    <option value="0">Inativo</option>
                                    <option value="1">Ativo</option>
                                </select>
                            </div>
                            <div class="col-md-12 mb-2">
                                <label>Observação</label>
                                <textarea type="text" class="form-control form-control-user" name="produto_obs" placeholder="Descrição "><?php echo set_value('produto_obs'); ?></textarea>
                                <?php echo form_error('produto_obs', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                        </div>                            
                    </fieldset>

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



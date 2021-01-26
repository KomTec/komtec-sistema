

<?php $this->load->view('layout/sidebar'); ?>

<!-- Main Content -->
<div id="content">

    <?php $this->load->view('layout/navbar'); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('fornecedores'); ?>">Forncedores</a></li>
                <li class="breadcrumb-item"><a href="#"><?php echo $titulo; ?></a></li>
            </ol>					
        </nav>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">

                <form class="user" method="POST" name="form_add">

                    <?php if(isset($fornecedor)): ?>
                    <p><strong><i class="fas fa-clock">&nbsp; &nbsp; Última atualização: </i>&nbsp;</strong><?php echo formata_data_banco_com_hora($fornecedor->fornecedor_data_alteracao) ?></p>
                    <?php endif; ?>
                    
                    <fieldset class="mt-4 border p-2">
                        <legend class="font-small"><i class="fas fa-user-tag"></i>&nbsp;Dados Principais</legend>

                        <div class="form-group row mb-3">

                            <div class="col-md-6 mb-2">
                                <label>Razão Social</label>
                                <input type="text" class="form-control form-control-user" name="fornecedor_razao" placeholder="Razão Social" value="<?php echo set_value('fornecedor_razao'); ?>">
                                <?php echo form_error('fornecedor_razao', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label>Nome Fantasia</label>
                                <input type="text" class="form-control form-control-user-date" name="fornecedor_nome_fantasia" placeholder="Nome Fantasia " value="<?php echo set_value('fornecedor_nome_fantasia'); ?>">
                                <?php echo form_error('fornecedor_nome_fantasia', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>						
                        </div>
                        <div class="form-group row mb-3">

                            <div class="col-md-4 mb-2">
                                <label>CNPJ</label>
                                <input type="text" class="form-control form-control-user cnpj" name="fornecedor_cnpj" placeholder="CNPJ" value="<?php echo set_value('fornecedor_cnpj'); ?>">
                                <?php echo form_error('fornecedor_cnpj', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <div class="col-md-4 mb-2">
                                <label>Inscrição Estadual</label>
                                <input type="text" class="form-control form-control-user-date ie" name="fornecedor_ie" placeholder="Insc. Estadual " value="<?php echo set_value('fornecedor_ie'); ?>">
                                <?php echo form_error('fornecedor_ie', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <div class="col-md-4 mb-2">
                                <label>Telefone Fixo</label>
                                <input type="text" class="form-control form-control-user sp_celphones" name="fornecedor_telefone" placeholder="Telefone " value="<?php echo set_value('fornecedor_telefone'); ?>">
                                <?php echo form_error('fornecedor_telefone', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                        </div>                        
                        <div class="form-group row mb-3">
                            <div class="col-md-4 mb-2">
                                <label>Contato</label>
                                <input type="text" class="form-control form-control-user" name="fornecedor_contato" placeholder="Contato" value="<?php echo set_value('fornecedor_contato'); ?>">
                                <?php echo form_error('fornecedor_contato', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <div class="col-md-4 mb-2">
                                <label>Celular</label>
                                <input type="text" class="form-control form-control-user sp_celphones" name="fornecedor_celular" placeholder="Celular " value="<?php echo set_value('fornecedor_celular'); ?>">
                                <?php echo form_error('fornecedor_celular', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <div class="col-md-4 mb-2">
                                <label>E-mail</label>
                                <input type="email" class="form-control form-control-user" name="fornecedor_email" placeholder="E-mail " value="<?php echo set_value('fornecedor_email'); ?>">
                                <?php echo form_error('fornecedor_email', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset class="mt-4 border p-2">

                        <legend class="font-small"><i class="fas fa-map-marker-alt"></i></i>&nbsp;Endereço</legend>
                        <div class="form-group row mb-3">
                            <div class="col-md-2 mb-2">
                                <label>CEP</label>
                                <input type="text" class="form-control form-control-user cep" name="fornecedor_cep" placeholder="CEP" value="<?php echo set_value('fornecedor_cep'); ?>">
                                <?php echo form_error('fornecedor_cep', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <div class="col-md-5 mb-2">
                                <label>Logradouro</label>
                                <input type="text" class="form-control form-control-user-date" name="fornecedor_endereco" placeholder="Logradouro " value="<?php echo set_value('fornecedor_endereco'); ?>">
                                <?php echo form_error('fornecedor_numero_endereco', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <div class="col-md-1 mb-2">
                                <label>Número</label>
                                <input type="text" class="form-control form-control-user-date" name="fornecedor_numero_endereco" placeholder=" " value="<?php echo set_value('fornecedor_numero_endereco'); ?>">
                                <?php echo form_error('fornecedor_numero_endereco', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <div class="col-md-4 mb-2">
                                <label>Complemento</label>
                                <input type="text" class="form-control form-control-user-date" name="fornecedor_complemento" placeholder="Complemento " value="<?php echo set_value('fornecedor_complemento'); ?>">
                                <?php echo form_error('fornecedor_complemento', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <div class="col-md-6 mb-2">
                                <label>Bairro</label>
                                <input type="text" class="form-control form-control-user" name="fornecedor_bairro" placeholder="Bairro" value="<?php echo set_value('fornecedor_bairro'); ?>">
                                <?php echo form_error('fornecedor_bairro', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <div class="col-md-5 mb-2">
                                <label>Cidade</label>
                                <input type="text" class="form-control form-control-user" name="fornecedor_cidade" placeholder="Cidade" value="<?php echo set_value('fornecedor_cidade'); ?>">
                                <?php echo form_error('fornecedor_cidade', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <div class="col-md-1 mb-2">
                                <label>UF</label>
                                <input type="text" class="form-control form-control-user-date" name="fornecedor_estado" placeholder="UF " value="<?php echo set_value('fornecedor_estado'); ?>">
                                <?php echo form_error('fornecedor_estado', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            
                        </div>

                    </fieldset>
                    <fieldset class="mt-4 border p-2">

                        <legend class="font-small"><i class="fas fa-tools"></i></i>&nbsp;Configurações</legend>

                        <div class="form-group row">
                            <div class="col-md-2 mb-2">
                                <label>Status</label>
                                <select class="custom-select" name="fornecedor_ativo">
                                    <option value="0">Inativo</option>
                                    <option value="1">Ativo</option>
                                </select>
                        </div>	
                            <div class="col-md-10">
                                <label>Observações do Fornecedor</label>
                                <textarea class="form-control form-control-user" name="fornecedor_obs" placeholder="Observações"><?php echo set_value('fornecedor_obs'); ?></textarea>
                                <?php echo form_error('fornecedor_obs', '<small class="form-text text-danger">', '</small>'); ?>
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



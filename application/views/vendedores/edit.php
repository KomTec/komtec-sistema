

<?php $this->load->view('layout/sidebar'); ?>

<!-- Main Content -->
<div id="content">

    <?php $this->load->view('layout/navbar'); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('vendedores'); ?>">Vendedores</a></li>
                <li class="breadcrumb-item"><a href="#"><?php echo $titulo; ?></a></li>
            </ol>					
        </nav>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">

                <form class="user" method="POST" name="form_edit">

                    <p><strong><i class="fas fa-clock">&nbsp; &nbsp; Última atualização: </i>&nbsp;</strong><?php echo formata_data_banco_com_hora($vendedor->vendedor_data_alteracao) ?></p>

                    <fieldset class="mt-4 border p-2">
                        <legend class="font-small"><i class="fas fa-user-secret"></i>&nbsp;Dados Pessoais</legend>

                        <div class="form-group row mb-3">

                            <div class="col-md-6 mb-2">
                                <label>Nome completo</label>
                                <input type="text" class="form-control form-control-user" name="vendedor_nome_completo" placeholder="Nome completo" value="<?php echo $vendedor->vendedor_nome_completo; ?>">
                                <?php echo form_error('vendedor_nome_completo', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <div class="col-md-3 mb-2">
                                <label>CPF</label>
                                <input type="text" class="form-control form-control-user cnpj" name="vendedor_cpf" placeholder="CPF" value="<?php echo $vendedor->vendedor_cpf; ?>">
                                <?php echo form_error('vendedor_cpf', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <div class="col-md-3 mb-2">
                                <label>RG</label>
                                <input type="text" class="form-control form-control-user-date ie" name="vendedor_rg" placeholder="RG " value="<?php echo $vendedor->vendedor_rg; ?>">
                                <?php echo form_error('vendedor_rg', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>                           
                        </div>                        
                        <div class="form-group row mb-3">  
                             <div class="col-md-4 mb-2">
                                <label>Telefone Fixo</label>
                                <input type="text" class="form-control form-control-user sp_celphones" name="vendedor_telefone" placeholder="Telefone " value="<?php echo $vendedor->vendedor_telefone; ?>">
                                <?php echo form_error('vendedor_telefone', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <div class="col-md-4 mb-2">
                                <label>Celular</label>
                                <input type="text" class="form-control form-control-user sp_celphones" name="vendedor_celular" placeholder="Celular " value="<?php echo $vendedor->vendedor_celular; ?>">
                                <?php echo form_error('vendedor_celular', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <div class="col-md-4 mb-2">
                                <label>E-mail</label>
                                <input type="email" class="form-control form-control-user" name="vendedor_email" placeholder="E-mail " value="<?php echo $vendedor->vendedor_email; ?>">
                                <?php echo form_error('vendedor_email', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset class="mt-4 border p-2">

                        <legend class="font-small"><i class="fas fa-map-marker-alt"></i></i>&nbsp;Endereço</legend>
                        <div class="form-group row mb-3">
                            <div class="col-md-2 mb-2">
                                <label>CEP</label>
                                <input type="text" class="form-control form-control-user cep" name="vendedor_cep" placeholder="CEP" value="<?php echo $vendedor->vendedor_cep; ?>">
                                <?php echo form_error('vendedor_cep', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <div class="col-md-5 mb-2">
                                <label>Logradouro</label>
                                <input type="text" class="form-control form-control-user-date" name="vendedor_endereco" placeholder="Logradouro " value="<?php echo $vendedor->vendedor_endereco; ?>">
                                <?php echo form_error('vendedor_numero_endereco', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <div class="col-md-1 mb-2">
                                <label>Número</label>
                                <input type="text" class="form-control form-control-user-date" name="vendedor_numero_endereco" placeholder=" " value="<?php echo $vendedor->vendedor_numero_endereco; ?>">
                                <?php echo form_error('vendedor_numero_endereco', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <div class="col-md-4 mb-2">
                                <label>Complemento</label>
                                <input type="text" class="form-control form-control-user-date" name="vendedor_complemento" placeholder="Complemento " value="<?php echo $vendedor->vendedor_complemento; ?>">
                                <?php echo form_error('vendedor_complemento', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <div class="col-md-6 mb-2">
                                <label>Bairro</label>
                                <input type="text" class="form-control form-control-user" name="vendedor_bairro" placeholder="Bairro" value="<?php echo $vendedor->vendedor_bairro; ?>">
                                <?php echo form_error('vendedor_bairro', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <div class="col-md-5 mb-2">
                                <label>Cidade</label>
                                <input type="text" class="form-control form-control-user" name="vendedor_cidade" placeholder="Cidade" value="<?php echo $vendedor->vendedor_cidade; ?>">
                                <?php echo form_error('vendedor_cidade', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <div class="col-md-1 mb-2">
                                <label>UF</label>
                                <input type="text" class="form-control form-control-user-date" name="vendedor_estado" placeholder="UF " value="<?php echo $vendedor->vendedor_estado; ?>">
                                <?php echo form_error('vendedor_estado', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            
                        </div>

                    </fieldset>
                    <fieldset class="mt-4 border p-2">

                        <legend class="font-small"><i class="fas fa-tools"></i></i>&nbsp;Configurações</legend>

                        <div class="form-group row">
                            <div class="col-md-3 mb-2">
                                <label>Status</label>
                                <select class="custom-select" name="vendedor_ativo">
                                    <option value="0"<?php echo ($vendedor->vendedor_ativo == 0) ? 'selected' : ''; ?>>Inativo</option>
                                    <option value="1"<?php echo ($vendedor->vendedor_ativo == 1) ? 'selected' : ''; ?>>Ativo</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-2">
                                <label>Matrícula</label>
                                <input type="text" class="form-control form-control-user" name="vendedor_codigo" placeholder="Matrícula " value="<?php echo $vendedor->vendedor_codigo; ?>" readonly="">
                                <?php echo form_error('vendedor_codigo', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <div class="col-md-6">
                                <label>Observações do Cliente</label>
                                <textarea class="form-control form-control-user" name="vendedor_obs" placeholder="Observações"><?php echo $vendedor->vendedor_obs; ?></textarea>
                                <?php echo form_error('vendedor_obs', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                        </div>

                    </fieldset>

                    <div class="form-group row">
                        <input type="hidden" name="vendedor_id" value="<?php echo $vendedor->vendedor_id; ?>"/>
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



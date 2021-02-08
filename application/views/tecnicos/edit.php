

<?php $this->load->view('layout/sidebar'); ?>

<!-- Main Content -->
<div id="content">

    <?php $this->load->view('layout/navbar'); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('tecnicos'); ?>">Tecnicos</a></li>
                <li class="breadcrumb-item"><a href="#"><?php echo $titulo; ?></a></li>
            </ol>					
        </nav>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">

                <form class="user" method="POST" name="form_edit">

                    <p><strong><i class="fas fa-clock">&nbsp; &nbsp; Última atualização: </i>&nbsp;</strong><?php echo formata_data_banco_com_hora($tecnico->tecnico_data_alteracao) ?></p>

                    <fieldset class="mt-4 border p-2">
                        <legend class="font-small"><i class="fas fa-user-secret"></i>&nbsp;Dados do Técnico</legend>

                        <div class="form-group row mb-3">

                            <div class="col-md-6 mb-2">
                                <label>Nome completo</label>
                                <input type="text" class="form-control form-control-user" name="tecnico_nome_completo" placeholder="Nome completo" value="<?php echo $tecnico->tecnico_nome_completo; ?>">
                                <?php echo form_error('tecnico_nome_completo', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <div class="col-md-3 mb-2">
                                <label>CPF</label>
                                <input type="text" class="form-control form-control-user cnpj" name="tecnico_cpf" placeholder="CPF" value="<?php echo $tecnico->tecnico_cpf; ?>">
                                <?php echo form_error('tecnico_cpf', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <div class="col-md-3 mb-2">
                                <label>RG</label>
                                <input type="text" class="form-control form-control-user-date ie" name="tecnico_rg" placeholder="RG " value="<?php echo $tecnico->tecnico_rg; ?>">
                                <?php echo form_error('tecnico_rg', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>                           
                        </div>                        
                        <div class="form-group row mb-3">  
                             <div class="col-md-4 mb-2">
                                <label>Telefone Fixo</label>
                                <input type="text" class="form-control form-control-user sp_celphones" name="tecnico_telefone" placeholder="Telefone " value="<?php echo $tecnico->tecnico_telefone; ?>">
                                <?php echo form_error('tecnico_telefone', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <div class="col-md-4 mb-2">
                                <label>Celular</label>
                                <input type="text" class="form-control form-control-user sp_celphones" name="tecnico_celular" placeholder="Celular " value="<?php echo $tecnico->tecnico_celular; ?>">
                                <?php echo form_error('tecnico_celular', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <div class="col-md-4 mb-2">
                                <label>E-mail</label>
                                <input type="email" class="form-control form-control-user" name="tecnico_email" placeholder="E-mail " value="<?php echo $tecnico->tecnico_email; ?>">
                                <?php echo form_error('tecnico_email', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset class="mt-4 border p-2">

                        <legend class="font-small"><i class="fas fa-map-marker-alt"></i></i>&nbsp;Endereço</legend>
                        <div class="form-group row mb-3">
                            <div class="col-md-2 mb-2">
                                <label>CEP</label>
                                <input type="text" class="form-control form-control-user cep" name="tecnico_cep" placeholder="CEP" value="<?php echo $tecnico->tecnico_cep; ?>">
                                <?php echo form_error('tecnico_cep', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <div class="col-md-5 mb-2">
                                <label>Logradouro</label>
                                <input type="text" class="form-control form-control-user-date" name="tecnico_endereco" placeholder="Logradouro " value="<?php echo $tecnico->tecnico_endereco; ?>">
                                <?php echo form_error('tecnico_numero_endereco', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <div class="col-md-1 mb-2">
                                <label>Número</label>
                                <input type="text" class="form-control form-control-user-date" name="tecnico_numero_endereco" placeholder=" " value="<?php echo $tecnico->tecnico_numero_endereco; ?>">
                                <?php echo form_error('tecnico_numero_endereco', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <div class="col-md-4 mb-2">
                                <label>Complemento</label>
                                <input type="text" class="form-control form-control-user-date" name="tecnico_complemento" placeholder="Complemento " value="<?php echo $tecnico->tecnico_complemento; ?>">
                                <?php echo form_error('tecnico_complemento', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <div class="col-md-6 mb-2">
                                <label>Bairro</label>
                                <input type="text" class="form-control form-control-user" name="tecnico_bairro" placeholder="Bairro" value="<?php echo $tecnico->tecnico_bairro; ?>">
                                <?php echo form_error('tecnico_bairro', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <div class="col-md-5 mb-2">
                                <label>Cidade</label>
                                <input type="text" class="form-control form-control-user" name="tecnico_cidade" placeholder="Cidade" value="<?php echo $tecnico->tecnico_cidade; ?>">
                                <?php echo form_error('tecnico_cidade', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <div class="col-md-1 mb-2">
                                <label>UF</label>
                                <input type="text" class="form-control form-control-user-date" name="tecnico_estado" placeholder="UF " value="<?php echo $tecnico->tecnico_estado; ?>">
                                <?php echo form_error('tecnico_estado', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            
                        </div>

                    </fieldset>
                    <fieldset class="mt-4 border p-2">

                        <legend class="font-small"><i class="fas fa-tools"></i></i>&nbsp;Configurações</legend>

                        <div class="form-group row">
                            <div class="col-md-3 mb-2">
                                <label>Status</label>
                                <select class="custom-select" name="tecnico_ativo">
                                    <option value="0"<?php echo ($tecnico->tecnico_ativo == 0) ? 'selected' : ''; ?>>Inativo</option>
                                    <option value="1"<?php echo ($tecnico->tecnico_ativo == 1) ? 'selected' : ''; ?>>Ativo</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-2">
                                <label>Matrícula</label>
                                <input type="text" class="form-control form-control-user" name="tecnico_codigo" placeholder="Matrícula " value="<?php echo $tecnico->tecnico_codigo; ?>" readonly="">
                                <?php echo form_error('tecnico_codigo', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <div class="col-md-6">
                                <label>Observações do Técnico</label>
                                <textarea class="form-control form-control-user" name="tecnico_obs" placeholder="Observações"><?php echo $tecnico->tecnico_obs; ?></textarea>
                                <?php echo form_error('tecnico_obs', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                        </div>

                    </fieldset>

                    <div class="form-group row">
                        <input type="hidden" name="tecnico_id" value="<?php echo $tecnico->tecnico_id; ?>"/>
                    </div>

                    <button title="Salvar" type="submit" class="btn btn-outline-success btn-sm">Salvar</button>
                    <a title="Cancelar" href="<?php echo base_url($this->router->fetch_class()); ?>" class="btn btn-outline-danger btn-sm ml-2"><i class="fas fa-undo-alt"></i>&nbsp;Voltar</a>
                </form>
            </div>



        </div><!-- end card-body-->
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->



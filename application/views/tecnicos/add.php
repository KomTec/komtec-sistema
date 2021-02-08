

<?php $this->load->view('layout/sidebar'); ?>

<!-- Main Content -->
<div id="content">

    <?php $this->load->view('layout/navbar'); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('tecnicos'); ?>">Técnico</a></li>
                <li class="breadcrumb-item"><a href="#"><?php echo $titulo; ?></a></li>
            </ol>					
        </nav>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">

                <form class="user" method="POST" name="form_add">

                    <?php if (isset($tecnico)): ?>
                        <p><strong><i class="fas fa-clock">&nbsp; &nbsp; Última atualização: </i>&nbsp;</strong><?php echo formata_data_banco_com_hora($tecnico->tecnico_data_alteracao) ?></p>
                    <?php endif; ?>

                    <fieldset class="mt-4 border p-2">
                        <legend class="font-small"><i class="fas fa-user-tag"></i>&nbsp;Dados Principais</legend>

                        <div class="form-group row mb-3">

                            <div class="col-md-6 mb-2">
                                <label>Nome completo</label>
                                <input type="text" class="form-control form-control-user" name="tecnico_nome_completo" placeholder="Nome completo" value="<?php echo set_value('tecnico_nome_completo'); ?>">
                                <?php echo form_error('tecnico_nome_completo', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <div class="col-md-3 mb-2">
                                <label>CPF</label>
                                <input type="text" class="form-control form-control-user cpf" name="tecnico_cpf" placeholder="CPF" value="<?php echo set_value('tecnico_cpf'); ?>">
                                <?php echo form_error('tecnico_cpf', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <div class="col-md-3 mb-2">
                                <label>RG</label>
                                <input type="text" class="form-control form-control-user-date ie" name="tecnico_rg" placeholder="RG " value="<?php echo set_value('tecnico_rg'); ?>">
                                <?php echo form_error('tecnico_rg', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>  						
                        </div>
                        <div class="form-group row mb-3">  
                            <div class="col-md-4 mb-2">
                                <label>Telefone Fixo</label>
                                <input type="text" class="form-control form-control-user sp_celphones" name="tecnico_telefone" placeholder="Telefone " value="<?php echo set_value('tecnico_telefone'); ?>">
                                <?php echo form_error('tecnico_telefone', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <div class="col-md-4 mb-2">
                                <label>Celular</label>
                                <input type="text" class="form-control form-control-user sp_celphones" name="tecnico_celular" placeholder="Celular " value="<?php echo set_value('tecnico_celular'); ?>">
                                <?php echo form_error('tecnico_celular', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <div class="col-md-4 mb-2">
                                <label>E-mail</label>
                                <input type="email" class="form-control form-control-user" name="tecnico_email" placeholder="E-mail " value="<?php echo set_value('tecnico_email'); ?>">
                                <?php echo form_error('tecnico_email', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                        </div>                       

                    </fieldset>

                    <fieldset class="mt-4 border p-2">

                        <legend class="font-small"><i class="fas fa-map-marker-alt"></i></i>&nbsp;Endereço</legend>
                        <div class="form-group row mb-3">
                            <div class="col-md-2 mb-2">
                                <label>CEP</label>
                                <input type="text" class="form-control form-control-user cep" name="tecnico_cep" placeholder="CEP" value="<?php echo set_value('tecnico_cep'); ?>">
                                <?php echo form_error('tecnico_cep', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <div class="col-md-5 mb-2">
                                <label>Logradouro</label>
                                <input type="text" class="form-control form-control-user-date" name="tecnico_endereco" placeholder="Logradouro " value="<?php echo set_value('tecnico_endereco'); ?>">
                                <?php echo form_error('tecnico_numero_endereco', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <div class="col-md-1 mb-2">
                                <label>Número</label>
                                <input type="text" class="form-control form-control-user-date" name="tecnico_numero_endereco" placeholder=" " value="<?php echo set_value('tecnico_numero_endereco'); ?>">
                                <?php echo form_error('tecnico_numero_endereco', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <div class="col-md-4 mb-2">
                                <label>Complemento</label>
                                <input type="text" class="form-control form-control-user-date" name="tecnico_complemento" placeholder="Complemento " value="<?php echo set_value('tecnico_complemento'); ?>">
                                <?php echo form_error('tecnico_complemento', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <div class="col-md-6 mb-2">
                                <label>Bairro</label>
                                <input type="text" class="form-control form-control-user" name="tecnico_bairro" placeholder="Bairro" value="<?php echo set_value('tecnico_bairro'); ?>">
                                <?php echo form_error('tecnico_bairro', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <div class="col-md-5 mb-2">
                                <label>Cidade</label>
                                <input type="text" class="form-control form-control-user" name="tecnico_cidade" placeholder="Cidade" value="<?php echo set_value('tecnico_cidade'); ?>">
                                <?php echo form_error('tecnico_cidade', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <div class="col-md-1 mb-2">
                                <label>UF</label>
                                <input type="text" class="form-control form-control-user-date" name="tecnico_estado" placeholder="UF " value="<?php echo set_value('tecnico_estado'); ?>">
                                <?php echo form_error('tecnico_estado', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                        </div>

                    </fieldset>
                    <fieldset class="mt-4 border p-2">

                        <legend class="font-small"><i class="fas fa-tools"></i></i>&nbsp;Configurações</legend>

                        <div class="form-group row">
                            <div class="col-md-2 mb-2">
                                <label>Status</label>
                                <select class="custom-select" name="tecnico_ativo">
                                    <option value="0">Inativo</option>
                                    <option value="1">Ativo</option>
                                </select>
                            </div>	
                            <div class="col-md-2 mb-2">
                                <label>Matrícula</label>
                                <input type="text" class="form-control form-control-user" name="tecnico_codigo" placeholder="Matrícula " value="<?php echo $tecnico_codigo; ?>" readonly="">                                
                            </div>
                            <div class="col-md-8">
                                <label>Observações do Técnico</label>
                                <textarea class="form-control form-control-user" name="tecnico_obs" placeholder="Observações"><?php echo set_value('tecnico_obs'); ?></textarea>
                                <?php echo form_error('tecnico_obs', '<small class="form-text text-danger">', '</small>'); ?>
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



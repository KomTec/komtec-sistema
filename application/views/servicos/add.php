

<?php $this->load->view('layout/sidebar'); ?>

<!-- Main Content -->
<div id="content">

    <?php $this->load->view('layout/navbar'); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('servicos'); ?>">Serviços</a></li>
                <li class="breadcrumb-item"><a href="#"><?php echo $titulo; ?></a></li>
            </ol>					
        </nav>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">

                <form class="user" method="POST" name="form_add">

                    <fieldset class="mt-4 border p-2">
                        <legend class="font-small"><i class="fas fa-file-signature"></i>&nbsp;Dados do Serviço</legend>

                        <div class="form-group row mb-3">

                            <div class="col-md-4 mb-2">
                                <label>Nome do Serviço</label>
                                <input type="text" class="form-control form-control-user" name="servico_descricao" placeholder="Nome do serviço" value="<?php echo set_value('servico_descricao'); ?>">
                                <?php echo form_error('servico_descricao', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <div class="col-md-4 mb-2">
                                <label>Valor do Serviço</label>
                                <input type="text" class="form-control form-control-user money" name="servico_preco" placeholder="Valor" value="R$&nbsp;<?php echo set_value('servico_preco'); ?>">
                                <?php echo form_error('servico_preco', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            
                            <div class="col-md-4 mb-2">
                                <label>Status</label>
                                <select class="custom-select" name="servico_ativo">
                                    <option value="0">Inativo</option>
                                    <option value="1">Ativo</option>
                                </select>
                            </div>
                        </div>
                        <div class="form_goup row mb-3">
                            <div class="col-md-12 mb-2">
                                <label>Descrição</label>
                                <textarea type="text" class="form-control form-control-user" name="servico_nome" placeholder="Descrição " style="min-height: 100px!important"><?php echo set_value('servico_nome'); ?></textarea>
                                <?php echo form_error('servico_nome', '<small class="form-text text-danger">', '</small>'); ?>
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



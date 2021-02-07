

<?php $this->load->view('layout/sidebar'); ?>

<!-- Main Content -->
<div id="content">

    <?php $this->load->view('layout/navbar'); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('pagamentos'); ?>">Forma de Pagamentos</a></li>
                <li class="breadcrumb-item"><a href="#"><?php echo $titulo; ?></a></li>
            </ol>					
        </nav>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">

                <form class="user" method="POST" name="form_add">

                    <fieldset class="mt-4 border p-2">
                        <legend class="font-small"><i class="fas fa-money-check-alt"></i>&nbsp;Dados da Forma de Pagamento</legend>

                        <div class="form-group row mb-3">

                            <div class="col-md-6 mb-2">
                                <label>Nome da Forma de Pagamento</label>
                                <input type="text" class="form-control form-control-user" name="forma_pagamento_nome" placeholder="Nome da Forma de Pagamento" value="<?php echo set_value('forma_pagamento_nome'); ?>">
                                <?php echo form_error('forma_pagamento_nome', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                             <div class="col-md-3 mb-2">
                                <label>Aceita Parcelar</label>
                                <select class="custom-select" name="forma_pagamento_aceita_parc">
                                    <option value="0">Não</option>
                                    <option value="1">Sim</option>
                                </select>
                            </div>
                             <div class="col-md-3 mb-2">
                                <label>Status</label>
                                <select class="custom-select" name="forma_pagamento_ativa">
                                    <option value="0">Inativo</option>
                                    <option value="1">Ativo</option>
                                </select>
                            </div>
                        </div>
                    </fieldset>

                    <button title="Salvar" type="submit" class="btn btn-outline-success btn-sm">Salvar</button>
                    <a title="Cancelar" href="<?php echo base_url('pagamentos'); ?>" class="btn btn-outline-danger btn-sm ml-2"><i class="fas fa-undo-alt"></i>&nbsp;Voltar</a>
                </form>
            </div>



        </div><!-- end card-body-->
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->



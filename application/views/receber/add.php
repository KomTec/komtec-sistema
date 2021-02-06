

<?php $this->load->view('layout/sidebar'); ?>

<!-- Main Content -->
<div id="content">

    <?php $this->load->view('layout/navbar'); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('receber'); ?>">Contas a Receber</a></li>
                <li class="breadcrumb-item"><a href="#"><?php echo $titulo; ?></a></li>
            </ol>					
        </nav>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">

                <form class="user" method="POST" name="form_add">

                    <fieldset class="mt-4 border p-2">
                        <legend class="font-small"><i class="fas fa-money-bill-alt"></i>&nbsp;Dados da Conta</legend>

                        <div class="form-group row mb-3">

                            <div class="col-md-5 mb-2">
                                <label>Cliente</label>
                                <select class="custom-select contas_receber" name="conta_receber_cliente_id">
                                    <option>Escolha o cliente</option>
                                    <?php foreach ($clientes as $cliente): ?>
                                    <option value="<?php echo $cliente->cliente_id ?>" ><?php echo $cliente->cliente_nome; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?php echo form_error('conta_receber_cliente_id', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                            <div class="col-md-3 mb-2">
                                <label>Data de Vencimento</label>
                                <input type="date" class="form-control form-control-user-date" name="conta_receber_data_vencimento" value="<?php echo set_value('conta_receber_data_vencimento'); ?>">
                                <?php echo form_error('conta_receber_data_vencimento', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                            <div class="col-md-2 mb-2">
                                <label>Valor</label>
                                <input type="text" class="form-control form-control-user-date money" name="conta_receber_valor" placeholder="Valor da conta" value="<?php echo set_value('conta_receber_valor'); ?>" >
                                <?php echo form_error('conta_receber_valor', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                            <div class="col-md-2 mb-2">
                                <label>Status</label>
                                <select class="custom-select" name="conta_receber_status">                                    
                                    <option value="0">Pendente</option>
                                    <option value="1">Pago</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group row mb-3">                            

                            <div class="col-md-12 mb-2">
                                <label>Observações</label>
                                <textarea type="text" class="form-control form-control-user" name="conta_receber_obs"><?php echo set_value('conta_receber_obs'); ?></textarea>
                                <?php echo form_error('conta_receber_obs', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            
                        </div>
                    </fieldset>
                    
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



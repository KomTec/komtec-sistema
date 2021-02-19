

<?php $this->load->view('layout/sidebar'); ?>

<!-- Main Content -->
<div id="content">

    <?php $this->load->view('layout/navbar'); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('carros'); ?>">Carros</a></li>
                <li class="breadcrumb-item"><a href="#"><?php echo $titulo; ?></a></li>
            </ol>					
        </nav>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">

                <form class="user" method="POST" name="form_edit">

                    <p><strong><i class="fas fa-clock">&nbsp; &nbsp; Última atualização: </i>&nbsp;</strong><?php echo formata_data_banco_com_hora($carro->carro_data_alteracao) ?></p>

                    <fieldset class="mt-4 border p-2">
                        <legend class="font-small"><i class="fas fa-car-side"></i>&nbsp;Dados do Carro</legend>

                        <div class="form-group row mb-3">

                            <div class="col-md-4 mb-2">
                                <label>Carro</label>
                                <input type="text" class="form-control form-control-user" name="carro_nome" placeholder="Nome do carro" value="<?php echo $carro->carro_nome; ?>">
                                <?php echo form_error('carro_nome', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <div class="col-md-4 mb-2">
                                <label>Modelo</label>
                                <input type="text" class="form-control form-control-user" name="carro_modelo" placeholder="Modelo" value="<?php echo $carro->carro_modelo; ?>">
                                <?php echo form_error('carro_modelo', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                            <div class="col-md-4 mb-2">
                                <label>Placa</label>
                                <input type="text" class="form-control form-control-user" name="carro_placa" value="<?php echo $carro->carro_placa; ?>">
                                <?php echo form_error('carro_placa', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <div class="col-md-4 mb-2">
                                <label>Marca</label>
                                <select class="custom-select" name="carro_marca_id">
                                    <?php foreach ($marcas as $marca): ?>
                                        <option value="<?php echo $marca->marca_id ?>" <?php echo ($marca->marca_id == $carro->carro_marca_id ? 'selected' : '') ?>><?php echo $marca->marca_nome; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?php echo form_error('marca_nome', '<small class="form-text text-danger">', '</small>'); ?>
                            </div> 

                            <div class="col-md-4 mb-2">
                                <label>Descrição</label>
                                <input type="text" class="form-control form-control-user" name="carro_descricao" placeholder="Descrição " value="<?php echo $carro->carro_descricao; ?>">
                                <?php echo form_error('carro_descricao', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <div class="col-md-4 mb-2">
                                <label>Status</label>
                                <select class="custom-select" name="carro_ativo">
                                    <option value="0"<?php echo ($carro->carro_ativo == 0) ? 'selected' : ''; ?>>Inativo</option>
                                    <option value="1"<?php echo ($carro->carro_ativo == 1) ? 'selected' : ''; ?>>Ativo</option>
                                </select>
                            </div>

                        </div>                            
                    </fieldset>

                    <div class="form-group row">
                        <input type="hidden" name="carro_id" value="<?php echo $carro->carro_id; ?>"/>
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





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

                <form class="user" method="POST" name="form_add">
                    <fieldset class="mt-4 border p-2">
                        <legend class="font-small"><i class="fas fa-car-side"></i>&nbsp;Dados do Carros</legend>

                        <div class="form-group row mb-3">
                            <div class="col-md-4 mb-2">
                                <label>Carro</label>
                                <input type="text" class="form-control form-control-user" name="carro_nome" placeholder="Nome do Carro" value="<?php echo set_value('carro_nome'); ?>">
                                <?php echo form_error('carro_nome', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <div class="col-md-4 mb-2">
                                <label>Modelo do Carro</label>
                                <input type="text" class="form-control form-control-user" name="carro_modelo" placeholder="Modelo do Carro" value="<?php echo set_value('carro_modelo'); ?>">
                                <?php echo form_error('carro_modelo', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <div class="col-md-4 mb-2">
                                <label>Placa do Carro</label>
                                <input type="text" class="form-control form-control-user" name="carro_placa" placeholder="Placa do Carro" value="<?php echo set_value('carro_placa'); ?>">
                                <?php echo form_error('carro_placa', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <div class="col-md-4 mb-2">
                                <label>Marca</label>
                                <select class="custom-select" name="carro_marca_id">
                                    <?php foreach ($marcas as $marca): ?>
                                        <option value="<?php echo $marca->marca_id ?>" ><?php echo $marca->marca_nome; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?php echo form_error('marca_nome', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <div class="col-md-4 mb-2">
                                <label>Descrição do Carro</label>
                                <input type="text" class="form-control form-control-user" name="carro_descricao" placeholder="Descrição do Carro" value="<?php echo set_value('carro_descricao'); ?>">
                                <?php echo form_error('carro_descricao', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                            <div class="col-md-4 mb-2">
                                <label>Status</label>
                                <select class="custom-select" name="carro_ativo">
                                    <option value="0">Inativo</option>
                                    <option value="1">Ativo</option>
                                </select>
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



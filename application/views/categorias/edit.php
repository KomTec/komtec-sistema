

<?php $this->load->view('layout/sidebar'); ?>

<!-- Main Content -->
<div id="content">

    <?php $this->load->view('layout/navbar'); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('categorias'); ?>">Categorias</a></li>
                <li class="breadcrumb-item"><a href="#"><?php echo $titulo; ?></a></li>
            </ol>					
        </nav>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">

                <form class="user" method="POST" name="form_edit">

                    <p><strong><i class="fas fa-clock">&nbsp; &nbsp; Última atualização: </i>&nbsp;</strong><?php echo formata_data_banco_com_hora($categoria->categoria_data_alteracao) ?></p>

                    <fieldset class="mt-4 border p-2">
                        <legend class="font-small"><i class="fab fa-buffer"></i>&nbsp;Dados da Categoria</legend>

                        <div class="form-group row mb-3">

                            <div class="col-md-4 mb-2">
                                <label>Nome da Categoria</label>
                                <input type="text" class="form-control form-control-user" name="categoria_nome" placeholder="Nome da Categoria" value="<?php echo $categoria->categoria_nome; ?>">
                                <?php echo form_error('categoria_nome', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                             <div class="col-md-4 mb-2">
                                <label>Status</label>
                                <select class="custom-select" name="categoria_ativa">
                                    <option value="0"<?php echo ($categoria->categoria_ativa == 0) ? 'selected' : ''; ?>>Inativo</option>
                                    <option value="1"<?php echo ($categoria->categoria_ativa == 1) ? 'selected' : ''; ?>>Ativo</option>
                                </select>
                            </div>
                        </div>
                    </fieldset>

                    <div class="form-group row">
                        <input type="hidden" name="categoria_id" value="<?php echo $categoria->categoria_id; ?>"/>
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



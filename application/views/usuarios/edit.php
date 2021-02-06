

<?php $this->load->view('layout/sidebar'); ?>

<!-- Main Content -->
<div id="content">

    <?php $this->load->view('layout/navbar'); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('usuarios'); ?>">Usuários</a></li>
                <li class="breadcrumb-item"><a href="#"><?php echo $titulo; ?></a></li>
            </ol>					
        </nav>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">

            <div class="card-body">

                <form class="user" method="POST" name="form_edit">

                    <p><strong><i class="fas fa-clock">&nbsp; &nbsp; Última atualização: </i>&nbsp;</strong><?php echo formata_data_banco_com_hora($usuario->user_data_alteracao) ?></p>

                    <div class="form-group row">

                        <div class="col-md-4">
                            <label>Nome</label>
                            <input type="text" class="form-control form-control-user" name="first_name" placeholder="Seu nome" value="<?php echo $usuario->first_name; ?>">
                            <?php echo form_error('first_name', '<small class="form-text text-danger">', '</small>'); ?>
                        </div>
                        <div class="col-md-4">
                            <label>Sobrenome</label>
                            <input type="text" class="form-control form-control-user" name="last_name" placeholder="Seu sobrenome " value="<?php echo $usuario->last_name; ?>">
                            <?php echo form_error('last_name', '<small class="form-text text-danger">', '</small>'); ?>
                        </div>
                        <div class="col-md-4">
                            <label>E-mail&nbsp;(Login)</label>
                            <input type="email" class="form-control form-control-user" name="email" placeholder="Seu E-mail (Login)" value="<?php echo $usuario->email; ?>">
                            <?php echo form_error('email', '<small class="form-text text-danger">', '</small>'); ?>
                        </div>	
                    </div>

                    <div class="form-group row">

                        <div class="col-md-4">
                            <label>Usuário</label>
                            <input type="text" class="form-control form-control-user" name="username" placeholder="Seu usuario" value="<?php echo $usuario->username; ?>">
                            <?php echo form_error('username', '<small class="form-text text-danger">', '</small>'); ?>
                        </div>

                        <div class="col-md-4">
                            <label>Status</label>
                            <select class="custom-select" name="active">
                                <option value="0"<?php echo ($usuario->active == 0) ? 'selected' : ''; ?>>Inativo</option>
                                <option value="1"<?php echo ($usuario->active == 1) ? 'selected' : ''; ?>>Ativo</option>
                            </select>
                        </div>
                        <div class="col-md-4">

                            <label>Perfil de Acesso</label>
                            <select class="custom-select" name="perfil_usuario">
                                <option value="1" <?php echo ($perfil_usuario->id == 1) ? 'selected' : '' ?>>Administrador</option>
                                <option value="2" <?php echo ($perfil_usuario->id == 2) ? 'selected' : '' ?>>Vendedor</option>
                                <option value="3" <?php echo ($perfil_usuario->id == 3) ? 'selected' : '' ?>>Gerente</option>
                                <option value="4" <?php echo ($perfil_usuario->id == 4) ? 'selected' : '' ?>>Financeiro</option>
                                <option value="5" <?php echo ($perfil_usuario->id == 5) ? 'selected' : '' ?>>Comprador</option>
                                <option value="6" <?php echo ($perfil_usuario->id == 6) ? 'selected' : '' ?>>Técnico</option>
                                <option value="7" <?php echo ($perfil_usuario->id == 7) ? 'selected' : '' ?>>Almoxarife</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">

                        <div class="col-md-4">
                            <label>Empresa</label>
                            <input type="text" class="form-control form-control-user" name="company" placeholder="Sua empresa" value="<?php echo $usuario->company ?>">
                            <?php echo form_error('company', '<small class="form-text text-danger">', '</small>'); ?>
                        </div>
                        <div class="col-md-4">
                            <label>Telefone</label>
                            <input type="text" class="form-control form-control-user" name="phone" placeholder="Seu telefone " value="<?php echo $usuario->phone ?>">
                            <?php echo form_error('phone', '<small class="form-text text-danger">', '</small>'); ?>
                        </div>
                        <div class="col-md-4">
                            <label>Celular</label>
                            <input type="text" class="form-control form-control-user sp_celphones" name="cell_phone" placeholder="Seu celular" value="<?php echo $usuario->cell_phone; ?>">
                            <?php echo form_error('cell_phone', '<small class="form-text text-danger">', '</small>'); ?>
                        </div>	
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6">
                            <label>Senha</label>
                            <input type="password" class="form-control form-control-user" name="password" placeholder="Sua senha ">
                            <?php echo form_error('password', '<small class="form-text text-danger">', '</small>'); ?>
                        </div>
                        <div class="col-md-6">
                            <label>Confirme</label>
                            <input type="password" class="form-control form-control-user" name="confirm_password" placeholder="Confirme sua senha ">
                            <?php echo form_error('confirm_password', '<small class="form-text text-danger">', '</small>'); ?>
                        </div>

                        <input type="hidden" name="usuario_id" value="<?php echo $usuario->id ?>">

                    </div>

                    <button type="submit" class="btn btn-outline-success btn-sm">Salvar</button>
                    <a title="Cancelar" href="<?php echo base_url($this->router->fetch_class()); ?>" class="btn btn-outline-danger btn-sm"><i class="fas fa-undo-alt"></i>&nbsp;Voltar</a>
                </form>

            </div><!-- end card-body-->
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->




<?php $this->load->view('layout/sidebar'); ?>

<!-- Main Content -->
<div id="content">

    <?php $this->load->view('layout/navbar'); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->  
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('/'); ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo $titulo; ?></li>
                    </ol>
                </nav>
                <?php if ($message = $this->session->flashdata('sucesso')): ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-success fade show" role="alert">
                                <strong><i class="far fa-smile-wink"></i>&nbsp; &nbsp;<?php echo $message; ?></strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if ($message = $this->session->flashdata('info')): ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-warning alert-dismissible fade show text-gray-900" role="alert">
                                <strong><i class="fas fa-exclamation-triangle"></i>&nbsp; &nbsp;<?php echo $message; ?></strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if ($message = $this->session->flashdata('error')): ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-danger fade show" role="alert">
                                <strong><i class="fas fa-exclamation-triangle"></i>&nbsp; &nbsp;<?php echo $message; ?></strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

            </div>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h2><a title="Cadastrar nova conta" href="<?php echo base_url('receber/add'); ?>" class="btn btn-outline-success btn-sm float-lg-right"><i class="fas fa-plus"></i></i>&nbsp; Nova</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Cliente</th>
                                    <th>Valor</th>
                                    <th>Vencimento</th>
                                    <th class="text-center pr-4">Pagamento</th>                                                                                                   
                                    <th class="text-center pr-4">Situação</th>                   
                                    <th class="text-center pr-4">Observação</th>                   
                                    <th class="text-center no-sort">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($contas_receber as $conta): ?>
                                    <tr>
                                        <td><?php echo $conta->cliente ?></td>  
                                        <td class="money"><?php echo 'R$&nbsp;' . $conta->conta_receber_valor ?></td>
                                        <td><?php echo formata_data_banco_sem_hora($conta->conta_receber_data_vencimento); ?></td>           

                                        <td class="text-center pr-4"><?php echo ($conta->conta_receber_status == 1 ? formata_data_banco_com_hora($conta->conta_receber_data_pagamento) : 'Em aberto') ?></td>

                                        <td class="text-center pr-4">
                                            <?php
                                            if ($conta->conta_receber_status == 1) {
                                                echo '<span class="badge badge-success btn-sm">Pago</span>';
                                            } elseif (strtotime($conta->conta_receber_data_vencimento) > strtotime(date('Y-m-d'))) {
                                                echo '<span class="badge bg-info btn-sm text-gray-900">A receber</span>';
                                            } elseif (strtotime($conta->conta_receber_data_vencimento) == strtotime(date('Y-m-d'))) {
                                                echo '<span class="badge badge-warning btn-sm text-gray-900">Vence hoje</span>';
                                            } else {
                                                echo '<span class="badge badge-danger btn-sm">Vencido</span>';
                                            }
                                            ?>                                             
                                        </td>
                                        <td><?php echo word_limiter($conta->conta_receber_obs, 6) ?></td>

                                        <td class="text-center pr-4">                                           
                                            <a title="Editar" href="<?php echo base_url('receber/edit/' . $conta->conta_receber_id) ?>" class="btn btn-sm btn btn-outline-warning"><i class="fas fa-edit"></i></a>
                                            <!-- Só exibe o botão de excluir e editar para as contas que não estão pagas-->
                                            <?php if ($conta->conta_receber_status == 0) : ?>
                                                <a title="Conta não pode excluir" href="javascript(void)" data-toggle="modal" data-target="#conta" class="btn btn-sm btn btn-outline-danger"><i class="fas fa-trash-alt"></i></a>
                                            <?php endif; ?>
                                        </td>
                                    </tr>

                                <div class="modal fade" id="conta<?php echo $conta->conta_receber_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel"><strong>Tem certeza que deseja deletar o registro?</strong></h5>
                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body"><h5> Para excluír o registro clique em <strong>"Sim"</strong></h5></div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Não</button>
                                                <a class="btn btn-success btn-sm" href="<?php echo base_url('receber/del/' . $conta->conta_receber_id) ?>">Sim</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


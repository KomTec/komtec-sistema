
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
                    <h2><a title="Cadastrar novo orcamento" href="<?php echo base_url('orcamentos/add'); ?>" class="btn btn-outline-success btn-sm float-lg-right"><i class="fas fa-plus"></i></i>&nbsp; Novo</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Produto</th>
                                    <th>Cód. Int.</th>
                                    <th>Cód Orig.</th>
                                    <th>Marca</th>
                                    <th>Categoria</th>
                                    <th>Valor Unit.</th>
                                    <th>NCM</th> 
                                    <!--<!--  <th>Est. mín.</th>-->
                                    <th>Estoque</th>                                                                       
                                    <th class="text-center">Status</th>                   
                                    <th class="text-center no-sort">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($orcamentos as $orcamento): ?>
                                    <tr>
                                        <td><?php echo $orcamento->orcamento_nome ?></td>  
                                        <td><?php echo $orcamento->orcamento_codigo ?></td> 
                                        <td><?php echo $orcamento->orcamento_codigo_original ?></td> 
                                        <td><?php echo $orcamento->orcamento_marca ?></td>
                                        <td><?php echo $orcamento->orcamento_categoria ?></td>
                                        <td>R$&nbsp;<?php echo $orcamento->orcamento_preco_venda ?></td>  
                                        <td><?php echo $orcamento->orcamento_ncm ?></td>

                                        <!--<!-- Exemplo de marcação da quantidade mínima do estoque  -->
                                        <!-- <td class="text-center"><?php echo '<span class="badge bg-success text-white btn-sm">' . $orcamento->orcamento_estoque_minimo . '</span>' ?></td> -->

                                        <td class="text-center">
                                            <?php echo ($orcamento->orcamento_estoque_minimo == $orcamento->orcamento_qtde_estoque ? '<span class="badge bg-warning text-white btn-sm text-gray-900">' . $orcamento->orcamento_qtde_estoque . '</span>' : '<span class="badge bg-info text-white btn-sm text-gray-900">' . $orcamento->orcamento_qtde_estoque . '</span>');?>
                                        </td>


                                        <td class="text-center pr-8"><?php echo ($orcamento->orcamento_ativo == 1 ? '<span class="badge bg-info text-white btn-sm">Ativo</span>' : '<span class="badge bg-secondary text-white btn-sm">Inativo</span>') ?></td>

                                        <td class="text-center pro-8">
                                            <a title="Editar" href="<?php echo base_url('orcamentos/edit/' . $orcamento->orcamento_id) ?>" class="btn btn-sm btn btn-outline-warning"><i class="fas fa-edit"></i></a>
                                            <a title="Excluir" href="javascript(void)" data-toggle="modal" data-target="#orcamento<?php echo $orcamento->orcamento_id; ?>" class="btn btn-sm btn btn-outline-danger"><i class="fas fa-trash-alt"></i></i></a>
                                        </td>
                                    </tr>

                                <div class="modal fade" id="orcamento<?php echo $orcamento->orcamento_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                <a class="btn btn-success btn-sm" href="<?php echo base_url('orcamentos/del/' . $orcamento->orcamento_id) ?>">Sim</a>
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


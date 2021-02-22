<?php $this->load->view('layout/sidebar'); ?>

<!-- Main Content -->
<div id="content">

    <?php $this->load->view('layout/navbar'); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('os'); ?>">Ordens de Serviços</a></li>
                <li class="breadcrumb-item"><a href="#"><?php echo $titulo; ?></a></li>
            </ol>					
        </nav>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body"> 

                <div class="row">
                    <div class="col-md-4">
                        <a href="<?php echo base_url('os/pdf'); ?>" class="btn btn-dark btn-sm btn-icon-split btn-lg text-gray-900">
                            <span class="icon text-white-250">
                                <i class="fas fa-print"></i>
                            </span>
                            <span class="text">Imprimir Ordem de Serviço</span>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="<?php echo base_url('os/add'); ?>" class="btn btn-success btn-sm btn-icon-split btn-lg">
                            <span class="icon text-white-50">
                                <i class="fas fa-plus"></i>
                            </span>
                            <span class="text">Cadastrar Ordem de Serviço</span>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="<?php echo base_url('os'); ?>" class="btn btn-info btn-sm btn-icon-split btn-lg">
                            <span class="icon text-white-50">
                                <i class="fas fa-list-ul"></i>
                            </span>
                            <span class="text">Listar Ordens de Serviços</span>
                        </a>
                    </div>

                </div>

            </div><!--card-body-->
        </div><!-- end card-body-->
    </div><!-- /.container-fluid -->
</div><!-- End of Main Content -->

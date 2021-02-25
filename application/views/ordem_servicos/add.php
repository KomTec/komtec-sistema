

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
                <form class="user" action="" id="form" name="form_add" enctype="multipart/form-data" method="post" accept-charset="utf-8">

                    <fieldset id="vendas" class="mt-4 border p-2">

                        <legend class="font-small"><i class="fas fa-tools"></i>&nbsp;&nbsp;Escolha os serviços</legend>

                        <div class="form-group row">
                            <div class="col-md-4">
                                <label class="small my-0">Escolha o Técnico <span class="text-danger">*</span></label>
                                <select id="id_tecnico" class="custom-select tecnico" name="ordem_servico_tecnico_id">                                     
                                    <option value="">Escolha</option>                                    
                                    <?php foreach ($tecnicos as $tecnico): ?>                                    
                                        <option value="<?php echo $tecnico->tecnico_id; ?>"><?php echo $tecnico->tecnico_nome_completo . ' | CPF: ' . $tecnico->tecnico_cpf; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?php echo form_error('ordem_servico_tecnico_id', '<div class="text-danger small">', '</div>') ?>
                            </div>
                            <div class="col-md-2">
                                <label class="small my-0">Escolha o Carro <span class="text-danger">*</span></label>
                                <select id="id_carro" class="custom-select carro" name="ordem_servico_carro_id">
                                    <option value="">Escolha</option>
                                    <?php foreach ($carros as $carro): ?>
                                        <option value="<?php echo $carro->carro_id; ?>"><?php echo $carro->carro_placa; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?php echo form_error('ordem_servico_carro_id', '<div class="text-danger small">', '</div>') ?>
                            </div>
                            <div class="ui-widget col-lg-6 mb-1 mt-1">
                                <label class="small my-0">Escolha o serviço <span class="text-danger">*</span></label>
                                <input id="buscar_servicos" class="search form-control form-control-lg col-lg-12" placeholder="Que serviço você está buscando?">
                            </div>
                        </div>


                        <div class="table-responsive">
                            <table id="table_servicos" class="table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th class="" style="width: 55%">Serviço</th>
                                        <th class="text-right pr-2" style="width: 12%">Valor unitário</th>
                                        <th class="text-center" style="width: 8%">Qty</th>
                                        <th class="" style="width: 8%">% Desc</th>
                                        <th class="text-right pr-2" style="width: 15%">Total</th>
                                        <th class="" style="width: 25%"></th>
                                        <th class="" style="width: 25%"></th>
                                    </tr>
                                </thead>
                                <tbody id="lista_servicos" class="">

                                </tbody>
                                <tfoot >
                                    <tr class="">
                                        <td colspan="5" class="text-right border-0">
                                            <label class="font-weight-bold pt-1" for="total">Valor de desconto:</label>
                                        </td>
                                        <td class="text-right border-0">
                                            <input type="text" name="ordem_servico_valor_desconto" class="form-control form-control-user text-right pr-1" data-format="$ 0,0.00" data-cell="L1" data-formula="SUM(H1:H5)" readonly="">
                                        </td>
                                        <td class="border-0">&nbsp;</td>
                                    </tr>
                                    <tr class="">
                                        <td colspan="5" class="text-right border-0">
                                            <label class="font-weight-bold pt-1" for="total">Total a pagar:</label>
                                        </td>
                                        <td class="text-right border-0">
                                            <input type="text" name="ordem_servico_valor_total" class="form-control form-control-user text-right pr-1" data-format="$ 0,0.00" data-cell="G2" data-formula="SUM(F1:F5)" readonly="">
                                        </td>
                                        <td class="border-0">&nbsp;</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>

                    </fieldset>   

                    <fieldset class="mt-4 border p-2">

                        <legend class="font-small"><i class="far fa-list-alt"></i>&nbsp;&nbsp;Dados da ordem</legend>

                        <div class="">
                            <div class="form-group row">

                                <div class="col-sm-6 mb-1 mb-sm-0">
                                    <label class="small my-0">Escolha o cliente <span class="text-danger">*</span></label>
                                    <select class="custom-select contas_receber" name="ordem_servico_cliente_id" required="">
                                        <option value="">Escolha</option>
                                        <?php foreach ($clientes as $cliente): ?>
                                            <option value="<?php echo $cliente->cliente_id; ?>"><?php echo $cliente->cliente_nome . ' ' . $cliente->cliente_sobrenome . ' | CPF ou CNPJ: ' . $cliente->cliente_cpf_cnpj; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?php echo form_error('ordem_servico_cliente_id', '<div class="text-danger small">', '</div>') ?>
                                </div>


                                <div class="col-md-6">
                                    <label class="small my-0">Status da ordem <span class="text-danger">*</span></label>
                                    <select class="custom-select" name="ordem_servico_status">
                                        <option value="0" selected="">Aberta</option>
                                    </select>
                                </div>

                            </div>

                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label class="small my-0">Escolha o Equipamento <span class="text-danger">*</span></label>
                                    <select id="id_equipamento" class="custom-select carro" name="ordem_servico_equipamento_id">
                                        <option value="">Escolha</option>
                                        <?php foreach ($equipamentos as $equipamento): ?>
                                            <option value="<?php echo $equipamento->equipamento_id; ?>"><?php echo $equipamento->equipamento_nome; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?php echo form_error('ordem_servico_equipamento_id', '<div class="text-danger small">', '</div>') ?>
                                </div>
                                <div class="col-sm-4 mb-1 mb-sm-0">
                                    <label class="small my-0">Série<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control form-control-user" value="<?php echo set_value('ordem_servico_equipamento_serie'); ?>" name="ordem_servico_equipamento_serie">
                                    <?php echo form_error('ordem_servico_equipamento_serie', '<div class="text-danger small">', '</div>') ?>
                                </div>
                                <div class="col-md-4">
                                    <label class="small my-0">Escolha a Marca <span class="text-danger">*</span></label>
                                    <select id="id_marca " class="custom-select carro" name="ordem_servico_marca_id">
                                        <option value="">Escolha</option>
                                        <?php foreach ($marcas as $marca): ?>
                                            <option value="<?php echo $marca->marca_id; ?>"><?php echo $marca->marca_nome; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?php echo form_error('ordem_servico_marca_id', '<div class="text-danger small">', '</div>') ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4 mb-1 mb-sm-0">
                                    <label class="small my-0">Série do Motor <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control form-control-user" value="<?php echo set_value('ordem_servico_equipamento_serie_motor'); ?>" name="ordem_servico_equipamento_serie_motor">
                                    <?php echo form_error('ordem_servico_equipamento_serie_motor', '<div class="text-danger small">', '</div>') ?>
                                </div>
                                
                                <div class="col-sm-4 mb-1 mb-sm-0">
                                    <label class="small my-0">Hodrometro <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control form-control-user" value="<?php echo set_value('ordem_servico_equipamento_hodometro'); ?>" name="ordem_servico_equipamento_hodometro" >
                                    <?php echo form_error('ordem_servico_equipamento_hodometro', '<div class="text-danger small">', '</div>') ?>
                                </div>
                                
                                <div class="col-sm-4 mb-1 mb-sm-0">
                                    <label class="small my-0">Modelo <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control form-control-user" value="<?php echo set_value('ordem_servico_equipamento_modelo'); ?>" name="ordem_servico_equipamento_modelo" required="">
                                    <?php echo form_error('ordem_servico_equipamento_modelo', '<div class="text-danger small">', '</div>') ?>
                                </div>
                            </div>                            
                            <div class="form-group row">

                                <div class="col-sm-6 mb-1 mb-sm-0">
                                    <label class="small my-0">Defeitos <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control form-control-user" value="<?php echo set_value('ordem_servico_equipamento_defeito'); ?>" name="ordem_servico_equipamento_defeito" required="">
                                    <?php echo form_error('ordem_servico_equipamento_defeito', '<div class="text-danger small">', '</div>') ?>
                                </div>
                                <div class="col-sm-6 mb-1 mb-sm-0">
                                    <label class="small my-0">Peças</label>
                                    <input type="text" class="form-control form-control-user" value="<?php echo set_value('ordem_servico_equipamento_pecas'); ?>" name="ordem_servico_equipamento_pecas">
                                    <?php echo form_error('ordem_servico_equipamento_pecas', '<div class="text-danger small">', '</div>') ?>
                                </div>
                            </div>
                            <div class="form-group row">

                                <div class="col-sm-6 mb-1 mb-sm-0">
                                    <label class="small my-0">Serviços Executados <span class="text-danger">*</span></label>
                                    <textarea type="text" class="form-control form-control-user" value="<?php echo set_value('ordem_servico_servico_executado'); ?>" name="ordem_servico_servico_executado" required=""></textarea>
                                    <?php echo form_error('ordem_servico_servico_executado', '<div class="text-danger small">', '</div>') ?>
                                </div>   

                                <div class="col-sm-6 mb-1 mb-sm-0">
                                    <label class="small my-0">Observações <span class="text-danger"></span></label>
                                    <textarea type="text" class="form-control form-control-user" value="<?php echo set_value('ordem_servico_obs'); ?>" name="ordem_servico_obs"></textarea>
                                </div>     

                            </div>
                        </div>
                    </fieldset>

                    <div class="mt-3">
                        <button class="btn btn-primary btn-sm mr-2" id="btn-cadastrar-os" form="form">Cadastrar</button>
                        <a href="<?php echo base_url('os'); ?>" class="btn btn-secondary btn-sm">Voltar</a>
                    </div>
                </form>
            </div><!--card-body-->
        </div><!-- end card-body-->
    </div><!-- /.container-fluid -->
</div><!-- End of Main Content -->


<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="home">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">KomTec </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('/'); ?>">
            <i class="fas fa-home"></i>
            <span>Home</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Módulos
    </div>
    
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
            <i class="fas fa-hand-holding-usd"></i>
            <span>Vendas</span>
        </a>
        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Escolha uma opção:</h6>
                <a title="Gestão de Orçamentos" class="collapse-item" href="<?php echo base_url('orcamentos') ?>"><i class="fas fa-file-invoice-dollar text-gray-900"></i>&nbsp;&nbsp;Orçamentos</a>
                <a title="Gestão de Vendas" class="collapse-item" href="<?php echo base_url('vendas') ?>"><i class="fas fa-funnel-dollar text-gray-900"></i>&nbsp;&nbsp;Vendas</a> 
            </div>
        </div>
    </li>
    
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
            <i class="fas fa-money-check-alt"></i>
            <span>Financeiro</span>
        </a>
        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Escolha uma opção:</h6>
                <a title="Gestão de Contas a Pagar" class="collapse-item" href="<?php echo base_url('pagar') ?>"><i class="fas fa-file-invoice-dollar text-gray-900"></i>&nbsp;&nbsp;Contas a Pagar</a>
                <a title="Gestão de Contas a Receber" class="collapse-item" href="<?php echo base_url('receber') ?>"><i class="fas fa-hand-holding-usd text-gray-900"></i>&nbsp;&nbsp;Contas a Receber</a> 
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-database"></i>
            <span>Cadastros</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Escolha uma opção:</h6>
                <a title="Gestão de Clientes" class="collapse-item" href="<?php echo base_url('clientes') ?>"><i class="fas fa-user-tie text-gray-900"></i>&nbsp;&nbsp;Clientes</a>
                <a title="Gestão de Fornecedores" class="collapse-item" href="<?php echo base_url('fornecedores') ?>"><i class="fas fa-user-tag text-gray-900"></i>&nbsp;&nbsp;Fornecedores</a>      
                <a title="Gestão de Vendedores" class="collapse-item" href="<?php echo base_url('vendedores') ?>"><i class="fas fa-user-secret text-gray-900"></i>&nbsp;&nbsp;Vendedores</a>
                <a title="Gestão de Técnicos" class="collapse-item" href="<?php echo base_url('tecnicos') ?>"><i class="fas fa-cogs text-gray-900"></i>&nbsp;&nbsp;Técnicos</a>
                <a title="Gestão de Serviços" class="collapse-item" href="<?php echo base_url('servicos') ?>"><i class="fas fa-file-signature text-gray-900"></i>&nbsp;&nbsp;Serviços</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTree" aria-expanded="true" aria-controls="collapseTree">
            <i class="fas fa-box-open"></i>
            <span>Estoque</span>
        </a>

        <div id="collapseTree" class="collapse" aria-labelledby="headingTree" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Escolha uma opção:</h6>
                <a title="Gestão de Marcas" class="collapse-item" href="<?php echo base_url('marcas') ?>"><i class="fas fa-cubes text-gray-900"></i>&nbsp;&nbsp;Marcas</a>
                <a title="Gestão de Categorias" class="collapse-item" href="<?php echo base_url('categorias') ?>"><i class="fab fa-buffer text-gray-900"></i>&nbsp;&nbsp;Categorias</a>
                <a title="Gestão de Produtos" class="collapse-item" href="<?php echo base_url('produtos') ?>"><i class="fab fa-product-hunt text-gray-900"></i>&nbsp;&nbsp;Produtos</a>

            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Configurações
    </div>

    <!-- Nav Item -->
    <li class="nav-item">
        <a title="Gestão de Usuários" class="nav-link" href="<?php echo base_url('usuarios') ?>">
            <i class="fas fa-users"></i>
            <span>Usuários</span></a>
    </li>

    <li class="nav-item">
        <a title="Gestão de Sistema" class="nav-link" href="<?php echo base_url('sistema') ?>">
            <i class="fas fa-cogs"></i>
            <span>Sistema</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">


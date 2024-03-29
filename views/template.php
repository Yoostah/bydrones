<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    BY DRONES
  </title>
  <!-- Favicon -->
  <link href="<?php echo BASE_URL; ?>assets/img/brand/drone.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="<?php echo BASE_URL; ?>assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="<?php echo BASE_URL; ?>assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css"
    rel="stylesheet" />
  <!-- CSS Files -->
  <link href="<?php echo BASE_URL; ?>assets/css/argon-dashboard.css?v=1.1.0" rel="stylesheet" />
  <!-- JQUERY -->
  <script src="<?php echo BASE_URL; ?>assets/js/plugins/jquery/dist/jquery.min.js"></script>
</head>

<body class="">
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main"
        aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="<?php echo BASE_URL; ?>">
        <img src="<?php echo BASE_URL; ?>assets/img/brand/logo_only2.svg" class="navbar-brand-img" alt="...">
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        <!-- <li class="nav-item dropdown">
          <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="ni ni-bell-55"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right"
            aria-labelledby="navbar-default_dropdown_1">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li> -->
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="<?php echo BASE_URL; ?>assets/img/theme/team-1-800x800.jpg">
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Bem Vindo!</h6>
            </div>
            <a href="<?php echo BASE_URL; ?>profile" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>Meu Perfil</span>
            </a>
            <a href="<?php echo BASE_URL; ?>options" class="dropdown-item">
              <i class="ni ni-settings-gear-65"></i>
              <span>Configurações</span>
            </a>
            <a href="<?php echo BASE_URL; ?>activities" class="dropdown-item">
              <i class="ni ni-calendar-grid-58"></i>
              <span>Minhas Atividades</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="<?php echo BASE_URL; ?>logout" class="dropdown-item">
              <i class="ni ni-user-run"></i>
              <span>Sair</span>
            </a>
          </div>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="./index.html">
                <img src="<?php echo BASE_URL; ?>assets/img/brand/logo_only.svg">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main"
                aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- BUSCA -->
        <!-- <form class="mt-4 mb-3 d-md-none">
          <div class="input-group input-group-rounded input-group-merge">
            <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fa fa-search"></span>
              </div>
            </div>
          </div>
        </form> -->
        <!-- MENU LATERAL -->
        <ul class="navbar-nav">
          <li class="nav-item  class=" active">
            <a class=" nav-link active " href=" <?php echo BASE_URL; ?>"> <i
                class="ni ni-chart-pie-35 text-primary"></i>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="<?php echo BASE_URL; ?>orcamento">
              <i class="ni ni-send text-primary"></i> Orçamentos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="<?php echo BASE_URL; ?>orcamentoAprovado">
              <i class="ni ni-spaceship text-primary"></i> Vôos Confirmados
            </a>
          </li>
        </ul>
        <!-- Divider -->
        <hr class="my-3">
        <!-- Heading -->
        <h6 class="navbar-heading text-muted">Variáveis</h6>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link " href="<?php echo BASE_URL; ?>peso">
              <i class="ni ni-chart-bar-32 text-primary"></i> Pesos
            </a>
          </li>
        </ul>
        <?php if($viewData['user']->isAdmin()) :?>
        <!-- Divider -->
        <hr class="my-3">
        <!-- Heading -->
        <h6 class="navbar-heading text-muted">Painel Administrativo</h6>
        <!-- Navigation -->
        <ul class="navbar-nav mb-md-3">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo BASE_URL; ?>administration">
              <i class="ni ni-settings-gear-65 text-red"></i> Configurações
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo BASE_URL; ?>options">
              <i class="ni ni-ui-04 text-red"></i> Ajustes Rápidos
            </a>
          </li>
        </ul>
        <?php endif;?>
      </div>
    </div>
  </nav>
  <div class="main-content main-bg">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- CRUMB -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block"
          href="<?php echo BASE_URL; ?>">Dashboard</a>
        <!-- BUSCA -->
        <!-- <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
              </div>
              <input class="form-control" placeholder="Search" type="text">
            </div>
          </div>
        </form> -->
        <!-- PROFILE USER -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="<?php echo BASE_URL; ?>assets/img/theme/team-1-800x800.jpg">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold"><?php echo $viewData['user']->getLoggedName() ?></span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Bem Vindo!</h6>
              </div>
              <a href="<?php echo BASE_URL; ?>profile" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>Meu Perfil</span>
              </a>
              <a href="<?php echo BASE_URL; ?>options" class="dropdown-item">
                <i class="ni ni-settings-gear-65"></i>
                <span>Configurações</span>
              </a>
              <a href="<?php echo BASE_URL; ?>activities" class="dropdown-item">
                <i class="ni ni-calendar-grid-58"></i>
                <span>Minhas Atividades</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="<?php echo BASE_URL; ?>logout" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Sair</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- End Navbar -->
    <!-- Header -->

    <div class="header bg-gradient-primary">

    </div>

    <div class="content">
      <?php $this->loadViewInTemplate($viewName, $viewData); ?>
    </div>

    <!-- Footer -->
    <!-- <footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
              &copy; 2018 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
            </div>
          </div>
          <div class="col-xl-6">
            <ul class="nav nav-footer justify-content-center justify-content-xl-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
              </li>
            </ul>
          </div>
        </div>
      </footer> -->
  </div>
  <!--   Core   -->
  <script src="<?php echo BASE_URL; ?>assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--   Optional JS   -->
  <script src="<?php echo BASE_URL; ?>assets/js/plugins/chart.js/dist/Chart.min.js"></script>
  <script src="<?php echo BASE_URL; ?>assets/js/plugins/chart.js/dist/Chart.extension.js"></script>
  <!--   Argon JS   -->
  <script src="<?php echo BASE_URL; ?>assets/js/argon-dashboard.min.js?v=1.1.0"></script>

</body>


</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    By Drones - Sua Pulverização sob nosso Controle
  </title>
  <!-- Favicon -->
  <link href="<?php echo BASE_URL; ?>assets/img/brand/drone.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="<?php echo BASE_URL; ?>assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="<?php echo BASE_URL; ?>assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="<?php echo BASE_URL; ?>assets/css/argon-dashboard.css?v=1.1.0" rel="stylesheet" />
</head>

<body class="bg-default">
  <div class="main-content vh-login">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
      <div class="container px-4">
        <a class="navbar-brand" href="<?php echo BASE_URL; ?>login">
          <img src="<?php echo BASE_URL; ?>assets/img/brand/logo_only2.svg" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-collapse-main">
          <!-- Collapse header -->
          <div class="navbar-collapse-header d-md-none">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="<?php echo BASE_URL; ?>login">
                  <img src="<?php echo BASE_URL; ?>assets/img/brand/blue.png">
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
          <!-- Navbar items -->
          <ul class="navbar-nav ml-auto">           
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <div class="header bg-gradient-primary-login py-7 py-lg-8">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6">
              <h1 class="text-white">Bem Vindo!</h1>
              <p class="text-lead text-light">Mensagem de Login!</p>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary shadow border-0">            
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <small>Informe os dados de Acesso</small>
              </div>

              <?php if(!empty($error)): ?>
                <div class="bs-callout bs-callout-danger">
                  <p><?php echo $error ?></p>
                </div>                
              <?php endif; ?>

              <form role="form" action="<?php echo BASE_URL?>login/logar" method="POST">
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Email" name="email" type="email">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Senha" name="password" type="password">
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary my-4">Acessar</button>
                </div>
              </form>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-6">
              <a href="<?php echo BASE_URL?>recuperar" class="text-light"><small>Esqueceu a senha?</small></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="">
      <div class="container">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
              © 2019 <a href="<?php echo BASE_URL ?>" class="font-weight-bold ml-1" target="_blank">By Drones</a>
            </div>
          </div>
          <div class="col-xl-6">
            <ul class="nav nav-footer justify-content-center justify-content-xl-end">
              <li class="nav-item">
                <a href="<?php echo BASE_URL ?>apresentacao" class="nav-link" target="_blank">Sobre Nós</a>
              </li>     
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <!--   Core   -->
  <script src="<?php echo BASE_URL; ?>assets/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo BASE_URL; ?>assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--   Optional JS   -->
  <!--   Argon JS   -->
  <script src="<?php echo BASE_URL; ?>assets/js/argon-dashboard.min.js?v=1.1.0"></script>
</body>

</html>

<?php /*

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
  <div class="container">
    <div class="login_form">
      <form action="<?php echo BASE_URL ?>login/logar" method="post">
      <div class="row">
        <div class="col-md-12">
          <label for="user">Login</label>
          <div class="form-group">
            <input type="text" class="form-control" id="user" name="user" placeholder="Login" required>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <label for="password">Senha</label>
          <div class="form-group">
            <input type="text" class="form-control" id="password" name="password" placeholder="Senha" required>
          </div>
        </div>
      </div>
      <button type="submit" class="btn bn-default">Logar</button>
      </form>
    </div>
  </div>
</body>
</html>*/ ?>
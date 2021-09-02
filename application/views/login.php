<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Trasabilitate 2.<?= TRASAB_VERSION ?></title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url(); ?>assets/theme/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url(); ?>assets/theme/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
              <div class="col-lg-6 d-none d-lg-block " style="background-image: url('<?php echo base_url(); ?>assets/logo.png'); background-position: center; background-size: 55%;background-repeat: no-repeat;"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Bine ai revenit!</h1>
                    <h2 class="h2 text-gray-900 mb-3">Trasabilitate 2.<?= TRASAB_VERSION ?></h2>
                    <hr>
                    <p style="color:red"><?php echo $this->session->flashdata('msg');?></p>
                  </div>
                  <form class="user" action="<?php echo site_url('login/auth');?>" method="post">
                    <div class="form-group">
                      <input type="username" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Utilizator..." name="user" required autofocus>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Parola" name="password" required>
                    </div>
                    
                    <button class="btn btn-primary btn-user btn-block" type="submit">
                      Autentificare
                    </button>
                    
                    
                    
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="https://zamolx.ro/contact/">Support Tehnic</a>
                  </div>
                  
                </div>
                Dezvoltat de <a href="https://zamolx.ro">Zamolxis Services</a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url(); ?>assets/theme/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/theme/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url(); ?>assets/theme/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url(); ?>assets/theme/js/sb-admin-2.min.js"></script>

</body>

</html>

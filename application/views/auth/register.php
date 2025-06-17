<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Register | RS Marga Sakti</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/fontawesome-free/css/all.min.css'); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/dist/css/adminlte.min.css'); ?>">
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<style>
  body {
    margin: 0;
    font-family: 'Times New Roman', Times, serif;
    background-image: url('');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .register-box {
    background-color: rgba(204, 238, 255, 0.9); /* biru laut transparan */
    border-radius: 20px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
    padding: 30px;
    width: 400px;
  }

  .login-box-msg h4 {
    margin: 0;
    padding: 10px;
    background-color: #cceeff; /* biru laut */
    color: #003366; /* biru tua */
    border-radius: 10px;
    font-weight: bold;
    text-align: center;
  }

  .btn-register {
    background-color: #003366; /* biru tua */
    color: white;
    font-weight: bold;
    border-radius: 8px;
    width: 100%;
  }

  .btn-register:hover {
    background-color: #66b2ff; /* biru muda */
    color: white;
  }

  .text-center a {
    color: #003366; /* biru tua */
  }

  .text-center a:hover {
    text-decoration: underline;
  }
</style>

</head>

<body>

<div class="register-box">
  <div class="card-body register-card-body">
    <div class="login-box-msg">
      <h4>Halaman Register</h4>
    </div>

    <form action="<?= base_url('auth/process_register'); ?>" method="POST">
      <!-- username -->
      <div class="input-group mb-3">
        <input type="text" class="form-control" name="username" placeholder="Username" required>
        <div class="input-group-append">
          <div class="input-group-text"><span class="fas fa-user"></span></div>
        </div>
      </div>

      <!-- password -->
      <div class="input-group mb-3">
        <input type="password" class="form-control" name="password" placeholder="Password" required>
        <div class="input-group-append">
          <div class="input-group-text"><span class="fas fa-lock"></span></div>
        </div>
      </div>

      <!-- konfirmasi password -->
      <div class="input-group mb-3">
        <input type="password" class="form-control" name="confirm_password" placeholder="Konfirmasi Password" required>
        <div class="input-group-append">
          <div class="input-group-text"><span class="fas fa-lock"></span></div>
        </div>
      </div>

      <button type="submit" class="btn btn-register">Register</button>
    </form>

    <p class="text-center mt-3">
      <a href="<?= base_url('auth/login'); ?>">Punya akun? Klik login</a>
    </p>
  </div>
</div>

<!-- jQuery -->
<script src="<?= base_url('assets/adminlte/plugins/jquery/jquery.min.js'); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/adminlte/dist/js/adminlte.min.js'); ?>"></script>

</body>
</html>
